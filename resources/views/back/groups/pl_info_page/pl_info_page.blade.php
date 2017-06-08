@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Редактирование информационной страницы для игроков'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования</h3>
        </div>


        <div class="box-body">
            <div class="form-group">
                <label>Название страницы</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->page_title_field}}"
                       data-name="page_title"
                       data-type="string"
                       data-block="pl_info_page"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Вид ссылки в адресной строке</label>
                <input class="form-control slug string"
                       type="text" placeholder=""
                       value="{{$item->slug_field}}"
                       data-name="slug"
                       data-block="pl_info_page"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Текст</label>
                <textarea class="form-control text text-editor"
                          data-name="text"
                          data-type="text"
                          data-block="pl_info_page"
                          data-id="{{$item->id_field}}">{{$item->text_field}}</textarea>
            </div>

        </div>

    </div>

@endsection