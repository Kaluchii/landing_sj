@section('header')
    <header class="header">
        <div class="header__wrap-1170">
            <nav class="header__main-menu menu">
                <button class="header__hamburger hamburger" type="button">
                      <span class="hamburger__box">
                        <span class="hamburger__inner"></span>
                      </span>
                </button>
                <ul class="menu__list main-menu-list">
                    <li class="menu__item"><a href="/" class="menu__link link">О&nbsp;ТУРНИРЕ</a></li>
                    <li class="menu__item menu__item--delimiter">•</li>
                    {{--<li class="menu__item"><a href="#" class="menu__link link">ВОЛОНТЕРАМ</a></li>
                    <li class="menu__item menu__item--delimiter">•</li>--}}
                    <li class="menu__item"><a href="/for-players" class="menu__link link">ИГРОКАМ</a></li>
                    {{--<li class="menu__item menu__item--delimiter">•</li>
                    <li class="menu__item"><a href="#" class="menu__link link">ВИДЕО</a></li>
                    <li class="menu__item menu__item--delimiter">•</li>
                    <li class="menu__item"><a href="#" class="menu__link link">ФОТО</a></li>--}}
                </ul>
            </nav>
            <div class="header__additionally-menu menu">
                <ul class="menu__list">
                    <li class="menu__item menu__item--link"><a href="//www.3x3planet.com/" target="_blank" class="menu__link yellow-link">РЕГИСТРАЦИЯ КОМАНДЫ</a></li>
                    <li class="menu__item menu__item--link"><a href="#become_volunteer_form" class="menu__link yellow-link become_volunteer_form">СТАТЬ ВОЛОНТЕРОМ</a></li>
                    <li class="menu__item menu__item--link"><a href="#become_sponsor_form" class="menu__link yellow-link become_sponsor_form">СТАТЬ СПОНСОРОМ</a></li>
                </ul>
            </div>
        </div>
    </header>
@endsection