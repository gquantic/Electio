<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title')</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;500;700;800;900&family=PT+Serif:wght@400;700&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <link href="/css/libs/slick.css" rel = "stylesheet">
    <link href="/css/range-picker.min.css" rel = "stylesheet" type = "text/css">
    <link href="/css/libs/normalize.css" rel="stylesheet" type="text/css">
    <link href="/css/catalog.min.css" rel="stylesheet" type="text/css">
    <link href="/css/wide-head-and-foot-style.min.css" rel="stylesheet" type="text/css">
    <link href="/css/photo-minicard-style.min.css" rel="stylesheet" type="text/css">
    <link href="/css/radio-check-styles.min.css" rel="stylesheet" type="text/css">

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>

    <!-- VUE JS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>
<body>
<header>
    <div class="header header-width-nav"> <!-- ЧТОБЫ ВКЛЮЧИЛАСЬ ШАПКА НЕАВТОРИЗОВАННОГО ПОЛЬЗОВАТЕЛЯ ДОБАВИТЬ КЛАСС header-unlogin -->
        <div class="header__logo">
            <a class="logo__link" href="/"><img src="../icons/header__logo--light.svg" alt="logo"></a>
        </div>
        <div class="header__position-user">
            <div class="header__city-block-trig-link">
                <p class="trigger-city">Санкт-Петербург</p>
            </div>
            <div class="header__city-block-trig-list">
                <div class="city-list__container">
                    <div class="city-list__container-inner">
                        <div class="city-list__wrapper">
                            <p class="city-of-list">Санкт-Петербург</p>
                            <p class="city-of-list">Казань</p>
                            <p class="city-of-list">Краснодар</p>
                            <p class="city-of-list">Мурманск</p>
                            <p class="city-of-list">Владивосток</p>
                            <p class="city-of-list">Сочи</p>
                            <p class="city-of-list">Самара</p>
                            <p class="city-of-list">Омск</p>
                            <p class="city-of-list">Новосибирск</p>
                            <p class="city-of-list">Челябинск</p>
                            <p class="city-of-list">Рязань</p>
                            <p class="city-of-list">Смоленск</p>
                            <p class="city-of-list">Тула</p>
                            <p class="city-of-list">Ярославль</p>
                            <p class="city-of-list">Воронеж</p>
                            <p class="city-of-list">Саратов</p>
                            <p class="city-of-list">Архангельск</p>
                            <p class="city-of-list">Калининград</p>
                            <p class="city-of-list">Чебоксары</p>
                            <p class="city-of-list">Уфа</p>
                            <p class="city-of-list">Чебаркуль</p>
                            <p class="city-of-list">Екатеринбург</p>
                            <p class="city-of-list">Пенза</p>
                        </div>
                        <div class="decor-op-block op-block-top"></div>
                        <div class="decor-op-block op-block-down"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav__container">
            <nav class="menu">
                <ul class="wrapper__link">
                    <li>
                        <a href="catalog.html" class="header-menu__link menu__link-catalog">Каталог
                            <div class="hover-cat-menu__container">
                                <div class="hover-cat-menu__container-inner">
                                    <div class="hover-cat-menu__grid-cont">
                                        <div class="hover-cat-menu__grid-col hover-cat-menu__grid-ft-col">
                                            <div class="prod-categ-wrapper">
                                                <p class="product-categ-title">Одежда</p>
                                                <ul class="prod-categ-links-cont">
                                                    <li class="prod-categ-link">Верхняя одежда</li>
                                                    <li class="prod-categ-link">Блузы, рубашки и водолазки</li>
                                                    <li class="prod-categ-link">Боди, Купальники и пляжная одежда</li>
                                                    <li class="prod-categ-link">Джемперы, вязанные вещи и кардиган</li>
                                                    <li class="prod-categ-link">Джинсы и Брюки</li>
                                                    <li class="prod-categ-link">Домашняя одежда</li>
                                                    <li class="prod-categ-link">Комбинезоны, Пиджаки и костюмы</li>
                                                    <li class="prod-categ-link">Платья и сарафаны</li>
                                                    <li class="prod-categ-link">Спорт, Футболки и поло</li>
                                                    <li class="prod-categ-link">Толстовки/свитноты, Топы и майки</li>
                                                    <li class="prod-categ-link">Шорты и Юбки</li>
                                                </ul>
                                            </div>
                                            <div class="prod-categ-wrapper">
                                                <p class="product-categ-title">Реквизиты</p>
                                                <ul class="prod-categ-links-cont">
                                                    <li class="prod-categ-link">Реквизиты</li>
                                                    <li class="prod-categ-link">Оружие</li>
                                                    <li class="prod-categ-link">Машины</li>
                                                    <li class="prod-categ-link">Прочее</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hover-cat-menu__grid-col hover-cat-menu__grid-sc-col">
                                            <div class="prod-categ-wrapper">
                                                <p class="product-categ-title">Аксессуары</p>
                                                <ul class="prod-categ-links-cont">
                                                    <li class="prod-categ-link">Аксессуары для волос, парики</li>
                                                    <li class="prod-categ-link">Головные уборы</li>
                                                    <li class="prod-categ-link">Зонты</li>
                                                    <li class="prod-categ-link">Косметические наборы</li>
                                                    <li class="prod-categ-link">Очки</li>
                                                    <li class="prod-categ-link">Перчатки и вырежки</li>
                                                    <li class="prod-categ-link">Платки, шарфы, Ремни и Пояса</li>
                                                    <li class="prod-categ-link">Ремни и пояса</li>
                                                    <li class="prod-categ-link">Рюкзаки, Сумки и Чемоданы</li>
                                                    <li class="prod-categ-link">Украшения и Часы</li>
                                                </ul>
                                            </div>
                                            <div class="prod-categ-wrapper">
                                                <p class="product-categ-title">Атрибутика образа</p>
                                                <ul class="prod-categ-links-cont">
                                                    <li class="prod-categ-link">Значки и жетоны</li>
                                                    <li class="prod-categ-link">Нашивки</li>
                                                    <li class="prod-categ-link">Маски</li>
                                                    <li class="prod-categ-link">Крылья</li>
                                                    <li class="prod-categ-link">Прочее</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hover-cat-menu__grid-col hover-cat-menu__grid-th-col">
                                            <div class="prod-categ-wrapper">
                                                <p class="product-categ-title">Обувь</p>
                                                <ul class="prod-categ-links-cont">
                                                    <li class="prod-categ-link">Боссоножки, Сандали и Эспадрильи</li>
                                                    <li class="prod-categ-link">Ботильоны</li>
                                                    <li class="prod-categ-link">Ботинки, Сапоги и Резиновая обувь</li>
                                                    <li class="prod-categ-link">Вечерняя обувь</li>
                                                    <li class="prod-categ-link">Домашняя обувь</li>
                                                    <li class="prod-categ-link">Казаки и мюли</li>
                                                    <li class="prod-categ-link">Кроссовки/кеды, Мокасины и топсайдер</li>
                                                    <li class="prod-categ-link">Туфли</li>
                                                </ul>
                                            </div>
                                            <div class="prod-categ-wrapper">
                                                <p class="product-categ-title">Спец. одежда и костюмы</p>
                                                <ul class="prod-categ-links-cont">
                                                    <li class="prod-categ-link">Военная форма</li>
                                                    <li class="prod-categ-link">Экипировка медицинских работников</li>
                                                    <li class="prod-categ-link">Полиция и Росгвардия</li>
                                                    <li class="prod-categ-link">Форма пожарного</li>
                                                    <li class="prod-categ-link">Сценические костюмы</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li><a href="about-electio.html" class="header-menu__link about-service-btn">О сервисе</a></li>
                    <li class="hid-for-unlogin-header"><a href="#" class="header-menu__link">Мои объявления</a></li>
                    <li class="hid-for-unlogin-header"><a href="lk.html" class="header-menu__link menu__link-pc">Личный кабинет</a></li>
                    <li class="unlog-header-btn"><a href="reg-form.html" class="header-menu__link hidden-btn registration-btn">Регистрация</a></li>
                    <li class="unlog-header-btn"><a href="auth-form.html" class="header-menu__link hidden-btn authtariz-btn">Войти</a></li>
                </ul>
            </nav>
            <div class="header-btn__sh-ch">
                <a class="header__link-shop" href="#">
                    <p class="sum-circle shop-icon__sum-circle">2</p>
                </a>
                <a class="header__link-chat" href="#">
                    <p class="sum-circle chat-icon__sum-circle">3</p>
                </a>
            </div>
            <div class="header-serch__input-block">
                <input class='header-ser__input' type="text" focus:{ outline: none; } placeholder='Поиск'>
                <img src="../icons/search-head-input-ico.svg" alt="" class="search-header-input-ico">
                <img src="../icons/light-explore-ico-under375.svg" alt="" class="search-header-input-ico light-under375">
            </div>
            <div class="burger-block">
                <span class="burger-link"></span>
                <span class="burger-link"></span>
                <span class="burger-link"></span>
            </div>
        </div>
    </div>
