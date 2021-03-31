<div class="row">
    <div class="col-md-3">
        <label for="">Количество</label>
        <input type="text" name="repairInfo[stats][{{ $statId }}][count]" class="form-control" value="{{ $stat ? $stat['count']  : ''}}">
    </div>
    <div class="col-md-3">
        <label for="">Единица измерения</label>
        <input type="text" name="repairInfo[stats][{{ $statId }}][unit]" class="form-control" value="{{ $stat ? $stat['unit'] : ''}}">
    </div>
    <div class="col-md-3">
        <label for="">Название</label>
        <input type="text" name="repairInfo[stats][{{ $statId }}][name]" class="form-control" value="{{ $stat ? $stat['name'] : '' }}">
    </div>
    <div class="col-md-3">
        <button class="btn btn-danger remove-stat" type="button">Удалить статистику</button>
    </div>
</div>
<hr class="visible-xs visible-sm">