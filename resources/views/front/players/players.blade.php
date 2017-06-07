@extends('front.layout')
@include('front.players.meta')
@section('content')

    <section class="second-header">
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
                    <p class="second-header__inf-text second-header__inf-text--longer">Турнир соответствует
                        международному регламенту FIBA 3X3</p>
                </div>
            </div>
        </div>
    </section>


    <section class="info-page">
        <h1 class="info-page__block-title">ИГРОКАМ</h1>
        <div class="info-page__wrap-1010">
            <div class="info-page__content-col info-content-col">
                <h2 class="info-content-col__title">{{$inf_page->page_title_field}}</h2>
                <div class="info-content-col__text-block text-block">{!! $inf_page->text_field !!}</div>
            </div>
            <div class="info-page__sub-navigation sub-navigation">
                <ul class="sub-navigation__list">
                    @foreach($inf_pages->pl_info_page_group as $item)
                        <li class="sub-navigation__item"><a href="/players/{{$item->slug_field}}" class="sub-navigation__link">{{$item->page_title_field}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection