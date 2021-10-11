<div class="product-name-block-and-fav-btn">
    <img src="../icons/big-heart-prod-mini-card-under1000.svg" alt="" class="big-heart-under1000-fav-ico">
    <span class="prod-name-place">{{ $good['name'] }}</span>
</div>
<div class="card-prod__zoom-inner">
    <div class="test1">
        <div class="heart-click"></div>
        <img class="prod-favour-ico prod-cart-heart" id="favourIcoClick" src="../icons/prod-favour-ico.svg" alt="">
    </div>
    <div class="for-btns__container">
        <div class="photo-prod--slick-slide-container slick-initialized slick-slider slick-dotted">
            <button type="button" class="slick-btn slick-prev slick-arrow" style=""></button>
            <div class="slick-list draggable">
                <div class="slick-track" style="opacity: 1; width: 1596px; transform: translate3d(-228px, 0px, 0px);">
                    <img src="http://78.24.223.31:8080/{{ $good['mainPhoto'] }}" alt="" class="card-prod-photo--slick slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 228px;" tabindex="-1">
                    <img src="http://78.24.223.31:8080/{{ $good['mainPhoto'] }}" alt="" class="card-prod-photo--slick slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 228px;" tabindex="0" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00">
                    <img src="http://78.24.223.31:8080/{{ $good['mainPhoto'] }}" alt="" class="card-prod-photo--slick slick-slide" data-slick-index="1" aria-hidden="true" style="width: 228px;" tabindex="-1" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01">
                    <img src="http://78.24.223.31:8080/{{ $good['mainPhoto'] }}" alt="" class="card-prod-photo--slick slick-slide" data-slick-index="2" aria-hidden="true" style="width: 228px;" tabindex="-1" role="tabpanel" id="slick-slide02" aria-describedby="slick-slide-control02">
                    <img src="../img/modal-cat-prod-inner-photo.png" alt="" class="card-prod-photo--slick slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" style="width: 228px;" tabindex="-1">
                    <img src="../img/modal-cat-prod-inner-photo.png" alt="" class="card-prod-photo--slick slick-slide slick-cloned" data-slick-index="4" id="" aria-hidden="true" style="width: 228px;" tabindex="-1">
                    <img src="../img/modal-cat-prod-inner-photo.png" alt="" class="card-prod-photo--slick slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" style="width: 228px;" tabindex="-1">
                </div>
            </div>


            <button type="button" class="slick-btn slick-next slick-arrow" style=""></button><ul class="slick-dots dots-slider" style="" role="tablist"><li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 3" tabindex="0" aria-selected="true">1</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 3" tabindex="-1">2</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control02" aria-controls="slick-slide02" aria-label="3 of 3" tabindex="-1">3</button></li></ul></div>
    </div>
    <div class="zoom-prod__text-wrapper">
        <div class="title-block-with-star">
            <h1 class="zoom-prod__title"><a href="product-page.html" class="">{{ $good['name'] }}</a></h1>
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
            <p class="arend-cost__text">Аренда на 3 суток - {{ $good['name'] }} ₽</p>
            <p class="arend-cost__text">Аренда на 7 суток - {{ $good['name'] }} ₽</p>
            <p class="arend-cost__main-text">2400 ₽ / сут</p>
        </div>
        <div class="system-notice__card-btns">
            <a href="#"><div class="system-card__first-btn">В корзину</div></a>
            <a href="#"><div class="system-card__second-btn">Забронировать</div></a>
        </div>
    </div>
</div>
<img class="modal__close-ico" src="../icons/photo-modal-close-icon.svg" alt="">
