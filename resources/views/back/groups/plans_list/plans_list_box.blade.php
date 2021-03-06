<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Цель {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="plans_list">Удалить</button>
    </div>
    <div class="box-body">

        <div class="form-group">
            <label>Заголовок (Используйте # для обозначения начала и конца зеленого текста)</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->item_title_field}}"
                   data-name="item_title"
                   data-type="string"
                   data-block="plans_list"
                   data-id="{{$item->id_field}}">
        </div>

        <div class="form-group">
            <label>Текст</label>
            <textarea class="form-control text"
                      data-name="text"
                      data-type="text"
                      data-block="plans_list"
                      data-id="{{$item->id_field}}">{{$item->text_field}}</textarea>
        </div>

    </div>
</div>