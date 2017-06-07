@extends('front.layout')
@include('front.index.meta')
@section('content')
    <?php
    function str_replace_once($search, $replace, $text)
    {
        $pos = strpos( $text, $search );
        return $pos!==false ? substr_replace($text, $replace, $pos, strlen($search)) : $text;
    }
    function wrap_in_tag( $str, $start, $end )
    {
        $str = str_replace_once('#', $start, $str);
        $str = str_replace_once('#', $end, $str);
        return $str;
    }
    ?>

    <section class="second-header second-header--stratification">
        <div class="second-header__wrap-1170">
            <div class="second-header__logo-wrap">
                <img src="/img/logo.png" alt="" class="second-header__logo">
            </div>
            <div class="second-header__inf-wrap">
                <div class="second-header__inf">
                    <img src="/img/SLK.png" alt="" class="second-header__inf-img">
                    <p class="second-header__inf-text">При поддержке Стритбольной Лиги Казахстана</p>
                </div>
                <div class="second-header__inf">
                    <img src="/img/3x3.png" alt="" class="second-header__inf-img second-header__inf-img--longer">
                    <p class="second-header__inf-text second-header__inf-text--longer">Турнир соответствует международному регламенту FIBA 3X3</p>
                </div>
            </div>
        </div>
        <h1 class="second-header__block-title">
            {!! wrap_in_tag($titular->block_title_field, '<span class="thin-green">', '</span>') !!}
        </h1>
    </section>


    <section class="titular">
        <div class="titular__wrap-1220">
            <div class="titular__media-wrap media">
                <video autoplay loop muted data-bgvideo="true" poster="{{$titular->main_img_field->link}}" class="media__video" id="video">
                    <source src="/video/SUMMER JAM 2016.mp4" type="video/mp4">
                    <source src="/video/SUMMER JAM 2016.webm" type="video/webm">
                </video>
                <button class="media__play-stop" onclick="vidplay()"></button>
            </div>
            <ul class="titular__facts facts">
                @foreach($titular->facts_group as $item)
                    <li class="facts__item">{!! wrap_in_tag($item->text_field, '<span class="reg-green">', '</span>') !!}</li>
                @endforeach
            </ul>
        </div>
    </section>


    <section class="statistic">
        <div class="statistic__wrap-1090">
            <h2 class="statistic__block-title block-title">
                {!! wrap_in_tag($statistic->block_title_field, '<span class="thin-green">', '</span>') !!}
            </h2>
            <div class="statistic__img-facts-wrap">
                <div class="statistic__img-wrap">
                    <img src="{{$statistic->main_img_field->link}}" alt="{{$statistic->main_img_field->alt}}" class="statistic__img">
                </div>
                <ul class="statistic__facts facts-in-figures">
                    @foreach($statistic->facts_in_fig_group as $item)
                        <li class="facts-in-figures__item">
                            <p class="facts-in-figures__figure">{{$item->number_field}}</p>
                            <p class="facts-in-figures__text">{!! $item->text_field !!}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="statistic__sj-grow">
            <p class="statistic__sj-grow-text">{!! $statistic->text_on_green_field !!}</p>
        </div>
    </section>


    <section class="principles">
        <div class="principles__wrap-1080">
            <h2 class="principles__block-title block-title">
                {!! wrap_in_tag($principles->block_title_field, '<span class="thin-green">', '</span>') !!}
            </h2>
            <ul class="principles__list three-elem-list">
                @foreach($principles->principles_list_group as $item)
                    <li class="three-elem-list__item info-block info-block--with-img">
                        <img src="{{$item->img_field->link}}" alt="{{$item->img_field->alt}}" class="info-block__img info-block__img--move">
                        <div class="info-block__text-wrap">
                            <h3 class="info-block__title">{!! wrap_in_tag($item->item_title_field, '<span class="reg-green">', '</span>') !!}</h3>
                            <p class="info-block__text">{!! $item->text_field !!}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>


    <section class="objectives">
        <div class="objectives__wrap-1180">
            <h2 class="objectives__block-title block-title">
                {!! wrap_in_tag($objectives->block_title_field, '<span class="thin-green">', '</span>') !!}
            </h2>
            <div class="objectives__img-targets-wrap">
                <img src="{{$objectives->main_img_field->link}}" alt="{{$objectives->main_img_field->alt}}" class="objectives__img">
                <ul class="objectives__list targets-list">
                    @foreach($objectives->objectives_list_group as $item)
                        <li class="targets-list__item info-block">
                            <h3 class="info-block__title">{!! wrap_in_tag($item->item_title_field, '<span class="reg-green">', '</span>') !!}</h3>
                            <p class="info-block__text">{!! $item->text_field !!}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>


    <section class="leaders">
        <div class="leaders__wrap-1080">
            <h2 class="leaders__block-title block-title">
                {!! wrap_in_tag($leaders->block_title_field, '<span class="thin-green">', '</span>') !!}
            </h2>
            <ul class="leaders__list three-elem-list">
                @foreach($leaders->leaders_list_group as $item)
                    <li class="three-elem-list__item info-block info-block--with-img">
                        <img src="{{$item->img_field->link}}" alt="{{$item->img_field->alt}}" class="info-block__img info-block__img--move">
                        <div class="info-block__text-wrap">
                            <h3 class="info-block__title">{!! wrap_in_tag($item->item_title_field, '<span class="reg-green">', '</span>') !!}</h3>
                            <p class="info-block__text">{!! $item->text_field !!}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>


    <section class="support">
        <div class="support__wrap-1200">
            <h2 class="support__block-title block-title">
                {!! wrap_in_tag($support->block_title_field, '<span class="thin-green">', '</span>') !!}
            </h2>
            <ul class="support__images-list">
                @foreach($support->support_list_group as $item)
                    <li class="support__images-list-item"><img src="{{$item->img_field->link}}" alt="{{$item->img_field->alt}}" class="support__img"></li>
                @endforeach
            </ul>
        </div>
    </section>


    <section class="plans">
        <div class="plans__wrap-1210">
            <div class="plans__text-col">
                <h2 class="plans__block-title block-title">
                    {!! wrap_in_tag($plans->block_title_field, '<span class="thin-green">', '</span>') !!}
                </h2>
                <ul class="plans__list two-col-list">
                    @foreach($plans->plans_list_group as $item)
                        <li class="two-col-list__item info-block">
                            <h3 class="info-block__title">{!! wrap_in_tag($item->item_title_field, '<span class="reg-green">', '</span>') !!}</h3>
                            <p class="info-block__text">{!! $item->text_field !!}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
            <img src="{{$plans->main_img_field->link}}" alt="{{$plans->main_img_field->alt}}" class="plans__img">
        </div>
    </section>


    <section class="information">
        <div class="information__wrap-1160">
            <div class="information__text-wrap">
                <h2 class="information__block-title block-title">
                    {!! wrap_in_tag($information->block_title_field, '<span class="thin-green">', '</span>') !!}
                </h2>
                <div class="information__text">{!! $information->text_field !!}</div>
                <div class="information__give-offer-wrap">
                    <a href="#sponsor_form" class="information__give-offer-btn sponsor_form">Получить предложение</a>
                </div>
            </div>
            <ul class="information__images-list images-list">
                @foreach($information->partners_list_group as $item)
                    <li class="images-list__item"><img src="{{$item->img_field->link}}" alt="{{$item->img_field->alt}}" class="images-list__img"></li>
                @endforeach
            </ul>
        </div>
    </section>


    <section class="packages">
        <?php $j = 1 ?>
        @foreach($packages->package_type_group as $package)
            <div class="package @if( $j % 2 == 0 ) package--darker @else package--lighter @endif">
                <div class="package__wrap-1080">
                    @if( $j == 1 )
                        <h2 class="package__blocks-title">СПОНСОРСКИЕ ПАКЕТЫ</h2>
                        <h2 class="package__block-title package__block-title--top-indent block-title">
                    @else
                        <h2 class="package__block-title block-title">
                    @endif
                        {!! wrap_in_tag($package->block_title_field, '<span class="thin-green">', '</span>') !!}
                    </h2>
                    <ul class="package__components-list components-list">
                        @for($i = 1; $i <=5; $i++)
                            <?php $item = $package->components_list_group->current(); ?>
                            @if( $i <= 3 )
                                <li class="components-list__item info-block info-block--with-img">
                                    <img src="{{$item->img_field->link}}" alt="{{$item->img_field->alt}}" class="info-block__img info-block__img--move">
                                    <div class="info-block__text-wrap">
                                        <h3 class="info-block__title">{{ $i }}.<br>{!! wrap_in_tag($item->item_title_field, '<span class="reg-green">', '</span>') !!}</h3>
                                        <p class="info-block__text">{{ $item->text_field  }}</p>
                                    </div>
                                </li>
                            @else
                                <li class="components-list__item @if($i == 4) components-list__item--520 @else components-list__item--490 @endif info-block">
                                    <img src="{{$item->img_field->link}}" alt="{{$item->img_field->alt}}" class="info-block__img">
                                    <h3 class="info-block__title">{{ $i }}.<br>{!! wrap_in_tag($item->item_title_field, '<span class="reg-green">', '</span>') !!}</h3>
                                    <p class="info-block__text">{{ $item->text_field  }}</p>
                                    @if( $i == 5 )
                                        <?php $package->components_list_group->next(); ?>
                                        <?php $item = $package->components_list_group->current(); ?>
                                        <h3 class="info-block__title info-block__title--top-indent">6.<br>{!! wrap_in_tag($item->item_title_field, '<span class="reg-green">', '</span>') !!}</h3>
                                        <p class="info-block__text">{{ $item->text_field  }}</p>
                                    @endif
                                </li>
                            @endif
                            <?php if($i <= 5){$package->components_list_group->next();} ?>
                        @endfor
                    </ul>
                </div>
            </div>
            <?php $j++ ?>
        @endforeach
    </section>


    <section class="contact-us">
        <div class="contact-us__wrap-520">
            <div class="contact-us__contact-block contact-block">
                <h3 class="contact-block__title">
                    {!! wrap_in_tag($contact_us->block_title_field, '<span class="thin-green">', '</span>') !!}
                </h3>
                <div class="contact-block__img-wrap">
                    <img src="{{$contact_us->main_img_field->link}}" alt="{{$contact_us->main_img_field->alt}}" class="contact-block__img">
                </div>
                <p class="contact-block__name">{{ $contact_us->person_name_field  }}</p>
                <p class="contact-block__position">{{ $contact_us->position_field  }}</p>
                <p class="contact-block__tel">{{ $contact_us->phone_field  }}</p>
            </div>
        </div>
    </section>
@endsection