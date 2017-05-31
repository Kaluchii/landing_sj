@extends('back.layout')
@section('content')

    @include('back.content-top', ['title' => 'Титульный блок'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Статичные поля</h3>
        </div>


        <div class="box-body">

            <div class="form-group">
                <label>Заголовок (Используйте # для обозначения начала и конца зеленого текста)</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->block_title_field}}"
                       data-name="block_title"
                       data-type="string"
                       data-block="titular"
                       data-id="0">
            </div>

            <div class="form-group">
                <label>Превью видеороликов</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">

                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$block->main_img_field->link}}?{{$block->main_img_field->cache_index}}" class="kv-preview-data file-preview-image" title="{{$block->main_img_field->alt}}" alt="{{$block->main_img_field->alt}}">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-footer-caption" title="{{$block->main_img_field->alt}}">{{$block->main_img_field->name_field}} <br> </div>
                                        <div class="file-actions">
                                            <input type="text" class="form-control alt-text" data-block="titular" data-type="images" data-id="0" data-name="alt">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="input-group-btn">
                    <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="hidden-xs">Очистить</span></button>
                    <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="hidden-xs">Cancel</span></button>
                    <div tabindex="500" class="btn btn-primary btn-file">
                        <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                        <span class="hidden-xs">Выбрать изображение …</span>
                        <input type="file" class="form-control file"
                               data-block="titular"
                               data-name="main_img"
                               data-type="image"
                               data-id="0">
                    </div>
                </div>

            </div>

    <div class="box box-info group-item-widget"
         data-block="facts">
        <div class="box-header with-border">
            <h3 class="box-title"> Факты о турнире </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($block->facts_group as $item)
                    @include('back.groups.facts.facts_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>

@endsection