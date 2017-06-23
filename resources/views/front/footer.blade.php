@section('footer')
    <footer class="footer">
        <div class="footer__wrap-1080">
            <div class="footer__socials socials">
                <h4 class="socials__title">МЫ В СОЦИАЛЬНЫХ СЕТЯХ</h4>
                <ul class="socials__links-list">
                    <li class="socials__item"><a target="_blank" href="https://vk.com/summerjamkz" class="socials__link yellow-link">ВКОНТАКТЕ</a></li>
                    <li class="socials__item"><a target="_blank" href="https://www.instagram.com/summer_jam_kz/" class="socials__link yellow-link">ИНСТАГРАММ</a></li>
                    <li class="socials__item"><a target="_blank" href="https://www.facebook.com/events/1958153867774720/" class="socials__link yellow-link">ФЕЙСБУК</a></li>
                    <li class="socials__item"><a target="_blank" href="https://www.youtube.com/user/McLuCkEr13/playlists" class="socials__link yellow-link">ЮТУБ</a></li>
                </ul>
            </div>
            <div class="footer__partners partners">
                <h4 class="partners__title">ОРГАНИЗАТОРЫ ТУРНИРА</h4>
                <ul class="partners__list">
                    @foreach($footer->our_partners_list_group as $item)
                        <li class="partners__item"><img src="{{$item->img_field->link}}" alt="{{$item->img_field->alt}}" class="partners__img"></li>
                    @endforeach
                </ul>
            </div>
            <p class="footer__developer">Разработка сайта, дизайна
                и маркетинга турнира — <a href="//interpro.kz" class="yellow-link">ИнтерПро</a></p>
        </div>
    </footer>
@endsection