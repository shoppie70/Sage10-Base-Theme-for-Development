<footer class="footer">
    <div class="footer-content">
        <div class="footer-detail">
            <a href="{{ home_url() }}">
                <img class="ml-auto mr-auto lg:ml-0 lg:mr-0 lazyload" src="" data-src="{{ App\asset('images/logo.png') }}" alt="{{ MASTER_NAME }}">
            </a>
            <p class="mt-4">
                {{ ZIP . ' ' . ADDRESS }}<br>
                電話番号 / <a href="tel:{{ TEL }}">{{ TEL }}</a><br>
                営業時間 / {{ OPEN }}<br>
                定休日 / {{ REST }}<br>
                E-mail / {{ MAIL }}<br>
            </p>
        </div>
        @foreach( $footer_menu as $footer_title => $footer_item )
            <div class="footer-menu__wrap">
                <p class="footer-menu__title">
                    {{ $footer_title }}
                </p>
                <ul class="footer-menu">
                    @foreach( $footer_item as $footer_item_link => $footer_item_title )
                        <li class="footer-menu__item">
                            <a href="{{ $footer_item_link }}">
                                {{ $footer_item_title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
    <div class="copyright text-center text-md">
        <small>
            Copyright(C){{ MASTER_NAME_EN }}.All Rights Reserved.
        </small>
    </div>
    @include('partials.floating-btn')
</footer>
