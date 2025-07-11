<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

{{-- Head da pagina --}}
{{--
Este arquivo contém a estrutura básica do layout do site, incluindo o cabeçalho, rodapé e links para CSS e JavaScript.
Ele é usado como base para todas as páginas do portfólio.
--}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio - Paulo Neto</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&family=JetBrains+Mono:wght@400;600&family=Montserrat:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

{{-- Body da pagina --}}
{{--
Este arquivo contém a estrutura básica do layout do site, incluindo o cabeçalho, rodapé e links para CSS e JavaScript.
Ele é usado como base para todas as páginas do portfólio.
--}}

<body>
    {{-- Cabeçalho do site --}}
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark custom-navbar fixed-top shadow-sm animate-navbar">
            <div class="container d-flex justify-content-between align-items-center">
                <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo-img mr-2">
                </a>
                <div class="d-flex align-items-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('home') }}">
                                @lang('messages.Início')
                            </a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('about') }}">
                                @lang('messages.Sobre')
                            </a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('projetos') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('projetos') }}">
                                @lang('messages.Projetos')
                            </a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <div class="dropdown mr-3">
                                <button class="btn btn-sm btn-outline-success dropdown-toggle d-flex align-items-center" type="button"
                                    id="langDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    style="font-family:'Share Tech Mono', monospace;">
                                    <img src="{{ asset('img/language.svg') }}" alt="Mudar idioma" width="24" height="24" class="mr-1">
                                </button>
                                <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="langDropdown">
                                    <a class="dropdown-item text-light d-flex align-items-center" href="{{ url('lang/pt') }}">
                                        <img src="https://cdn.jsdelivr.net/gh/hjnilsson/country-flags/svg/br.svg" alt="Português"
                                            width="24" height="16" class="mr-2"> Português
                                    </a>
                                    <a class="dropdown-item text-light d-flex align-items-center" href="{{ url('lang/en') }}">
                                        <img src="https://cdn.jsdelivr.net/gh/hjnilsson/country-flags/svg/us.svg" alt="English"
                                            width="24" height="16" class="mr-2"> English
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    {{-- Conteúdo principal --}}
    <main class="main-content fade-in">
        @yield('content')
    </main>

    {{-- Rodapé do site --}}
    <footer class="footer mt-5">
        <div class="container text-center py-3">
            <div class="footer-divider mb-2"></div>
            <span>@lang('messages.© 2025 Paulo Neto. Todos os direitos reservados.')</span>
        </div>
    </footer>

    {{-- Scripts --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>