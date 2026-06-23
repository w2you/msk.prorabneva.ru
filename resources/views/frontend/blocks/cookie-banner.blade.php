@if(isset($showCookieBanner) && $showCookieBanner && !session()->has('cookie_consent_accepted') && !request()->hasCookie('cookie_consent_accepted'))
<div id="cookie-banner" class="cookie-banner">
    <div class="cookie-banner-wrapper">
        <div class="cookie-banner-content">
            <p class="cookie-banner-text">
                Для улучшения работы сайта мы используем cookie (куки). 
                Продолжая пользоваться сайтом, вы соглашаетесь с нашей 
                <a href="#" class="open_popup_privacy cookie-link">
                    политикой обработки данных</a>.
            </p>
            <button id="cookie-accept" class="cookie-accept-btn">Принять</button>
        </div>
    </div>
</div>
@endif