</header>
<section class="burger-drop-menu__container">
    <div class="burger-drop-menu__container-inner">
        <div class="burger-dr-m__wrapper">
            <div class="block-logo-city__under375">
                <img src="../icons/dark-logo-dm-375.svg" alt="" class="logo-ico__under375">
            </div>
            <div class="photo-ico-plus-name-block">
                <div class="burger-photo-place">
                    <a href="lk.html"><img class="burger-photo-ico" src="../img/profile-foto.png" alt=""></a>
                </div>
                <div class="burger-name-place-block">
                    <a href="lk.html"><span class="burger-name-text">Никки Розенфельд</span></a>
                </div>
            </div>
            <ul class="navigation-menu-wrapper">
                <li class="burger-tab-el"><a href="catalog.html" class="burger-link-el">Каталог</a></li>
                <li class="burger-tab-el"><a href="lk.html" class="burger-link-el">Личный кабинет</a></li>
                <li class="burger-tab-el"><a href="" class="burger-link-el">Мои обращения</a></li>
                <li class="burger-tab-el"><a href="about-electio.html" class="burger-link-el">О сервисе</a></li>
                <li class="burger-tab-el"><a class="burger-link-el choose-cities">Санкт-Петербург</a>
                    <div class="header__city-block-trig-list">
                        <div class="city-list__container">
                            <div class="city-list__container-inner">
                                <div class="city-list__wrapper">
                                    <p class="city-of-list">Санкт-Петербург</p>
                                    <p class="city-of-list">Казань</p>
                                    <p class="city-of-list">Краснодар</p>
                                    <p class="city-of-list">Мурманск</p>
                                    <p class="city-of-list">Владивосток</p>
                                    <p class="city-of-list">Сочи</p>
                                    <p class="city-of-list">Самара</p>
                                    <p class="city-of-list">Омск</p>
                                    <p class="city-of-list">Новосибирск</p>
                                    <p class="city-of-list">Челябинск</p>
                                    <p class="city-of-list">Рязань</p>
                                    <p class="city-of-list">Смоленск</p>
                                    <p class="city-of-list">Тула</p>
                                    <p class="city-of-list">Ярославль</p>
                                    <p class="city-of-list">Воронеж</p>
                                    <p class="city-of-list">Саратов</p>
                                    <p class="city-of-list">Архангельск</p>
                                    <p class="city-of-list">Калининград</p>
                                    <p class="city-of-list">Чебоксары</p>
                                    <p class="city-of-list">Уфа</p>
                                    <p class="city-of-list">Чебаркуль</p>
                                    <p class="city-of-list">Екатеринбург</p>
                                    <p class="city-of-list">Пенза</p>
                                </div>
                                <div class="decor-op-block op-block-top"></div>
                                <div class="decor-op-block op-block-down"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="burger-tab-el burger-exit-link"><a href="" class="burger-link-el">Выход</a></li>
            </ul>
        </div>
    </div>
