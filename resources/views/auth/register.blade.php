@extends('layouts.special')

@section('page-title')
    Авторизация
@endsection

@section('content')
    <section class="center-container">
        <div class="register-wrapper">
            <form action="" method="POST" class="form__register">
                <p class='form-register__title'> Регистрация </p>
                <div class="register__soc-btns-container--under375"> <!-- Чтобы в активность привести одну из кнопок удали класс btn--inactive с нее -->
                    <span class="every-reg-soc-btn__style s-r-b__vk--under375"></span>
                    <span class="every-reg-soc-btn__style s-r-b__gmail--under375"></span>
                    <span class="every-reg-soc-btn__style s-r-b__facebook--under375"></span>
                    <span class="every-reg-soc-btn__style s-r-b__gmail2--under375"></span>
                </div>
                <p class='form-register__descr description'> Введите логин (почта)</p>
                <input
                    type="text"
                    class="register__input-login"
                    placeholder="Введите логин"
                    id="reg__login"
                    required
                >
                <p class='form-register__descr description'> Введите пароль</p>
                <input
                    class="register__input-pass"
                    type="password"
                    autocomplete="new-password"
                    placeholder="Введите пароль"
                    id="reg__password"
                    required
                >
                <p class='form-register__descr description'> Повторите пароль </p>
                <input
                    class="register__input-pass-accept"
                    type="password"
                    autocomplete="new-password"
                    placeholder="Повторите пароль"
                    id="reg__password"
                    required
                >
                <p class='form-register__descr description descrp-regquestion'> Есть аккаунт?
                    <a class="register__auth-link" href="/login"> Войти </a>
                </p>
                <a href='#'><input type="button" class="btn register-btn" value="Зарегистрироваться"></a>
                <p class='form-register__descr description descr-fastreg'> Быстрая регистрация </p>
            </form>
            <div class="register__social-btn">
                <a class='register__social-btn-bg-circle social-btn__vk' href='#'><img src='../icons/reg_page_vkicon.svg' alt='icon'></a>
                <a class='register__social-btn-bg-circle social-btn__gmail-first' href='#'><img src='../icons/reg_page_gmailicon.svg' alt='icon'></a>
                <a class='register__social-btn-bg-circle social-btn__facebook' href='#'></a>
                <a class='register__social-btn-bg-circle social-btn__gmail-second' href='#'><img src='../icons/reg_page_gmailicon2.svg' alt='icon'></a>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        $.post(
            "http://78.24.223.31:8080/api/user/",
            {},
            function (data) {
                console.log(data);
            }
        );
    </script>
@endsection
