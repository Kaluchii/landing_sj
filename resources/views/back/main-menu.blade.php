@section('main-menu')
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header">Страницы и категории</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Главная страница</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="/adm/titular">
                            <i class="fa fa-chevron-circle-right"></i> <span>Титульный блок</span>
                        </a>
                    </li>
                    <li>
                        <a href="/adm/statistic">
                            <i class="fa fa-chevron-circle-right"></i> <span>Статистика</span>
                        </a>
                    </li>
                    <li>
                        <a href="/adm/principles">
                            <i class="fa fa-chevron-circle-right"></i> <span>Принципы</span>
                        </a>
                    </li>
                    <li>
                        <a href="/adm/objectives">
                            <i class="fa fa-chevron-circle-right"></i> <span>Цели</span>
                        </a>
                    </li>
                    <li>
                        <a href="/adm/leaders">
                            <i class="fa fa-chevron-circle-right"></i> <span>Лидеры</span>
                        </a>
                    </li>
                    <li>
                        <a href="/adm/support">
                            <i class="fa fa-chevron-circle-right"></i> <span>Поддержка</span>
                        </a>
                    </li>
                    <li>
                        <a href="/adm/plans">
                            <i class="fa fa-chevron-circle-right"></i> <span>Планы</span>
                        </a>
                    </li>
                    <li>
                        <a href="/adm/information">
                            <i class="fa fa-chevron-circle-right"></i> <span>Спонсорам</span>
                        </a>
                    </li>
                    <li>
                        <a href="/adm/packages">
                            <i class="fa fa-chevron-circle-right"></i> <span>Спонсорские пакеты</span>
                        </a>
                    </li>
                    <li>
                        <a href="/adm/contact_us">
                            <i class="fa fa-chevron-circle-right"></i> <span>Свяжитесь с нами</span>
                        </a>
                    </li>
                    <li>
                        <a href="/adm/meta">
                            <i class="fa fa-chevron-circle-right"></i> <span>Мета данные</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Для волонтеров</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="/adm/for-volunteers">
                            <i class="fa fa-chevron-circle-right"></i> <span>Список страниц</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Для игроков</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="/adm/for-players">
                            <i class="fa fa-chevron-circle-right"></i> <span>Список страниц</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="header">Для всего сайта</li>
            <li>
                <a href="/adm/footer">
                    <i class="fa fa-chevron-circle-right"></i> <span>Футер</span>
                </a>
            </li>
            <li>
                <a href="/adm/scripts">
                    <i class="fa fa-chevron-circle-right"></i> <span>Скрипты</span>
                </a>
            </li>
            <li>
                <a href="/adm/mails">
                    <i class="fa fa-chevron-circle-right"></i> <span>Почта</span>
                </a>
            </li>



            {{--<li>--}}
                {{--<a href="reg">--}}
                    {{--<i class="fa fa-link"></i> <span>Регистрация</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
                {{--<a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>--}}
                        {{--<span class="pull-right-container">--}}
                            {{--<i class="fa fa-angle-left pull-right"></i>--}}
                        {{--</span>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="#">Link in level 2</a></li>--}}
                    {{--<li><a href="#">Link in level 2</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul>
    </section>

@endsection