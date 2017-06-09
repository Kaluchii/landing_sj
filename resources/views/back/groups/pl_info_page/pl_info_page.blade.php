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

    <div class="box box box-success">

        <div class="box-header with-border">
            <h3 class="box-title">СЕО поля для редактирования</h3>
        </div>

        <div class="box-body">
            <div class="form-group">
                <label>Тайтл</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->seo_title_field}}"
                       data-name="seo_title"
                       data-type="seo"
                       data-block="pl_info_page"
                       data-id="{{$item->id_field}}">
            </div>
            <div class="form-group">
                <label>Ключевые слова</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->seo_keywords_field}}"
                       data-name="seo_keywords"
                       data-type="seo"
                       data-block="pl_info_page"
                       data-id="{{$item->id_field}}">
            </div>
            <div class="form-group">
                <label>Описание страницы</label>
                <textarea class="form-control text"
                          data-name="seo_description"
                          data-type="seo"
                          data-block="pl_info_page"
                          data-id="{{$item->id_field}}">{{$item->seo_description_field}}</textarea>
            </div>
        </div>
    </div>

@endsection