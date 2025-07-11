<!-- resources/views/sobre.blade.php -->

@extends('layouts.app')

{{-- Sobre mim Blade Template --}}
{{-- Este arquivo exibe informações sobre o desenvolvedor, incluindo nome, experiência e especializações. --}}
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-4 d-flex flex-row align-items-center justify-content-center card-days-counter">
                    <div class="d-flex flex-column align-items-center w-100 p-4">
                        <div class="card-header p-0 mb-3 bg-transparent border-0">
                            @lang('messages.Estamos há:')
                            <span id="diasSemUpdate" class="dias-neon"></span>
                            <span>@lang('messages.dias realizando updates com where.')<br>
                                @lang('messages.Nosso recorde é') </span><span id="recordeDias" class="recorde-neon"></span>
                            <span>@lang('messages.dias.')</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-4 d-flex flex-row align-items-center justify-content-between card-formacao">
                    <div class="d-flex flex-column flex-md-row align-items-center mb-4">
                        <div class="flex-fill">
                            <div class="p-4"
                                style="min-height: 200px; min-width: 0; width: 100%; max-width: 700px; margin: 0 auto;">
                                <div class="card-header p-0 mb-3 bg-transparent border-0">
                                    @lang('messages.Formação')</div>
                                <div class="card-body p-0">
                                    <p style="text-align: justify;">
                                        @lang('messages.Sou graduado em Ciência da Computação pela PUC Goiás (2021), onde vivi experiências marcantes e um intenso aprendizado. Tive a oportunidade de atuar como monitor, apresentar um TCC nota dez e, claro, construir grandes amizades que levo para a vida. Essa trajetória acadêmica foi fundamental para minha evolução pessoal e profissional.')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 mb-md-0 ml-md-4 d-flex justify-content-center align-items-center">
                            <div class="foto-wrapper">
                                <img src="{{ asset('img/formacao.png') }}" alt="Formação" class="img-fluid border-custom">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 d-flex flex-row align-items-center justify-content-center card-conhecimentos">
                    <div class="d-flex flex-column align-items-center w-100">
                        <div class="p-4"
                            style="min-height: 200px; min-width: 0; width: 100%; max-width: 700px; margin: 0 auto;">
                            <div class="card-header p-0 mb-3 bg-transparent border-0">
                                @lang('messages.Conhecimentos e atuações')
                            </div>
                            <div class="card-body p-0">
                                <div class="mb-3">
                                    <div class="mb-2 text-center">
                                        <strong class="d-block mb-2">@lang('messages.Linguagens & Frameworks')</strong>
                                        <div class="d-flex flex-wrap justify-content-center align-items-center mb-3">
                                            <div class="mx-2 mb-3 text-center">
                                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg"
                                                    alt="PHP" title="PHP" class="tech-icon">
                                                <div class="tech-label">PHP</div>
                                            </div>
                                            <div class="mx-2 mb-3 text-center">
                                                <img src="img/laravel-logo.svg" alt="Laravel" title="Laravel" class="tech-icon">
                                                <div class="tech-label">Laravel</div>
                                            </div>
                                            <div class="mx-2 mb-3 text-center">
                                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                                                    alt="JavaScript" title="JavaScript" class="tech-icon">
                                                <div class="tech-label">JavaScript</div>
                                            </div>
                                            <div class="mx-2 mb-3 text-center">
                                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg"
                                                    alt="Node.js" title="Node.js" class="tech-icon">
                                                <div class="tech-label">Node.js</div>
                                            </div>
                                            <div class="mx-2 mb-3 text-center">
                                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"
                                                    alt="HTML5" title="HTML5" class="tech-icon">
                                                <div class="tech-label">HTML5</div>
                                            </div>
                                            <div class="mx-2 mb-3 text-center">
                                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg"
                                                    alt="CSS3" title="CSS3" class="tech-icon">
                                                <div class="tech-label">CSS3</div>
                                            </div>
                                            <div class="mx-2 mb-3 text-center">
                                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/materializecss/materializecss-original.svg"
                                                    alt="Materialize CSS" title="Materialize CSS" class="tech-icon">
                                                <div class="tech-label">Materialize CSS</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2 text-center">
                                        <strong class="d-block mb-2">@lang('messages.Bancos de Dados')</strong>
                                        <div class="d-flex flex-wrap justify-content-center align-items-center mb-3">
                                            <div class="mx-2 mb-3 text-center">
                                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg"
                                                    alt="MySQL" title="MySQL" class="tech-icon">
                                                <div class="tech-label">MySQL</div>
                                            </div>
                                            <div class="mx-2 mb-3 text-center">
                                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg"
                                                    alt="PostgreSQL" title="PostgreSQL" class="tech-icon">
                                                <div class="tech-label">PostgreSQL</div>
                                            </div>
                                            <div class="mx-2 mb-3 text-center">
                                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/oracle/oracle-original.svg"
                                                    alt="Oracle" title="Oracle" class="tech-icon">
                                                <div class="tech-label">Oracle</div>
                                            </div>
                                            <div class="mx-2 mb-3 text-center">
                                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sqlite/sqlite-original.svg"
                                                    alt="SQLite" title="SQLite" class="tech-icon">
                                                <div class="tech-label">SQLite</div>
                                            </div>
                                            <div class="mx-2 mb-3 text-center">
                                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/microsoftsqlserver/microsoftsqlserver-plain.svg"
                                                    alt="SQL Server" title="SQL Server" class="tech-icon">
                                                <div class="tech-label">SQL Server</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2 text-center">
                                        <strong class="d-block mb-2">@lang('messages.Ferramentas & DevOps')</strong>
                                        <div class="d-flex flex-wrap justify-content-center align-items-center mb-3">
                                            <div class="mx-2 mb-3 text-center">
                                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg"
                                                    alt="Docker" title="Docker" class="tech-icon">
                                                <div class="tech-label">Docker</div>
                                            </div>
                                            <div class="mx-2 mb-3 text-center">
                                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postman/postman-original.svg"
                                                    alt="Postman" title="Postman" class="tech-icon">
                                                <div class="tech-label">Postman</div>
                                            </div>
                                            <div class="mx-2 mb-3 text-center">
                                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jira/jira-original.svg"
                                                    alt="Jira" title="Jira" class="tech-icon">
                                                <div class="tech-label">Jira</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/diasSemUpdate.js"></script>
@endsection