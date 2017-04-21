@extends('front.layout')
@include('front.index.meta')
@section('content')
    {{--<section class="index-header">
        <div class="index-header__wrap-1170">
            <div class="index-header__logo-wrap">
                <img src="/img/logo.png" alt="" class="index-header__logo">
            </div>
            <div class="index-header__inf-wrap">
                <div class="index-header__inf">
                    <img src="/img/40x60.jpg" alt="" class="index-header__inf-img">
                    <p class="index-header__inf-text">При поддержке Стритбольной Лиги Казахстана</p>
                </div>
                <div class="index-header__inf">
                    <img src="/img/70x40.jpg" alt="" class="index-header__inf-img index-header__inf-img--longer">
                    <p class="index-header__inf-text index-header__inf-text--longer">Турнир соответствует международному регламенту FIBA 3X3</p>
                </div>
            </div>
        </div>
    </section>--}}


    {{--<section class="titular">
        <div class="titular__wrap-1220">
            <h1 class="titular__block-title">Крупнейший в Казахстане любительский турнир
                <br><span class="thin-green"> по баскетболу 3x3</span>
            </h1>
            <div class="titular__media-wrap media">
                <img src="/img/1220x530.jpg" alt="" class="media__img">
            </div>
            <ul class="titular__facts facts">
                <li class="facts__item">10&nbsp;ЛЕТ В ДЕЛЕ<br><span class="reg-green"> НА ВЫСОКОМ УРОВНЕ</span></li>
                <li class="facts__item">БОЛЕЕ 150 КОМАНД<br><span class="reg-green"> И ТЫСЯЧИ ЗРИТЕЛЕЙ</span></li>
                <li class="facts__item"><span class="reg-green">4&nbsp;ВЫХОДНЫХ ДНЯ<br></span> 9&nbsp;ДНЕЙ АКТИВНОСТИ
                </li>
                <li class="facts__item">УЧАСТНИКИ ИЗ<span
                            class="reg-green"> США,<br>СРЕДНЕЙ АЗИИ И СО ВСЕГО КАЗАХСТАНА</span></li>
            </ul>
        </div>
    </section>--}}


    {{--<section class="statistic">
        <div class="statistic__wrap-1090">
            <h2 class="statistic__block-title block-title">СТАТИСТИКА<span class="thin-green"> ТУРНИРА</span></h2>
            <div class="statistic__img-facts-wrap">
                <img src="/img/820x540.jpg" alt="" class="statistic__img">
                <ul class="statistic__facts facts-in-figures">
                    <li class="facts-in-figures__item">
                        <p class="facts-in-figures__figure">700</p>
                        <p class="facts-in-figures__text">УЧАСТНИКОВ</p>
                    </li>
                    <li class="facts-in-figures__item">
                        <p class="facts-in-figures__figure">80&nbsp;000</p>
                        <p class="facts-in-figures__text">ЗРИТЕЛЕЙ<br>И БОЛЕЛЬЩИКИ</p>
                    </li>
                    <li class="facts-in-figures__item">
                        <p class="facts-in-figures__figure">8</p>
                        <p class="facts-in-figures__text">ГОРОДОВ</p>
                    </li>
                    <li class="facts-in-figures__item">
                        <p class="facts-in-figures__figure">50&nbsp;000</p>
                        <p class="facts-in-figures__text">ЗРИТЕЛЕЙ В СОЦИАЛЬНЫХ СЕТЯХ</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="statistic__sj-grow">
            <p class="statistic__sj-grow-text">За 10 лет, SummerJam вырос из небольшого турнира в парке в самый
                крупный и стабильный любительский турнир Казахстана.<br>И мы только начали.</p>
        </div>
    </section>--}}


    <section class="principles">
        <div class="principles__wrap-1080">
            <h2 class="principles__block-title block-title">НАШИ<span class="thin-green"> ПРИНЦИПЫ</span></h2>
            <ul class="principles__list three-elem-list">
                <li class="three-elem-list__item info-block info-block--with-img">
                    <img src="/img/280x280.jpg" alt="" class="info-block__img info-block__img--move">
                    <div class="info-block__text-wrap">
                        <h3 class="info-block__title">ЕСЛИ МЫ ДЕЛАЕМ — <br><span
                                    class="reg-green">МЫ ДЕЛАЕМ ЭТО ХОРОШО</span></h3>
                        <p class="info-block__text">Наш главный принцип — сохранить
                            честность, интерес и любовь
                            участников. Никаких подделок: все
                            будет на высоком уровне.</p>
                    </div>
                </li>
                <li class="three-elem-list__item info-block info-block--with-img">
                    <img src="/img/280x280.jpg" alt="" class="info-block__img info-block__img--move">
                    <div class="info-block__text-wrap">
                        <h3 class="info-block__title">НЕ РАДИ <br><span class="reg-green">ДЕНЕГ</span></h3>
                        <p class="info-block__text">Мы не пытаемся заработать на
                            баскетболе — мы его развиваем.
                            Все средства, полученные от
                            турнира, возвращаются в развитие
                            баскетбола.</p>
                    </div>
                </li>
                <li class="three-elem-list__item info-block info-block--with-img">
                    <img src="/img/280x280.jpg" alt="" class="info-block__img info-block__img--move">
                    <div class="info-block__text-wrap">
                        <h3 class="info-block__title">ШАГ ВПЕРЕД <br><span class="reg-green">КАЖДЫЙ ГОД</span></h3>
                        <p class="info-block__text">Каждый турнир — зимой или летом,
                            мы делаем шаг вперед и поднимаем
                            организацию тунрира на новый
                            уровень.</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>


    <section class="objectives">
        <div class="objectives__wrap-1180">
            <h2 class="objectives__block-title block-title">ЦЕЛИ<span class="thin-green"> ТУРНИРА</span></h2>
            <div class="objectives__img-targets-wrap">
                <img src="/img/810x530.jpg" alt="" class="objectives__img">
                <ul class="objectives__list targets-list">
                    <li class="targets-list__item info-block">
                        <h3 class="info-block__title"><span class="reg-green">РАЗВИТИЕ</span> СПОРТИВНОЙ ЭТИКИ И
                            КУЛЬТУРЫ</h3>
                        <p class="info-block__text">Не смотря на соревновательный дух и огромную самоотдачу в игре, мы
                            стремимся налаживать дружеские отношения в сообществе и сближать игроков.</p>
                    </li>
                    <li class="targets-list__item info-block">
                        <h3 class="info-block__title"><span class="reg-green">ПРОГРЕСС</span><br> БАСКЕТБОЛА</h3>
                        <p class="info-block__text">Баскетбол меняет культуру и учит людей действовать вместе. Нас
                            вдохновляет пример Сербии и Литвы: постоянных участников и призеров Олимпиады. Мы верим,
                            Казахстан может не хуже и для этого не нужно ждать: нужно действовать.</p>
                    </li>
                    <li class="targets-list__item info-block">
                        <h3 class="info-block__title"><span class="reg-green">ЛИДЕРСТВО</span><br> ПРИМЕРОМ</h3>
                        <p class="info-block__text">Мы привлекаем волонтеров, организации и спонсоров, чтобы подать
                            молодежи пример ответственной и деятельной команды, которая не ждет изменений, но сама
                            делает их возможными.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <section class="leaders">
        <div class="leaders__wrap-1080">
            <h2 class="leaders__block-title block-title"><span class="thin-green">НАШИ</span> ЛИДЕРЫ</h2>
            <ul class="leaders__list three-elem-list">
                <li class="three-elem-list__item info-block info-block--with-img">
                    <img src="/img/280x280.jpg" alt="" class="info-block__img info-block__img--move">
                    <div class="info-block__text-wrap">
                        <h3 class="info-block__title">ДЕМИАН ЛОНГ <br><span class="reg-green">БОСТОН, США</span></h3>
                        <p class="info-block__text">Наш главный принцип — сохранить
                            честность, интерес и любовь
                            участников. Никаких подделок: все
                            будет на высоком уровне.</p>
                    </div>
                </li>
                <li class="three-elem-list__item info-block info-block--with-img">
                    <img src="/img/280x280.jpg" alt="" class="info-block__img info-block__img--move">
                    <div class="info-block__text-wrap">
                        <h3 class="info-block__title">ЖОМАРТ АССЕНКАНОВ <br><span class="reg-green">КАЗАХСТАН, АЛМАТЫ</span></h3>
                        <p class="info-block__text">Мы не пытаемся заработать на
                            баскетболе — мы его развиваем.
                            Все средства, полученные от
                            турнира, возвращаются в развитие
                            баскетбола.</p>
                    </div>
                </li>
                <li class="three-elem-list__item info-block info-block--with-img">
                    <img src="/img/280x280.jpg" alt="" class="info-block__img info-block__img--move">
                    <div class="info-block__text-wrap">
                        <h3 class="info-block__title">ЛЮДМИЛА ПОНКРАШКИНА <br><span
                                    class="reg-green">КАЗАХСТАН, АЛМАТЫ</span></h3>
                        <p class="info-block__text">Каждый турнир — зимой или летом,
                            мы делаем шаг вперед и поднимаем
                            организацию тунрира на новый
                            уровень.</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>


    <section class="support">
        <div class="support__wrap-1080">
            <h3 class="support__block-title"><span class="reg-green">ИНФОРМАЦИОННАЯ</span> ПОДДЕРЖКА</h3>
            <ul class="support__images-list">
                <li class="support__images-list-item"><img src="/img/200x130.jpg" alt="" class="support__img"></li>
                <li class="support__images-list-item"><img src="/img/200x130.jpg" alt="" class="support__img"></li>
                <li class="support__images-list-item"><img src="/img/200x130.jpg" alt="" class="support__img"></li>
                <li class="support__images-list-item"><img src="/img/200x130.jpg" alt="" class="support__img"></li>
                <li class="support__images-list-item"><img src="/img/200x130.jpg" alt="" class="support__img"></li>
            </ul>
        </div>
    </section>


    {{--<section class="plans">
        <div class="plans__wrap-1210">
            <div class="plans__text-col">
                <h2 class="plans__block-title block-title"><span class="thin-green">ПЛАНЫ</span> РАЗВИТИЯ</h2>
                <ul class="plans__list two-col-list">
                    <li class="two-col-list__item info-block">
                        <h3 class="info-block__title"><span class="reg-green">ОТБОРОЧНЫЕ ТУРНИРЫ</span><br> И БОЛЬШОЙ
                            ФИНАЛ</h3>
                        <p class="info-block__text">Мы будем вовлекать больше городов Казахстана: отборочные турниры на
                            местах и большой, главный турнир в Алматы.</p>
                    </li>
                    <li class="two-col-list__item info-block">
                        <h3 class="info-block__title"><span class="reg-green">БАСКЕТБОЛ</span><br> БЕЗ ОСТАНОВКИ</h3>
                        <p class="info-block__text">Игроки хотят большего: Джэм давно вырос из летнего турнира. Интерес
                            к зимнему стритболу показал, что команды хотят больше и мы дадим им такую возможность.</p>
                    </li>
                    <li class="two-col-list__item info-block">
                        <h3 class="info-block__title"><span class="reg-green">УЧАСТНИКИ</span><br> ИЗ ЕВРОПЫ И АЗИИ</h3>
                        <p class="info-block__text">Мы будем привлекать к участию профессиональные команды с
                            международных турниров и повышать авторитет казахстанских турниров.</p>
                    </li>
                    <li class="two-col-list__item info-block">
                        <h3 class="info-block__title"><span class="reg-green">АКТИВНАЯ РАБОТА</span><br> СО СМИ</h3>
                        <p class="info-block__text">Мы хотим активней привлекать спортивные сайты, телеканалы и
                            муниципальные организации в информационную поддержку турнира.</p>
                    </li>
                </ul>
            </div>
            <img src="/img/570x650.jpg" alt="" class="plans__img">
        </div>
    </section>--}}


    {{--<section class="information">
        <div class="information__wrap-1110">
            <div class="information__text-wrap">
                <h2 class="information__block-title block-title"><span class="thin-green">ИНФОРМАЦИЯ</span> ДЛЯ СПОНСОРА
                </h2>
                <div class="information__text">
                    <p class="information__text-paragraph">Мы предоставляем статус официального спонсора каждой
                        компании, поддержавшей турнир. Спонсорские пакеты отличаются содержанием, вы можете выбрать и
                        дополнить тот, что вам больше подходит.</p><br>
                    <p class="information__text-paragraph">Каждый спонсорский пакет предусматривает публикации в
                        социальных сетях и анонсы между играми, конкурсами.</p>
                </div>
                <div class="information__give-offer-wrap">
                    <a href="#" class="information__give-offer-btn">Получить предложение</a>
                </div>
            </div>
            <ul class="information__images-list images-list">
                <li class="images-list__item"><img src="/img/200x130w.jpg" alt="" class="images-list__img"></li>
                <li class="images-list__item"><img src="/img/200x130w.jpg" alt="" class="images-list__img"></li>
                <li class="images-list__item"><img src="/img/200x130w.jpg" alt="" class="images-list__img"></li>
                <li class="images-list__item"><img src="/img/200x130w.jpg" alt="" class="images-list__img"></li>
                <li class="images-list__item"><img src="/img/200x130w.jpg" alt="" class="images-list__img"></li>
                <li class="images-list__item"><img src="/img/200x130w.jpg" alt="" class="images-list__img"></li>
                <li class="images-list__item"><img src="/img/200x130w.jpg" alt="" class="images-list__img"></li>
                <li class="images-list__item"><img src="/img/200x130w.jpg" alt="" class="images-list__img"></li>
                <li class="images-list__item"><img src="/img/200x130w.jpg" alt="" class="images-list__img"></li>
            </ul>
        </div>
    </section>--}}


    <section class="packages">
        <div class="package package--lighter">
            <div class="package__wrap-1080">
                <h2 class="package__blocks-title">СПОНСОРСКИЕ ПАКЕТЫ</h2>
                <h2 class="package__block-title package__block-title--top-indent block-title">ЧЕМПИОНСКИЙ <span class="thin-green">ПАКЕТ</span></h2>
                <ul class="package__components-list components-list">
                    <li class="components-list__item info-block info-block--with-img">
                        <img src="/img/280x280.jpg" alt="" class="info-block__img info-block__img--move">
                        <div class="info-block__text-wrap">
                            <h3 class="info-block__title">1.<br><span class="reg-green">БРЕНДИРОВАНИЕ</span><br>ГЛАВНОГО КОРТА</h3>
                            <p class="info-block__text">Мы оформим и брендируем основную
                                площадку для соревнований, на которой
                                пройдут ключевые конкурсы, матчи
                                плэйофф и финал.</p>
                        </div>
                    </li>
                    <li class="components-list__item info-block info-block--with-img">
                        <img src="/img/280x280.jpg" alt="" class="info-block__img info-block__img--move">
                        <div class="info-block__text-wrap">
                            <h3 class="info-block__title">2.<br><span class="reg-green">МАРКЕТИНГ ВО ВРЕМЯ</span><br>СОРЕВНОВАНИЙ</h3>
                            <p class="info-block__text">Команда организаторов, совместно с
                                маркетологами спонсора, организует
                                маркетинг на турнире. Мы поможем
                                получить интерес аудитории и
                                максимальную пользу от участия.</p>
                        </div>
                    </li>
                    <li class="components-list__item info-block info-block--with-img">
                        <img src="/img/280x280.jpg" alt="" class="info-block__img info-block__img--move">
                        <div class="info-block__text-wrap">
                            <h3 class="info-block__title">3.<br><span class="reg-green">БРЕНДИРОВАНИЕ</span><br>ФУТБОЛОК</h3>
                            <p class="info-block__text">Футболки — один из ключевых элементов
                                маркетинга. Каждый баскет Алматы
                                любит и носит годами наши футболки, а
                                мы стараемся каждый год делать самый
                                крутой дизайн.</p>
                        </div>
                    </li>
                    <li class="components-list__item components-list__item--520 info-block">
                        <img src="/img/520x370.jpg" alt="" class="info-block__img">
                        <h3 class="info-block__title">4.<br><span class="reg-green">НАНЕСЕНИЕ ЛОГОТИПА</span><br>НА ПРИЗЫ И ПРОМО-МАТЕРИАЛЫ</h3>
                        <p class="info-block__text">Каждый год мы увеличиваем количество и качество призов:
                            футболки, чемпионские трофеи и баннеры, сетка плэйофф,
                            сертификаты и дипломы. Логотип спонсора и ссылка на сайт
                            добавляются на каждый элемент.</p>
                    </li>
                    <li class="components-list__item components-list__item--490 info-block">
                        <img src="/img/490x280.jpg" alt="" class="info-block__img">
                        <h3 class="info-block__title">5.<br><span class="reg-green">БРЕНДИРОВАНИЕ</span><br>КОМАНДЫ ДЕВИЗИОНА «ЭЛИТ»</h3>
                        <p class="info-block__text">Одна из лучших команд будет использовать название компании спонсора и носить фирменную форму.</p>
                        <h3 class="info-block__title info-block__title--top-indent">6.<br><span class="reg-green">БЕСПЛАТНОЕ УЧАСТИЕ</span><br>КОРПОРАТИВНОЙ КОМАНДЫ</h3>
                        <p class="info-block__text">Если среди сотрудников есть баскетболисты, они могут представить
                            компанию в корпоративном девизионе. Мы проведем тренировку, чтобы подготовить их к достойному участию и поможем лучше понять основы игры.</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="package package--darker">
            <div class="package__wrap-1080">
                <h2 class="package__block-title block-title">ВЕТЕРАНСКИЙ <span class="thin-green">ПАКЕТ</span></h2>
                <ul class="package__components-list components-list">
                    <li class="components-list__item info-block info-block--with-img">
                        <img src="/img/280x280.jpg" alt="" class="info-block__img info-block__img--move">
                        <div class="info-block__text-wrap">
                            <h3 class="info-block__title">1.<br><span class="reg-green">БРЕНДИРОВАНИЕ</span><br>ГЛАВНОГО КОРТА</h3>
                            <p class="info-block__text">Мы оформим и брендируем основную
                                площадку для соревнований, на которой
                                пройдут ключевые конкурсы, матчи
                                плэйофф и финал.</p>
                        </div>
                    </li>
                    <li class="components-list__item info-block info-block--with-img">
                        <img src="/img/280x280.jpg" alt="" class="info-block__img info-block__img--move">
                        <div class="info-block__text-wrap">
                            <h3 class="info-block__title">2.<br><span class="reg-green">МАРКЕТИНГ ВО ВРЕМЯ</span><br>СОРЕВНОВАНИЙ</h3>
                            <p class="info-block__text">Команда организаторов, совместно с
                                маркетологами спонсора, организует
                                маркетинг на турнире. Мы поможем
                                получить интерес аудитории и
                                максимальную пользу от участия.</p>
                        </div>
                    </li>
                    <li class="components-list__item info-block info-block--with-img">
                        <img src="/img/280x280.jpg" alt="" class="info-block__img info-block__img--move">
                        <div class="info-block__text-wrap">
                            <h3 class="info-block__title">3.<br><span class="reg-green">БРЕНДИРОВАНИЕ</span><br>ФУТБОЛОК</h3>
                            <p class="info-block__text">Футболки — один из ключевых элементов
                                маркетинга. Каждый баскет Алматы
                                любит и носит годами наши футболки, а
                                мы стараемся каждый год делать самый
                                крутой дизайн.</p>
                        </div>
                    </li>
                    <li class="components-list__item components-list__item--last components-list__item--490 info-block">
                        <img src="/img/490x280.jpg" alt="" class="info-block__img">
                        <h3 class="info-block__title">5.<br><span class="reg-green">БРЕНДИРОВАНИЕ</span><br>КОМАНДЫ ДЕВИЗИОНА «ЭЛИТ»</h3>
                        <p class="info-block__text">Одна из лучших команд будет использовать название компании спонсора и носить фирменную форму.</p>
                        <h3 class="info-block__title info-block__title--top-indent">6.<br><span class="reg-green">БЕСПЛАТНОЕ УЧАСТИЕ</span><br>КОРПОРАТИВНОЙ КОМАНДЫ</h3>
                        <p class="info-block__text">Если среди сотрудников есть баскетболисты, они могут представить
                            компанию в корпоративном девизионе. Мы проведем тренировку, чтобы подготовить их к достойному участию и поможем лучше понять основы игры.</p>
                    </li>
                    <li class="components-list__item components-list__item--520 info-block">
                        <img src="/img/520x370.jpg" alt="" class="info-block__img">
                        <h3 class="info-block__title">4.<br><span class="reg-green">НАНЕСЕНИЕ ЛОГОТИПА</span><br>НА ПРИЗЫ И ПРОМО-МАТЕРИАЛЫ</h3>
                        <p class="info-block__text">Каждый год мы увеличиваем количество и качество призов:
                            футболки, чемпионские трофеи и баннеры, сетка плэйофф,
                            сертификаты и дипломы. Логотип спонсора и ссылка на сайт
                            добавляются на каждый элемент.</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="package package--lighter">
            <div class="package__wrap-1080">
                <h2 class="package__block-title block-title">СТАРТОВЫЙ <span class="thin-green">ПАКЕТ</span></h2>
                <ul class="package__components-list components-list">
                    <li class="components-list__item info-block info-block--with-img">
                        <img src="/img/280x280.jpg" alt="" class="info-block__img info-block__img--move">
                        <div class="info-block__text-wrap">
                            <h3 class="info-block__title">1.<br><span class="reg-green">БРЕНДИРОВАНИЕ</span><br>ГЛАВНОГО КОРТА</h3>
                            <p class="info-block__text">Мы оформим и брендируем основную
                                площадку для соревнований, на которой
                                пройдут ключевые конкурсы, матчи
                                плэйофф и финал.</p>
                        </div>
                    </li>
                    <li class="components-list__item info-block info-block--with-img">
                        <img src="/img/280x280.jpg" alt="" class="info-block__img info-block__img--move">
                        <div class="info-block__text-wrap">
                            <h3 class="info-block__title">2.<br><span class="reg-green">МАРКЕТИНГ ВО ВРЕМЯ</span><br>СОРЕВНОВАНИЙ</h3>
                            <p class="info-block__text">Команда организаторов, совместно с
                                маркетологами спонсора, организует
                                маркетинг на турнире. Мы поможем
                                получить интерес аудитории и
                                максимальную пользу от участия.</p>
                        </div>
                    </li>
                    <li class="components-list__item info-block info-block--with-img">
                        <img src="/img/280x280.jpg" alt="" class="info-block__img info-block__img--move">
                        <div class="info-block__text-wrap">
                            <h3 class="info-block__title">3.<br><span class="reg-green">БРЕНДИРОВАНИЕ</span><br>ФУТБОЛОК</h3>
                            <p class="info-block__text">Футболки — один из ключевых элементов
                                маркетинга. Каждый баскет Алматы
                                любит и носит годами наши футболки, а
                                мы стараемся каждый год делать самый
                                крутой дизайн.</p>
                        </div>
                    </li>
                    <li class="components-list__item components-list__item--520 info-block">
                        <img src="/img/520x370.jpg" alt="" class="info-block__img">
                        <h3 class="info-block__title">4.<br><span class="reg-green">НАНЕСЕНИЕ ЛОГОТИПА</span><br>НА ПРИЗЫ И ПРОМО-МАТЕРИАЛЫ</h3>
                        <p class="info-block__text">Каждый год мы увеличиваем количество и качество призов:
                            футболки, чемпионские трофеи и баннеры, сетка плэйофф,
                            сертификаты и дипломы. Логотип спонсора и ссылка на сайт
                            добавляются на каждый элемент.</p>
                    </li>
                    <li class="components-list__item components-list__item--490 info-block">
                        <img src="/img/490x280.jpg" alt="" class="info-block__img">
                        <h3 class="info-block__title">5.<br><span class="reg-green">БРЕНДИРОВАНИЕ</span><br>КОМАНДЫ ДЕВИЗИОНА «ЭЛИТ»</h3>
                        <p class="info-block__text">Одна из лучших команд будет использовать название компании спонсора и носить фирменную форму.</p>
                        <h3 class="info-block__title info-block__title--top-indent">6.<br><span class="reg-green">БЕСПЛАТНОЕ УЧАСТИЕ</span><br>КОРПОРАТИВНОЙ КОМАНДЫ</h3>
                        <p class="info-block__text">Если среди сотрудников есть баскетболисты, они могут представить
                            компанию в корпоративном девизионе. Мы проведем тренировку, чтобы подготовить их к достойному участию и поможем лучше понять основы игры.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <section class="contact-us">
        <div class="contact-us__wrap-520">
            <div class="contact-us__contact-block contact-block">
                <h3 class="contact-block__title">СВЯЖИТЕСЬ С НАМИ<br><span class="thin-green">ЕСЛИ У ВАС ВОЗНИКЛИ ВОПРОСЫ</span></h3>
                <div class="contact-block__img-wrap">
                    <img src="/img/contact.jpg" alt="" class="contact-block__img">
                </div>
                <p class="contact-block__name">ЗОЯ ПОНКРАШКИНА</p>
                <p class="contact-block__position">PR-ДИРЕКТОР</p>
                <p class="contact-block__tel">+7 702 777-00-48</p>
            </div>
        </div>
    </section>
@endsection