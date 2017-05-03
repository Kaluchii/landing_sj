@extends('back.layout')
@section('content')

    @include('back.content-top', ['title' => 'Наши лидеры'])

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
                       data-block="leaders"
                       data-id="0">
            </div>

        </div>
    </div>

    <div class="box box-info group-item-widget"
         data-block="leaders_list">
        <div class="box-header with-border">
            <h3 class="box-title"> Список лидеров </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($block->leaders_list_group as $item)
                    @include('back.groups.leaders_list.leaders_list_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>

@endsection