@extends('layouts.special')

@section('page-title')
Авторизация
@endsection

@section('content')
<section class="center-container auth-page__bg-img">
    <div class="register-wrapper">
        <form action="" method="POST" class="form__register">
            <p class='form-register__title'> Авторизация </p>
            <div class="register__soc-btns-container--under375"> <!-- Чтобы в активность привести одну из кнопок удали класс btn--inactive с нее -->
                <span class="every-reg-soc-btn__style s-r-b__vk--under375"></span>
                <span class="every-reg-soc-btn__style s-r-b__gmail--under375"></span>
                <span class="every-reg-soc-btn__style s-r-b__facebook--under375"></span>
                <span class="every-reg-soc-btn__style s-r-b__gmail2--under375"></span>
            </div>
            <p class='form-register__descr description'> Введите логин (почта или телефон)</p>
            <input
                type="text"
                class="register__input-login"
                placeholder="Введите логин"
                id="reg__login"
                required
            >
            <div class='second-descr-wrapper'>
                <a class="descr-wrapper__pass-descr"> Введите пароль </a>
                <a id="forgPassBtn" class="descr-wrapper__forg-descr"> Забыли пароль? </a>
            </div>
            <input
                class="register__input-pass"
                type="password"
                autocomplete="new-password"
                placeholder="Введите пароль"
                id="reg__password"
                required
            >
            <p class='form-register__descr description descrp-regquestion havent-acc--under375'>
                <a class="register__auth-link input__warning" href="#" style=""> Логин или пароль неверен </a> <!-- создать зависимость включения, если пароль неверен, стили есть -->
            </p>
            <p class='form-register__descr description descrp-regquestion'> Нет аккаунта?
                <a class="register__auth-link auth__link--move" href="/register"> Зарегистрироваться </a>
            </p>
            <a href='#'></a><input type="button" class="btn register-btn auth-btn" value="Войти"></a>
            <p class='form-register__descr description descr-fastreg'> Быстрый вход </p>
        </form>
        <div class="register__social-btn">
            <a class='register__social-btn-bg-circle social-btn__vk' href='#'><img src='../icons/reg_page_vkicon.svg' alt='icon'></a>
            <a class='register__social-btn-bg-circle social-btn__gmail-first' href='#'><img src='../icons/reg_page_gmailicon.svg' alt='icon'></a>
            <a class='register__social-btn-bg-circle social-btn__facebook' href='#'></a>
            <a class='register__social-btn-bg-circle social-btn__gmail-second' href='#'><img src='../icons/reg_page_gmailicon2.svg' alt='icon'></a>
        </div>
    </div>
</section>
<section class="full-display-dark-modal">
    <div class="rend-cond__modal-wrapper">
        <div class="rend-cond__modal-container">
            <div class="rend-cond__modal-container-inner">
                <h1 class="rend-cond-modal__title">Восстановление пароля</h1>
                <h3 class="input-name__title test-lh">Укажите e-mail, который используется для входа на сайт</h3>
                <!-- <h3 class="input-name__title sub-text"> Укажите e-mail, который используется для входа на сайт</h3> -->
                <div class="input__wrapper">
                    <input
                        class='name-profile__input'
                        type="text" autofocus focus:{ outline: none; }
                        style="outline: none;"
                        placeholder='Введите ваш e-mail'
                        required>
                    <img class="accept-input-ico" src="../icons/form--unfilled-ico.svg" alt="">
                </div>
                <div class="dark-modal__btns-container">
                    <div class="agree-btn-wrapper"><span class="agree-btn">Восстановить</span></div>
                    <div class="agree-btn-wrapper"><span class="agree-btn go-back-btn">Назад</span></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
