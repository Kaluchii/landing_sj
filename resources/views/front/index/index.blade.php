@extends('front.layout')
@include('front.index.meta')
@section('content')
    <section class="titular">
        <div class="titular__wrap-1150">
            <h1 class="titular__block-title block-title">Крупнейший в Казахстане любительский турнир
                <br><span class="thin-green"> по баскетболу 3x3</span>
            </h1>
            <div class="titular__media-wrap media">
                <img src="/img/top.jpg" alt="" class="media__img">
            </div>
            <div class="titular__facts facts">
                <p class="facts__item">10 ЛЕТ В ДЕЛЕ<br><span class="thin-green"> НА ВЫСОКОМ УРОВНЕ</span></p>
                <p class="facts__item">БОЛЕЕ 150 КОМАНД<br><span class="thin-green"> И ТЫСЯЧИ ЗРИТЕЛЕЙ</span></p>
                <p class="facts__item"><span class="thin-green">4 ВЫХОДНЫХ ДНЯ<br></span> 9 ДНЕЙ АКТИВНОСТИ</p>
                <p class="facts__item">УЧАСТНИКИ ИЗ<span class="thin-green"> США,<br>СРЕДНЕЙ АЗИИ И СО ВСЕГО КАЗАХСТАНА</span></p>
            </div>
        </div>
    </section>
    <section class="statistic">
        <div class="statistic__wrap-1090">
            <h2 class="statistic__block-title block-title">СТАТИСТИКА<span class="thin-green"> ТУРНИРА</span></h2>
            <div class="statistic__img-facts-wrap">
                <img src="/img/820x540.jpg" alt="" class="statistic__img">
                <div class="statistic__facts facts-in-figures">
                    <div class="facts-in-figures__item">
                        <p class="facts-in-figures__figure">700</p>
                        <p class="facts-in-figures__text">УЧАСТНИКОВ</p>
                    </div>
                    <div class="facts-in-figures__item">
                        <p class="facts-in-figures__figure">80 000</p>
                        <p class="facts-in-figures__text">ЗРИТЕЛЕЙ<br>И БОЛЕЛЬЩИКИ</p>
                    </div>
                    <div class="facts-in-figures__item">
                        <p class="facts-in-figures__figure">8</p>
                        <p class="facts-in-figures__text">ГОРОДОВ</p>
                    </div>
                    <div class="facts-in-figures__item">
                        <p class="facts-in-figures__figure">50 000</p>
                        <p class="facts-in-figures__text">ЗРИТЕЛЕЙ В СОЦИАЛЬНЫХ СЕТЯХ</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="statistic__sj-grow">
            <p class="statistic__sj-grow-text">За 10 лет, SummerJam вырос из небольшого турнира в парке в самый
            крупный и стабильный любительский турнир Казахстана.<br>И мы только начали.</p>
        </div>
    </section>
@endsection