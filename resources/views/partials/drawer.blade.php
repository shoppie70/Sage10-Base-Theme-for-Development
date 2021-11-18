<button type="button" class="drawer-toggle drawer-hamburger">
    <span class="sr-only">toggle navigation</span>
    <span class="drawer-hamburger-icon"></span>
</button>
<nav class="drawer-nav" role="navigation">
    <div class="drawer-menu">
        <a href="{{ home_url() }}">
            <img class="lazyload drawer__logo w-full" src="{{ App\asset('images/top-logo.png') }}" data-src="{{ App\asset('images/top-logo.png') }}" alt="{{ get_the_title() }}">
        </a>
        <ul class="drawer__menu">
            @foreach( $topNav as $path => $title )
                <li class="drawer__menu--item">
                    <a href="{{ home_url($path) }}">
                        {{ $title }}
                    </a>
                </li>
            @endforeach
        </ul>
        <div class="drawer__company">
            {{ MASTER_NAME }}<br>
            {{ ZIP }}<br>
            {{ ADDRESS }}
        </div>
        <a href="{{ home_url('contact') }}" class="block w-11/12 mx-auto mt-8 mb-2">
            <img src="{{ App\asset('images/contact.png') }}" alt="お問い合わせはこちら">
        </a>
        <a href="tel:{{ TEL }}"class="block w-11/12 mx-auto">
            <img src="{{ App\asset('images/tel.png') }}" alt="お電話はこちら">
        </a>
    </div>
</nav>
