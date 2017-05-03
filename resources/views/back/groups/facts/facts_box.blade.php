<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Факт {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="facts">Удалить</button>
    </div>
    <div class="box-body">

        <div class="form-group">
            <label>Заголовок</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->text_field}}"
                   data-name="text"
                   data-type="string"
                   data-block="facts"
                   data-id="{{$item->id_field}}">
        </div>

    </div>
</div>