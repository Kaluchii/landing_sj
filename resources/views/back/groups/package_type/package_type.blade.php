@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Редактирование спонсорского пакета'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования</h3>
        </div>


        <div class="box-body">
            <div class="form-group">
                <label>Название категории изображений</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->block_title_field}}"
                       data-name="block_title"
                       data-type="string"
                       data-block="package_type"
                       data-id="{{$item->id_field}}">
            </div>


        </div>

        <div class="box box-info group-item-widget"
             data-block="components_list">
            <div class="box-header with-border">
                <h3 class="box-title"> Составляющие пакета </h3>
                <button type="submit" data-parent="{{$item->id_field}}" class="btn btn-primary pull-right add-flat-item">Добавить</button>
            </div>
            <div class="box-body">

                <div class="groupflat-widget group-item-wrap">
                    @foreach($item->components_list_group as $list_item)
                        @include('back.groups.components_list.components_list_box', ['item' => $list_item])
                    @endforeach
                </div>
            </div>
        </div>

    </div>

@endsection