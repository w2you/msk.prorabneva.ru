<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;
use TCG\Voyager\Models\Role;

/**
 * BREAD-конфигурация для журнала согласий с cookie.
 *
 * Безопасный режим: всё через firstOrNew/syncWithoutDetaching —
 * существующие записи Voyager не затрагиваются, добавляется только новое.
 *
 * Журнал «только чтение»: роли admin выдаются лишь browse + read,
 * а add/edit/delete снимаются — это скрывает кнопки «Добавить»,
 * «Удалить выбранное» и действия правки/удаления.
 *
 * Запуск: php artisan db:seed --class=CookieConsentBreadSeeder
 */
class CookieConsentBreadSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run(): void
    {
        $dataType = $this->dataType('cookie-consents', 'cookie_consents');

        // Поля журнала: [field, type, display_name, browse, read, edit, add, delete, order, details]
        $rows = [
            ['id',             'number',    'ID',                    0, 0, 0, 0, 0, 1,  ''],
            ['consented_at',   'timestamp', 'Дата и время согласия', 1, 1, 0, 0, 0, 2,  ''],
            ['form',           'text',      'Форма',                 1, 1, 0, 0, 0, 3,  ''],
            ['page_url',       'text',      'Страница',              1, 1, 0, 0, 0, 4,  ''],
            ['ip',             'text',      'IP-адрес',              1, 1, 0, 0, 0, 5,  ''],
            ['user_agent',     'text_area', 'User-Agent',            0, 1, 0, 0, 0, 6,  ''],
            ['referer',        'text',      'Referer',               0, 1, 0, 0, 0, 7,  ''],
            ['policy_version', 'text',      'Версия политики',       1, 1, 0, 0, 0, 8,  ''],
            ['region_id',      'number',    'Регион (ID)',           0, 1, 0, 0, 0, 9,  ''],
            ['created_at',     'timestamp', 'Создано',               0, 0, 0, 0, 0, 10, ''],
            ['updated_at',     'timestamp', 'Обновлено',             0, 0, 0, 0, 0, 11, ''],
        ];

        foreach ($rows as $row) {
            $this->dataRow($dataType, $row[0], [
                'type'         => $row[1],
                'display_name' => $row[2],
                'required'     => 0,
                'browse'       => $row[3],
                'read'         => $row[4],
                'edit'         => $row[5],
                'add'          => $row[6],
                'delete'       => $row[7],
                'order'        => $row[8],
                'details'      => $row[9],
            ]);
        }

        $this->menuItem($dataType);
        $this->permissions();
    }

    /**
     * Регистрация типа данных (BREAD).
     *
     * @param string $slug URL-slug раздела (для маршрутов voyager.{slug}.*)
     * @param string $name Имя таблицы/модели
     * @return DataType
     */
    protected function dataType(string $slug, string $name): DataType
    {
        $dataType = DataType::firstOrNew(['slug' => $slug]);

        if (!$dataType->exists) {
            $attributes = [
                'name'                  => $name,
                'display_name_singular' => 'Согласие с cookie',
                'display_name_plural'   => 'Согласия с cookie',
                'icon'                  => 'voyager-certificate',
                'model_name'            => 'App\\Models\\CookieConsent',
                'policy_name'           => '',
                'controller'            => '',
                'generate_permissions'  => 1,
                'server_side'           => 0,
                'description'           => 'Журнал согласий посетителей с обработкой данных (cookie)',
                // MSK-специфика: в data_types есть region_id (BREAD регионально-зависимый).
                // Привязываем журнал к базовому региону.
                'region_id'             => 1,
            ];

            // Защита от расхождений схемы Voyager на проде: пишем только те колонки,
            // которые реально есть в таблице data_types (как было с default_search_key).
            $dataType->fill($this->onlyExistingColumns('data_types', $attributes))->save();
        }

        return $dataType;
    }

    /**
     * Описание поля BREAD.
     *
     * @param DataType $dataType   Тип данных, к которому относится поле
     * @param string   $field      Имя поля (колонки)
     * @param array    $attributes Атрибуты строки BREAD
     * @return DataRow
     */
    protected function dataRow(DataType $dataType, string $field, array $attributes): DataRow
    {
        $dataRow = DataRow::firstOrNew([
            'data_type_id' => $dataType->id,
            'field'        => $field,
        ]);

        if (!$dataRow->exists) {
            $dataRow->fill($this->onlyExistingColumns('data_rows', $attributes))->save();
        }

        return $dataRow;
    }

    /**
     * Оставить из массива атрибутов только те ключи, под которые в таблице
     * реально есть колонки. Страхует сид от расхождений схемы Voyager на проде.
     *
     * @param string $table
     * @param array  $attributes
     * @return array
     */
    protected function onlyExistingColumns(string $table, array $attributes): array
    {
        return array_filter(
            $attributes,
            function ($key) use ($table) {
                return Schema::hasColumn($table, $key);
            },
            ARRAY_FILTER_USE_KEY
        );
    }

    /**
     * Пункт меню в админке.
     *
     * @param DataType $dataType
     * @return void
     */
    protected function menuItem(DataType $dataType): void
    {
        $menu = Menu::where('name', 'admin')->first();

        if (!$menu) {
            return;
        }

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Согласия с cookie',
            'url'     => '',
            'route'   => 'voyager.cookie-consents.index',
        ]);

        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-certificate',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 20,
            ])->save();
        }
    }

    /**
     * Права доступа. Журнал «только чтение»: роли admin выдаём лишь
     * browse + read, а add/edit/delete снимаем — это скрывает в админке
     * кнопки «Добавить», «Удалить выбранное» и действия правки/удаления.
     *
     * @return void
     */
    protected function permissions(): void
    {
        Permission::generateFor('cookie_consents');

        $role = Role::where('name', 'admin')->first();

        if (!$role) {
            return;
        }

        $readOnlyKeys = ['browse_cookie_consents', 'read_cookie_consents'];

        $grantIds = Permission::where('table_name', 'cookie_consents')
            ->whereIn('key', $readOnlyKeys)->pluck('id')->all();
        $role->permissions()->syncWithoutDetaching($grantIds);

        $revokeIds = Permission::where('table_name', 'cookie_consents')
            ->whereNotIn('key', $readOnlyKeys)->pluck('id')->all();
        $role->permissions()->detach($revokeIds);
    }
}
