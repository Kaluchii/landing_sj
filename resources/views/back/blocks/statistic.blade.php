@extends('back.layout')
@section('content')

    @include('back.content-top', ['title' => 'Статистика турнира'])

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
                       data-block="statistic"
                       data-id="0">
            </div>

            <div class="form-group">
                <label>Изображение (820 x 540 px)</label>
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
                                            <input type="text" class="form-control alt-text" data-block="statistic" data-type="images" data-id="0" data-name="alt">
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
                               data-block="statistic"
                               data-name="main_img"
                               data-type="image"
                               data-id="0">
                    </div>
                </div>

            </div>

            <div class="form-group">
                <label>Текст на зеленом фоне</label>
                <textarea class="form-control text"
                          data-name="text_on_green"
                          data-type="text"
                          data-block="statistic"
                          data-id="0">{{$block->text_on_green_field}}</textarea>
            </div>

        </div>
    </div>

    <div class="box box-info group-item-widget"
         data-block="facts_in_fig">
        <div class="box-header with-border">
            <h3 class="box-title"> Факты о турнире </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($block->facts_in_fig_group as $item)
                    @include('back.groups.facts_in_fig.facts_in_fig_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>

@endsection