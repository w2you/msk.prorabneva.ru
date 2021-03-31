<?php
// ROISTAT BEGIN
$comment = isset($_POST['question']) ? $_POST['question'] : null;
$name = isset($_POST['first_last_name']) ? $_POST['first_last_name'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$phone = isset($_POST['phone']) ? $_POST['phone'] : null;

if(!empty($phone) or !empty($email)){

    $comment = "Вопрос клиента: {$comment}\n".
                "Со страницы: {$_POST['form_page']}\n".
                "Страна: {$_POST['geo_country']}\n".
                "Город: {$_POST['geo_city']}\n".
                "IP: {$_POST['client_ip']}\n".
                "С мобильного устройства: " . ($_POST['is_mobile'] ? "Да" : "Нет");
   
    $roistatUrl = array_key_exists('ref_host',$_POST) ? $_POST['ref_host'] : null;
	$roistatUrlArr = explode('?',$roistatUrl);
    $roistatData = array(
        'key'     => 'NDAyNjQ6NDU2MDE6ODBhOGI0NjJjMzEyYTUwZWViZTU0YmZmMGUyZDBiNzc=',
        'roistat' => isset($_POST['cookies']['roistat_visit']) ? $_POST['cookies']['roistat_visit'] : null,
        'title'   => "Новый лид от Venyoo",
        'comment' => $comment,
        'name'    => $name,
        'email'   => $email,
        'phone'   => $phone,
        'fields'  => array(
            'form_name' => 'Venyoo',
            'url' => $roistatUrlArr[0],
        ),
    );

    file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));

}
// ROISTAT END

$host = 'localhost'; // ����� ������� 
$database = 'cl32972_prorab'; // ��� ���� ������
$user = 'cl32972_prorab'; // ��� ������������
$password = 'MzQewUW0'; // ������


$mysqli = new mysqli("localhost", $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

/*
$link = mysql_connect("localhost", $user, $password);        
$db_selected = mysql_select_db($database, $link);
*/

$text = explode("&",file_get_contents('php://input'));
for ($i=0;$i<count($text);$i++)
{
$mass=explode("=",$text[$i]);
if ($mass[0]=='first_last_name') $name= urldecode($mass[1]);
if ($mass[0]=='phone') $phone = urldecode($mass[1]);
if ($mass[0]=='question') $q = urldecode($mass[1]);
};

$sql1='INSERT into zvonki values (NULL,"2","'.$phone.'","'.$name.'","'.$q.'","'.date('Y-m-d').'","1")';
$rr=$mysqli->query($sql1);


?>