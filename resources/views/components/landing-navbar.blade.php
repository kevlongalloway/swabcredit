<div>
    <nav class="navbar navbar-expand-lg bg-hue-light cgray navbar-style-4 font-title py-2 sm:py-4 fixed-top">
        <div class="container">
            <a class="navbar-brand-custom" href="#">
                <img src="{{ url('../images/logo.png') }}" class="navcon mr-2"
                style="vertical-align: bottom;">
                <span class="navbar-logo-text" style="vertical-align: bottom;"><b>wab</b>Credit & Trust</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent4"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse mobile-text" id="navbarSupportedContent4">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu mobile-text" aria-labelledby="navbarDropdownMenuLink">
                            @foreach($services as $s)
                                <a class="dropdown-item" href="{!! route('guest.services', $s->path) !!}">{{ $s->name }}</a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">{{ __('Pricing') }}</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active mx-2">
                        <a class="nav-link" href="#">{{ __('About') }}<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">{{ __('Contact') }}</a>
                    </li>
                @auth
                    @isAdmin
                    <li class="nav-item mx-2 active">
                        <a class="nav-link  btn-warning btn" href="{{ route('register') }}">{{ __('Admin Dashboard') }}</a>
                    </li>
                    @endisAdmin
                    <li class="nav-item mx-2 active">
                        <a class="nav-link  btn-warning btn" href="{{ url('/dashboard') }}">{{ __('Dashboard') }}</a>
                    </li>

                @else
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item mx-2 active">
                        <a class="nav-link  btn-warning btn" href="{{ route('products') }}">{{ __('Try Now') }}</a>
                    </li>
                @endauth
                </ul>
            </div>
        </div>
    </nav>
</div>