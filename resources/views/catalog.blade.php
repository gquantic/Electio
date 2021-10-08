@extends('layouts.main_wrapper')

@section('page-title')
    Каталог
@endsection

@section('main-content')
    <section class="catalog-items-display" id="app-catalog">
        <h1 class="all-pg__title">Каталог <span><img class="search-filter__ico" src="../icons/filter-open-ico.svg" alt=""></span></h1>
        <div class="catalog-and-filters__container">
            <div class="search-container">
                <div class="search-filters-wrapper">
                    <a class="search-filter-title">Фильтры</a>
                    <img class="search-filter__ico" src="../icons/filter-open-ico.svg" alt="">
{{--                    <a href="cat-add-filt.html"><img class="cat-plus-ico" src="../icons/cat-plus-ico.svg" alt=""></a> --}}
                    <!--АДМИНСКАЯ КНОПКА-->

                    @if (isset($category))
                       <div style="display: flex;align-items: center;">
                           <a style="font-size: 15px;">{{ $category }}</a>
                           <a href="/">
                               <img src="../icons/photo-modal-close-icon.svg" alt="" style="width: calc(30vw / 1920 * 100);height: calc(30vw / 1920 * 100);">
                           </a>
                       </div>
                    @endif
                </div>
                <div class="prod-serch__wrapper">
                    <input type="text" class="serch-prod__input" placeholder="Введите название товара..."
                           id="search-chat">
                    <a href='#'><button class="search-prod__btn"> Найти </button></a>
                </div>
            </div>
            <div class="all-filters__wrapper">
                <div class="first-stage__filter-box">
                    <p class="title__first-stage-fb" id="condition" value="0">Одежда</p>
                    <ul class="second-stage__filters-box">
                        <li class="second-st-fb__lnik"><a href="/catalog/Топы и майки">Топы и майки</a></li>
                    </ul>
                </div>
                <div class="first-stage__filter-box">
                    <p class="title__first-stage-fb tabs-menu__link" id="condition" value="5">Спец.одежда и костюмы</p>
                    <ul class="second-stage__filters-box mail-filter__wrapper disabled">
                        <li class="second-st-fb__lnik"><a href="/catalog/Военная форма">Военная форма</a></li>
                        <li class="second-st-fb__lnik"><a href="/catalog/Экипировка медицинских работников">Экипировка медицинских работников</a></li>
                        <li class="second-st-fb__lnik"><a href="/catalog/Полиция и Росгвардия">Полиция и Росгвардия</a></li>
                        <li class="second-st-fb__lnik"><a href="/catalog/Форма пожарного">Форма пожарного</a></li>
                        <li class="second-st-fb__lnik"><a href="/catalog/Сценические костюмы">Сценические костюмы</a></li>
                    </ul>
                </div>
            </div>
            <div class="catalog-items__wrapper">
                <div class="catalog-wrapper__item" onclick="itemShowInfo(12);">
                    <div class="ready-made-container__item"><img class='cat-card__img-bg'
                                                                 src="../img/catalog-card-img.png" width="100%" alt="">
                        <input type="text" id="id" value="2222">
                        <div class="ready-made-item__text-block">
                            <p class="ready-mate-text-block__title">Вечернее платье Роза</p>
                            <p class="ready-mate-text-block__descr crowded-ellipsis--modify">Описание товара максимум в
                                две строки с продолжением...</p>
                            <div class="item__drop-cost"><a>2400₽ /сут</a><img src="../icons/drop-eye-icon.svg" alt="" class="item__drop-eye"></div>
                        </div><img src="../icons/add-favorites-icon.svg" alt="" class="add-favorites-icon"
                                   id="favoritesico">
                        <div class="fav-heart-choose"><img class="change-on-choose-heart" src="../icons/lighting-heart-unchoose.svg" alt=""></div>
                    </div>
                </div>
            </div>

            <!-- PAGINATION -->
            <div class="navigation-pages__block">
                <div id="table">
                    <ul id="pagination"></ul>
                </div>
            </div>
        </div>
    </section>
    <form class="page__modal-filters">
        <div class="win-prod__bg-container">
            <div class="modal-win__product-wrapper">
                <div class="product-name-block-and-fav-btn">
                    <img src="../icons/big-heart-prod-mini-card-under1000.svg" alt="" class="big-heart-under1000-fav-ico">
                    <span class="prod-name-place">Платье Роза</span>
                </div>
                <img src="../icons/del-img-ico.svg" class="close-ico-under1000-modal-cart" alt="">
                <div class="card-prod__zoom-inner">
                    <div class="test1">
                        <div class="heart-click"></div>
                        <img class="prod-favour-ico prod-cart-heart" id='favourIcoClick' src="../icons/prod-favour-ico.svg" alt="">
                    </div>
                    <div class="for-btns__container">
                        <div class="photo-prod--slick-slide-container">
                            <img src="../img/modal-cat-prod-inner-photo.png" alt="" class="card-prod-photo--slick">
                            <img src="../img/modal-cat-prod-inner-photo.png" alt="" class="card-prod-photo--slick">
                            <img src="../img/modal-cat-prod-inner-photo.png" alt="" class="card-prod-photo--slick">
                        </div>
                    </div>
                    <div class="zoom-prod__text-wrapper">
                        <div class="title-block-with-star">
                            <h1 class="zoom-prod__title"><a href="product-page.html" class="">Платье Роза</a></h1>
                            <div class="rate-star Stars" style="--rating: 69.5;" aria-label="Rating of this product is % out of 100"></div>
                        </div>
                        <div class="spec-info__wrapper">
                            <div class="sp-info_col spec-info__ft-col">
                                <p class="spec-info__par">Материал<span class="spec-info__link">Металл, Стекло</span></p>
                                <p class="spec-info__par">Цвет<span class="spec-info__link">Черный</span></p>
                                <p class="spec-info__par">Узор<span class="spec-info__link">Клетка</span></p>
                                <p class="spec-info__par">Размер<span class="spec-info__link">XXL</span></p>
                                <p class="spec-info__par">Детали<span class="spec-info__link">Шипы</span></p>
                                <p class="spec-info__par">Длина<span class="spec-info__link">192 см</span></p>
                                <p class="spec-info__par">Детали<span class="spec-info__link">Шипы</span></p>
                            </div>
                            <div class="sp-info_col spec-info__sc-col">
                                <p class="spec-info__par">Материал<span class="spec-info__link">Металл, Стекло</span></p>
                                <p class="spec-info__par">Цвет<span class="spec-info__link">Черный</span></p>
                                <p class="spec-info__par">Узор<span class="spec-info__link">Клетка</span></p>
                                <p class="spec-info__par">Размер<span class="spec-info__link">XXL</span></p>
                                <p class="spec-info__par">Детали<span class="spec-info__link">Шипы</span></p>
                                <p class="spec-info__par">Длина<span class="spec-info__link">192 см</span></p>
                                <p class="spec-info__par">Детали<span class="spec-info__link">Шипы</span></p>
                            </div>
                        </div>
                        <div class="arend-cost__info-wrapper">
                            <p class="arend-cost__text">Аренда на 3 суток - 8 000 ₽</p>
                            <p class="arend-cost__text">Аренда на 7 суток - 18 000 ₽</p>
                            <p class="arend-cost__main-text">2400 ₽ / сут</p>
                        </div>
                        <div class="system-notice__card-btns">
                            <a href='#'><div class="system-card__first-btn">В корзину</div></a>
                            <a href='#'><div class="system-card__second-btn">Забронировать</div></a>
                        </div>
                    </div>
                </div>
                <img class="modal__close-ico" src="../icons/photo-modal-close-icon.svg" alt="">
            </div>
        </div>
        <div class="close-area"></div>
        <div class="filters-modal-window__container">
            <div class="main-filter" id="ft-filter">
                <div class="filter-wrapper__header">
                    <img class='close-ico' src="../icons/close-ico.svg" alt="">
                    <h3 class="filter-wrapper__title">Фильтры и сортировка</h3>
                </div>
                <div class="filter-wrapper__center-block">
                    <ul class="sort-name__list">
                        <li class="sort-name-list__link sort-window__link sort__category" value="0">Сортировать</li>
                        <li class="sort-name-list__link price-window__link sort__category" value="1">Цена</li>
                        <li class="sort-name-list__link color-window__link sort__category" value="2">Цвет</li>
                        <!--<li class="sort-name-list__link zalog sort__category" value="3">Залог</li>-->
                        <div class="in-filter-line-decor-center">
                            <div class="line-decor"></div>
                        </div>
                        <li class="sort-name-list__link size-window__link sort__category" value="3">Размер</li>
                        <li class="sort-name-list__link sort__category" value="4">Детали</li>
                        <li class="sort-name-list__link pattern-window__link sort__category" value="5">Узор</li>
                        <li class="sort-name-list__link material-window__link sort__category" value="6">Материалы</li>
                        <li class="sort-name-list__link material-window__link sort__category" value="7">Для кого</li>
                    </ul>
                </div>
                <div class="info-count__container">
                    <p><a class="found-info" href="">Найдено 436 товаров</a></p>
                </div>
                <div class="filter-wrapper__btns-container">
                    <input type="submit" class="btns-container__first-btn" value="Очистить фильтры"></input>
                    <input type="submit" class="btns-container__second-btn" value="Применить"></input>
                </div>
            </div>
            <div class="container__filter-wrapper disabled" id="sc-filter">
                <div class="filter-wrapper__header">
                    <img class='close-ico' src="../icons/close-ico.svg" alt="">
                    <img id='1' class='back-arrow-ico' src="../icons/back-arrow-ico.svg" alt="">
                    <h3 class="filter-wrapper__title">Сортировка</h3>
                </div>
                <div class="filter-wrapper__center-block">
                    <label class='radio__wrapper sort-name__list'>
                        <p class="title-radio sort-name-list__link">По популярности</p>
                        <input name='rb-sort' type="radio" class="radio-btn" id=''>
                        <span class="radio-style"></span>
                    </label>
                    <label class='radio__wrapper sort-name__list'>
                        <p class="title-radio sort-name-list__link last">По новизне</p>
                        <input name='rb-sort' type="radio" class="radio-btn" id=''>
                        <span class="radio-style"></span>
                    </label>
                </div>
                <div class="info-count__container">
                    <p><a class="found-info" href="">Найдено 436 товаров</a></p>
                </div>
                <div class="filter-wrapper__btns-container">
                    <input type="submit" class="btns-container__first-btn" value="Очистить фильтры"></input>
                    <input type="submit" class="btns-container__second-btn" value="Применить"></input>
                </div>
            </div>
            <div class="container__filter-wrapper disabled" id="eight-filter">
                <div class="filter-wrapper__header">
                    <img class='close-ico' src="../icons/close-ico.svg" alt="">
                    <img id="2" class='back-arrow-ico' src="../icons/back-arrow-ico.svg" alt="">
                    <h3 class="filter-wrapper__title">Цена</h3>
                </div>
                <div class="filter-wrapper__center-block range-block">
                    <div class="polzunok-container-5">
                        <div class="range-inputs-block">
                            <input type="text" class="polzunok-input-5-left">
                            <input type="text" class="polzunok-input-5-right"></div>
                        <div class="polzunok-5">
                        </div>
                    </div>
                </div>
                <div class="info-count__container">
                    <p><a class="found-info" href="">Найдено 436 товаров</a></p>
                </div>
                <div class="filter-wrapper__btns-container">
                    <input type="submit" class="btns-container__first-btn" value="Очистить фильтры"></input>
                    <input type="submit" class="btns-container__second-btn" value="Применить"></input>
                </div>
            </div>
            <div class="container__filter-wrapper disabled" id="five-filter">
                <div class="filter-wrapper__header">
                    <img class='close-ico' src="../icons/close-ico.svg" alt="">
                    <img id="3" class='back-arrow-ico' src="../icons/back-arrow-ico.svg" alt="">
                    <h3 class="filter-wrapper__title">Цвет</h3>
                </div>
                <div class="filter-wrapper__center-block">
                    <!-- УСТАНОВИТЬ ID LABEL'АМ -->
                    <div action="" class="filter-wrapper__size-form">
                        <label class='checkbox__wrapper sort-name__list'>
                            <p class="title-checkbox sort-name-list__link word-of-size color-click-ico" value=""
                               id='first-child'>Красный</p>
                            <p class="title-checkbox sort-name-list__link" value="">16</p>
                            <input name='' type="checkbox" class="check-color">
                            <span class="color-check-style"></span>
                        </label>
                        <label class='checkbox__wrapper sort-name__list'>
                            <p class="title-checkbox sort-name-list__link word-of-size color-click-ico" value=""
                               id='second-child'>Синий</p>
                            <p class="title-checkbox sort-name-list__link" value="">8</p>
                            <input name='' type="checkbox" class="check-color">
                            <span class="color-check-style"></span>
                        </label>
                        <label class='checkbox__wrapper sort-name__list'>
                            <p class="title-checkbox sort-name-list__link word-of-size color-click-ico" value=""
                               id='third-child'>Голубой</p>
                            <p class="title-checkbox sort-name-list__link" value="">1</p>
                            <input name='' type="checkbox" class="check-color">
                            <span class="color-check-style"></span>
                        </label>
                        <label class='checkbox__wrapper sort-name__list'>
                            <p class="title-checkbox sort-name-list__link word-of-size color-click-ico" value=""
                               id='fourth-child'>Зеленый</p>
                            <p class="title-checkbox sort-name-list__link" value="">133</p>
                            <input name='' type="checkbox" class="check-color">
                            <span class="color-check-style"></span>
                        </label>
                        <label class='checkbox__wrapper sort-name__list'>
                            <p class="title-checkbox sort-name-list__link word-of-size color-click-ico" value=""
                               id='fifth-child'>Желтый</p>
                            <p class="title-checkbox sort-name-list__link" value="">423</p>
                            <input name='' type="checkbox" class="check-color">
                            <span class="color-check-style"></span>
                        </label>
                        <label class='checkbox__wrapper sort-name__list'>
                            <p class="title-checkbox sort-name-list__link word-of-size color-click-ico" value=""
                               id='sixth-child'>Черный</p>
                            <p class="title-checkbox sort-name-list__link last" value="">190</p>
                            <input name='' type="checkbox" class="check-color">
                            <span class="color-check-style"></span>
                        </label>
                    </div>
                </div>
                <div class="info-count__container">
                    <p><a class="found-info" href="">Найдено 436 товаров</a></p>
                </div>
                <div class="filter-wrapper__btns-container">
                    <input type="submit" class="btns-container__first-btn" value="Очистить фильтры"></input>
                    <input type="submit" class="btns-container__second-btn" value="Применить"></input>
                </div>
            </div>
            <!--<div class="container__filter-wrapper disabled" id="sc-filter">
                <div class="filter-wrapper__header">
                    <img class='close-ico' src="../icons/close-ico.svg" alt="">
                    <img id="4" class='back-arrow-ico' src="../icons/back-arrow-ico.svg" alt="">
                    <h3 class="filter-wrapper__title">Залог</h3>
                </div>
                <div class="filter-wrapper__center-block">
                    <label class='radio__wrapper sort-name__list'>
                        <p class="title-radio sort-name-list__link">По популярности</p>
                        <input name='rb-sort' type="radio" class="radio-btn" id=''>
                        <span class="radio-style"></span>
                    </label>
                    <label class='radio__wrapper sort-name__list'>
                        <p class="title-radio sort-name-list__link last">По новизне</p>
                        <input name='rb-sort' type="radio" class="radio-btn" id=''>
                        <span class="radio-style"></span>
                    </label>
                </div>
                <div class="info-count__container">
                    <p><a class="found-info" href="">Найдено 436 товаров</a></p>
                </div>
                <div class="filter-wrapper__btns-container">
                    <input type="submit" class="btns-container__first-btn" value="Очистить фильтры"></input>
                    <input type="submit" class="btns-container__second-btn" value="Применить"></input>
                </div>
            </div>-->
            <div class="container__filter-wrapper disabled" id="four-filter">
                <div class="filter-wrapper__header">
                    <img class='close-ico' src="../icons/close-ico.svg" alt="">
                    <img id="4" class='back-arrow-ico' src="../icons/back-arrow-ico.svg" alt="">
                    <h3 class="filter-wrapper__title">Размер</h3>
                </div>
                <div class="filter-wrapper__center-block">
                    <!-- УСТАНОВИТЬ ID LABEL'АМ -->
                    <div action="" class="filter-wrapper__size-form">
                        <!-- <label class='checkbox__wrapper sort-name__list'>
                            <p class="title-checkbox sort-name-list__link word-of-size" value="">XXS</p>
                            <p class="title-checkbox sort-name-list__link" value="">16</p>
                            <input name='' type="checkbox" class="check-company" id=''>
                            <span class="check-style"></span>
                        </label> -->
                        <label class='checkbox__wrapper sort-name__list'>
                            <p class="title-checkbox sort-name-list__link word-of-size" value="">40RUS = 32/34EUR (XS)</p>
                            <p class="title-checkbox sort-name-list__link" value="">8</p>
                            <input name='' type="checkbox" class="check-company" id=''>
                            <span class="check-style"></span>
                        </label>
                        <label class='checkbox__wrapper sort-name__list'>
                            <p class="title-checkbox sort-name-list__link word-of-size" value="">42RUS = 36/38EUR (S)</p>
                            <p class="title-checkbox sort-name-list__link" value="">1</p>
                            <input name='' type="checkbox" class="check-company" id=''>
                            <span class="check-style"></span>
                        </label>
                        <label class='checkbox__wrapper sort-name__list'>
                            <p class="title-checkbox sort-name-list__link word-of-size" value="">44/46RUS = 40-42EUR (M)</p>
                            <p class="title-checkbox sort-name-list__link" value="">133</p>
                            <input name='' type="checkbox" class="check-company" id=''>
                            <span class="check-style"></span>
                        </label>
                        <label class='checkbox__wrapper sort-name__list'>
                            <p class="title-checkbox sort-name-list__link word-of-size" value="">48/50RUS = 44/46EUR (L)</p>
                            <p class="title-checkbox sort-name-list__link" value="">423</p>
                            <input name='' type="checkbox" class="check-company" id=''>
                            <span class="check-style"></span>
                        </label>
                        <label class='checkbox__wrapper sort-name__list'>
                            <p class="title-checkbox sort-name-list__link word-of-size" value="">52RUS = 48EUR (XL)</p>
                            <p class="title-checkbox sort-name-list__link" value="">190</p>
                            <input name='' type="checkbox" class="check-company" id=''>
                            <span class="check-style"></span>
                        </label>
                        <label class='checkbox__wrapper sort-name__list'>
                            <p class="title-checkbox sort-name-list__link word-of-size" value="">54RUS = 50 EUR (XXL)</p>
                            <p class="title-checkbox sort-name-list__link" value="">16</p>
                            <input name='' type="checkbox" class="check-company" id=''>
                            <span class="check-style"></span>
                        </label>
                        <label class='checkbox__wrapper sort-name__list'>
                            <p class="title-checkbox sort-name-list__link word-of-size" value="">56RUS = 52EUR (3XL)</p>
                            <p class="title-checkbox sort-name-list__link" value="">16</p>
                            <input name='' type="checkbox" class="check-company" id=''>
                            <span class="check-style"></span>
                        </label>
                        <label class='checkbox__wrapper sort-name__list'>
                            <p class="title-checkbox sort-name-list__link word-of-size" value="">BIG SIZE</p>
                            <p class="title-checkbox sort-name-list__link last" value="">16</p>
                            <input name='' type="checkbox" class="check-company" id=''>
                            <span class="check-style"></span>
                        </label>
                    </div>
                </div>
                <div class="info-count__container">
                    <p><a class="found-info" href="">Найдено 436 товаров</a></p>
                </div>
                <div class="filter-wrapper__btns-container">
                    <input type="submit" class="btns-container__first-btn" value="Очистить фильтры"></input>
                    <input type="submit" class="btns-container__second-btn" value="Применить"></input>
                </div>
            </div>
            <div class="container__filter-wrapper disabled" id="th-filter">
                <div class="filter-wrapper__header">
                    <img class='close-ico' src="../icons/close-ico.svg" alt="">
                    <img id="5" class='back-arrow-ico' src="../icons/back-arrow-ico.svg" alt="">
                    <h3 class="filter-wrapper__title">Детали</h3>
                </div>
                <div class="filter-wrapper__center-block">
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Бант</p>
                        <p class="title-checkbox sort-name-list__link" value="">16</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Перья</p>
                        <p class="title-checkbox sort-name-list__link" value="">16</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Шипы</p>
                        <p class="title-checkbox sort-name-list__link" value="">16</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Клепки</p>
                        <p class="title-checkbox sort-name-list__link" value="">16</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Другое</p>
                        <p class="title-checkbox sort-name-list__link last" value="">16</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                </div>
                <div class="info-count__container">
                    <p><a class="found-info" href="">Найдено 436 товаров</a></p>
                </div>
                <div class="filter-wrapper__btns-container">
                    <input type="submit" class="btns-container__first-btn" value="Очистить фильтры"></input>
                    <input type="submit" class="btns-container__second-btn" value="Применить"></input>
                </div>
            </div>
        </div>
        <div class="container__filter-wrapper disabled" id="sixth-filter">
            <div class="filter-wrapper__header">
                <img class='close-ico' src="../icons/close-ico.svg" alt="">
                <img id="6" class='back-arrow-ico' src="../icons/back-arrow-ico.svg" alt="">
                <h3 class="filter-wrapper__title">Узор</h3>
            </div>
            <div class="filter-wrapper__center-block">
                <!-- УСТАНОВИТЬ ID LABEL'АМ -->
                <div action="" class="filter-wrapper__size-form">
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Клетка</p>
                        <p class="title-checkbox sort-name-list__link" value="">16</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Полоска</p>
                        <p class="title-checkbox sort-name-list__link" value="">8</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Ромб</p>
                        <p class="title-checkbox sort-name-list__link" value="">1</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Цветочный</p>
                        <p class="title-checkbox sort-name-list__link" value="">133</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Под кожу</p>
                        <p class="title-checkbox sort-name-list__link" value="">423</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Горошек</p>
                        <p class="title-checkbox sort-name-list__link last" value="">16</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                </div>
            </div>
            <div class="info-count__container">
                <p><a class="found-info" href="">Найдено 436 товаров</a></p>
            </div>
            <div class="filter-wrapper__btns-container">
                <input type="submit" class="btns-container__first-btn" value="Очистить фильтры"></input>
                <input type="submit" class="btns-container__second-btn" value="Применить"></input>
            </div>
        </div>
        <div class="container__filter-wrapper disabled" id="seventh-filter">
            <div class="filter-wrapper__header">
                <img class='close-ico' src="../icons/close-ico.svg" alt="">
                <img id="7" class='back-arrow-ico' src="../icons/back-arrow-ico.svg" alt="">
                <h3 class="filter-wrapper__title">Материал</h3>
            </div>
            <div class="filter-wrapper__center-block">
                <!-- УСТАНОВИТЬ ID LABEL'АМ -->
                <div action="" class="filter-wrapper__size-form">
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Хлопковая ткань</p>
                        <p class="title-checkbox sort-name-list__link" value="">16</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Синтетическая ткань</p>
                        <p class="title-checkbox sort-name-list__link" value="">8</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Льняная ткань</p>
                        <p class="title-checkbox sort-name-list__link" value="">1</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Шерстяная ткань</p>
                        <p class="title-checkbox sort-name-list__link" value="">133</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Шелковая ткань</p>
                        <p class="title-checkbox sort-name-list__link" value="">423</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Полиэстер ткань</p>
                        <p class="title-checkbox sort-name-list__link" value="">423</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Трикотажная ткань</p>
                        <p class="title-checkbox sort-name-list__link" value="">423</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Эластан</p>
                        <p class="title-checkbox sort-name-list__link" value="">423</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Другое</p>
                        <p class="title-checkbox sort-name-list__link last" value="">16</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                </div>
            </div>
            <div class="info-count__container">
                <p><a class="found-info" href="">Найдено 436 товаров</a></p>
            </div>
            <div class="filter-wrapper__btns-container">
                <input type="submit" class="btns-container__first-btn" value="Очистить фильтры"></input>
                <input type="submit" class="btns-container__second-btn" value="Применить"></input>
            </div>
        </div>
        <div class="container__filter-wrapper disabled" id="seventh-filter">
            <div class="filter-wrapper__header">
                <img class='close-ico' src="../icons/close-ico.svg" alt="">
                <img id="8" class='back-arrow-ico' src="../icons/back-arrow-ico.svg" alt="">
                <h3 class="filter-wrapper__title">Для кого</h3>
            </div>
            <div class="filter-wrapper__center-block">
                <!-- УСТАНОВИТЬ ID LABEL'АМ -->
                <div action="" class="filter-wrapper__size-form">
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Мужской</p>
                        <p class="title-checkbox sort-name-list__link" value="">16</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Женский</p>
                        <p class="title-checkbox sort-name-list__link" value="">8</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Детский</p>
                        <p class="title-checkbox sort-name-list__link" value="">1</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Унисекс</p>
                        <p class="title-checkbox sort-name-list__link" value="">133</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                    <label class='checkbox__wrapper sort-name__list'>
                        <p class="title-checkbox sort-name-list__link word-of-size" value="">Другое</p>
                        <p class="title-checkbox sort-name-list__link last" value="">423</p>
                        <input name='' type="checkbox" class="check-company" id=''>
                        <span class="check-style"></span>
                    </label>
                </div>
            </div>
            <div class="info-count__container">
                <p><a class="found-info" href="">Найдено 436 товаров</a></p>
            </div>
            <div class="filter-wrapper__btns-container">
                <input type="submit" class="btns-container__first-btn" value="Очистить фильтры"></input>
                <input type="submit" class="btns-container__second-btn" value="Применить"></input>
            </div>
        </div>
    </form>

    <script>
        function itemShowInfo(id) {
            console.log(id);

            $('.page__modal-filters').addClass('visible');
            $('.win-prod__bg-container').addClass('visible');
            $('.page__modal-filters').addClass('modify--blur');
            $('.main-filter').addClass('disabled');
            $('.win-prod__bg-container').fadeIn();
            $('.page__modal-filters').fadeIn();

            // Устанавливаем данные из API
            console.log("I will send request");
            // $.get(
            //     "/goods/" + id,
            //     {},
            //     function (data) {
            //         data = JSON.parse(data);
            //         console.log(data);
            //     },
            //     "json"
            // );
            $.ajax({
                type: 'GET',
                url: "/goods/" + id,
                data: '',
                success: function(data) {
                    var insertedData = [];
                    let meetup = JSON.parse(data, function(key, value) {
                        insertedData.push(key, value);
                    });
                    console.log('data: ' + data);
                },
                contentType: "application/json",
                dataType: 'json'
            });
        }
    </script>
@endsection
