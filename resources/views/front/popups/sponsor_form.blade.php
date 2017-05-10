<div class="white-popup mfp-with-anim mfp-hide form-id" id="sponsor_form">
    <h4 class="white-popup__title">Спонсорское предложение</h4>
    <form {{--novalidate action="/feedback/mail" method="POST" name="partner" autocomplete="off"--}}
         class="white-popup__form feedback-form">
        {{--Передача Названия формы--}}
        <input type="hidden" name="form" class="form-input" value="sponsor_form">

        <div class="feedback-form__row form-row">
            <label class="form-row__name">
                <span class="form-row__label">Имя</span>
                <div class="form-row__validation-wrap">
                    <input type="text" name="sponsor_name" required class="form-row__input form-input" autofocus>
                    <div class="form-row__tooltip-wrap"><p class="form-row__tooltip">Если хотите, мы будем звать Вас
                            Эдуард</p></div>
                </div>
            </label>
        </div>

        <div class="feedback-form__row form-row">
            <label class="form-row__name">
                <span class="form-row__label">Контактный телефон</span>
                <div class="form-row__validation-wrap">
                    <input type="tel" class="form-row__input form-input"
                           data-mask="+7 (000) 000-00-00"
                           placeholder="+7 (___) ___-__-__"
                           data-require="true"
                           maxlength="25"
                           required
                           name="phone">
                    <div class="form-row__tooltip-wrap"><p class="form-row__tooltip">Укажите номер для связи</p></div>
                </div>
            </label>
        </div>

        <div class="feedback-form__row form-row">
            <label class="form-row__name">
                <span class="form-row__label">Эл. почта</span>
                <div class="form-row__validation-wrap">
                    <input type="email" name="email" required class="form-row__input form-input">
                    <div class="form-row__tooltip-wrap"><p class="form-row__tooltip">Электронный адрес в формате
                            address@mail.com</p></div>
                </div>
            </label>
        </div>

        <div class="feedback-form__row form-row">
            <label class="form-row__name">
                <span class="form-row__label">Комментарий</span>
                <div class="form-row__validation-wrap">
                    <textarea name="question" class="form-row__input form-row__input--textarea form-input"></textarea>
                    <div class="form-row__tooltip-wrap"><p class="form-row__tooltip">Краткая информация о вашей
                            компании</p></div>
                </div>
            </label>
        </div>

        <div id="recaptcha" class="g-recaptcha" data-size="invisible"
             {{--data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"--}}
             data-sitekey="6LcvuCAUAAAAAJgp_f6pUukFjFpBccl72h0Y24rr"
             data-callback="onSubmitReCaptcha"></div>

        <div class="feedback-form__row form-row feedback-form__row--right-flag">
            <span class="form-row__name">
                <input type="submit" value="Отправить" class="form-row__send-form send-form">
            </span>
        </div>
    </form>
</div>