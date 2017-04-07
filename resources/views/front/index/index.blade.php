@extends('front.layout')
@include('front.index.meta')
@section('content')
    <section class="about">
        <div class="about__facts-wrap facts">
            <div class="facts__hand-wrap">
                <div class="facts__hand">
                    <img src="/img/hand-with-lazer.png" alt="" class="facts__hand-img">
                    <img src="/img/laser_on.png" alt="" class="facts__hand-laser-img">
                </div>
            </div>
            <div class="facts__col-1-2">
                <h2 class="about__title">О компании</h2>
                <div class="facts__item fact">
                    <img src="/img/1a.jpg" alt="" class="fact__img">
                    <h3 class="fact__title">Собственное производство</h3>
                    <p class="fact__description">Мы сами выбираем и заказываем комплектующие с заводов Китая, а сборнкой
                        занимаются квалифицированные и ответственные сотрудники.</p>
                </div>
                <div class="facts__reputation">
                    <img src="/img/reputation.png" alt="Мы дорожим репутацией" class="facts__img">
                    <p class="facts__reputation-text">Мы бережем репутацию и хотим быть
                        компанией, на которую вы рассчитываете.</p>
                </div>
            </div>
            <div class="facts__col-1-2">
                <div class="facts__item fact">
                    <img src="/img/2a.jpg" alt="" class="fact__img">
                    <h3 class="fact__title">Опыт интеграции</h3>
                    <p class="fact__description">Мы понимаем особенности автоматизации бизнеса. Это позволяет нам решить
                        многие проблемы еще до того, как они появятся.</p>
                </div>
                <div class="facts__item fact">
                    <img src="/img/3a.jpg" alt="" class="fact__img">
                    <h3 class="fact__title">Лицом к партнерам</h3>
                    <p class="fact__description">Нашим партнерам не нужно выполнять план продаж, дожидаться очереди или
                        заказывать не нужный объем. Мы стремимся к честному и прозрачному сотрудничеству.</p>
                </div>
            </div>
        </div>
    </section>
@endsection