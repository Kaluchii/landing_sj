@extends('back.layout')
@section('content')

    @include('back.content-top', ['title' => 'Информация для спонсоров'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Статичные поля</h3>
        </div>


        <div class="box-body">

            <div class="form-group">
                <label>Заголовок</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->block_title_field}}"
                       data-name="block_title"
                       data-type="string"
                       data-block="information"
                       data-id="0">
            </div>

            <div class="form-group">
                <label>Текст</label>
                <textarea class="form-control text"
                          data-name="text"
                          data-type="text"
                          data-block="information"
                          data-id="0">{{$block->text_field}}</textarea>
            </div>

        </div>
    </div>

    <div class="box box-info group-item-widget"
         data-block="partners_list">
        <div class="box-header with-border">
            <h3 class="box-title"> Список спонсоров </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($block->partners_list_group as $item)
                    @include('back.groups.partners_list.partners_list_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>

@endsection