<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ URL::asset('/images/icon.ico') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/3.3/examples/carousel/carousel.css" rel="stylesheet">
</head>
<body>

<!-- NAVBAR -->
<div class="navbar-wrapper">
    <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">{{ config('app.name', 'Laravel') }}</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/about">Обо мне</a></li>
                        <li><a href="/contact">Обратная связь</a></li>
                        {{--<li class="dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"--}}
                               {{--aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>--}}
                            {{--<ul class="dropdown-menu">--}}
                                {{--<li><a href="#">Action</a></li>--}}
                                {{--<li><a href="#">Another action</a></li>--}}
                                {{--<li><a href="#">Something else here</a></li>--}}
                                {{--<li role="separator" class="divider"></li>--}}
                                {{--<li class="dropdown-header">Nav header</li>--}}
                                {{--<li><a href="#">Separated link</a></li>--}}
                                {{--<li><a href="#">One more separated link</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Войти</a></li>
                            <li><a href="{{ route('register') }}">Регистрация</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->first_name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Выйти
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</div>

    @yield('content')

    <!-- FOOTER -->
    <footer style="margin-top: 50px;">
        <p>Контакты:</p>
        {{--<p>Skype:</p>--}}
        <p>Email: <a href="mailto:govorilka.dina@gmail.com">govorilka.dina@gmail.com</a></p>
        <p>Viber/Telegram: <a href="tel:+380992082455">+380992082455</a></p>
        <hr>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; {{ date('Y') }} {{ config('app.name') }}</p>
    </footer>

</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://getbootstrap.com/docs/3.3/assets/js/vendor/holder.min.js"></script>
{{--<script src='https://www.google.com/recaptcha/api.js'></script>--}}
{{--<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>--}}

</body>
</html>