</section>
<section class="display-under1000-navigation">
    <div class="nav-under1000__container">
        <div class="nav-under1000__container-inner">
            <ul class="nav-under1000__wrapper">
                <li class="nav-under1000__btn-wrapper"><a class="nav-u1000__link">Одежда</a></li>
                <li class="nav-under1000__btn-wrapper"><a class="nav-u1000__link">Обувь</a></li>
                <li class="nav-under1000__btn-wrapper"><a class="nav-u1000__link">Аксессуары</a></li>
                <li class="nav-under1000__btn-wrapper"><a class="nav-u1000__link">Атрибутика образа</a></li>
                <li class="nav-under1000__btn-wrapper"><a class="nav-u1000__link">Реквизиты</a></li>
                <li class="nav-under1000__btn-wrapper"><a class="nav-u1000__link">Спец. одежда и костюмы</a></li>
            </ul>
        </div>
    </div>
</section>
<div class="closer-window-area"></div>

@yield('main-content')

<!-- Footer -->
<footer class="footer aut__footer">
    <div class="container">
        <div class="footer__electio-info">
            <a class="electio-info__link" href=""> Правила пользования сайтом</a>
            <a class="electio-info__link footer-info__doc" href=""> Документация</a>
            <a class="electio-info__link footer-info__faq" href=""> FAQ</a>
            <a class="electio-info__link link-author" href=""> © Electio 2020</a>
        </div>
        <div class="footer__electio-contacts">
            <div class="footer__social-btn-cont">
                <a class="electio-info__link social-btn__circle-pos footer__social-btn__tw" href="#">Чат с администрацией</a>
                <a class="electio-info__link social-btn__circle-pos footer__social-btn__be" href="#"></a>
                <a class="electio-info__link social-btn__circle-pos footer__social-btn__inst" href="#"></a>
            </div>
            <div class="footer__another-cont">
                <a class="electio-info__link" href="#">something@gmail.com</a>
                <a class="electio-info__link" href="#">+8 (812) 123-45-67</a>
                <a class="electio-info__link link-city" href="#">Россия</a>
            </div>
        </div>
    </div>
</footer>
<script src="/js/slick.min.js"></script>
<script src='/js/range-picker.js'></script>
<script src='/js/ui-touch.min.js'></script>
<script type = 'text/javascript' src='/js/jquery.simplePagination.js'></script>
<script type = 'text/javascript' src='/js/libs/scroll-header.js'></script>
<script type = 'text/javascript' src='/js/libs/tab-drop.js'></script>
<script src='/js/libs/catalog-script.js'></script>
</body>
</html>
