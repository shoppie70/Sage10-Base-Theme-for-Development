<header class="banner">
    <nav class="top-nav wow animate__animated animate__fadeInDown">
        <div class="container flex justify-between items-center mx-auto">
            <a href="{{ home_url('/') }}">
                <img class="pl-4 lg:pl-0 py-4" src="{{ App\asset('images/top-logo.png') }}" alt="{{ MASTER_NAME }}">
            </a>
            <ul class="hidden lg:flex justify-between">
                @foreach( $topNav as $path => $title )
                    <li class="mx-4">
                        <a href="{{ home_url($path) }}">
                            {{ $title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
    @include('partials.drawer')
</header>
