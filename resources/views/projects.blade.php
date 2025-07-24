<!-- resources/views/projetos.blade.php -->

@extends('layouts.app')

{{-- Projetos Blade Template --}}
{{-- Este arquivo exibe uma lista de projetos desenvolvidos pelo programador. --}}
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card projects-card">
                    <div class="card-header text-center">@lang('messages.Sistema de Cadastro de clientes e representantes com CRUD')</div>
                    <div class="card-body">
                        <ul>
                            <li>
                                <ul>
                                    <li><strong>@lang('messages.Descrição:')</strong> @lang('messages.Sistema completo de gestão desenvolvido como desafio técnico')</li>
                                    <li><strong>@lang('messages.Tecnologias:')</strong> PHP 8.x, Laravel Framework, MySQL, Blade Templates,
                                        Migrations, Seeders</li>
                                    <li><strong>@lang('messages.Recursos Implementados:')</strong>
                                        <ul>
                                            <li>@lang('messages.API RESTful completa')</li>
                                            <li>@lang('messages.Sistema de autenticação')</li>
                                            <li>@lang('messages.Migrações e seeders para estrutura do banco')</li>
                                            <li>@lang('messages.Eloquent ORM para interações com BD')</li>
                                            <li>@lang('messages.Validações de dados')</li>
                                            <li>@lang('messages.Tratamento de exceções')</li>
                                        </ul>
                                    </li>
                                    <li><strong>@lang('messages.Banco de Dados:')</strong> @lang('messages.MySQL com tabelas estruturadas via migrations')</li>
                                    <li><strong>@lang('messages.Arquitetura:')</strong> @lang('messages.MVC (Model-View-Controller)')</li>
                                    <li><strong>@lang('messages.Funcionalidades:')</strong> @lang('messages.CRUD completo, relacionamentos entre tabelas, consultas otimizadas')</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Screenshots do Sistema centralizados no projeto principal -->
                    <strong class="d-block screenshots-title text-center">@lang('messages.Screenshots')</strong>
                    <div id="screenshotCarousel" class="carousel-container">
                        <div class="carousel-item active">
                            <div class="image-wrapper">
                                <img src="{{ asset('img/cadastro-crud.png') }}" alt="Tela de Cadastro CRUD"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="image-wrapper">
                                <img src="{{ asset('img/consulta-cliente.png') }}" alt="Consulta de Clientes"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="image-wrapper">
                                <img src="{{ asset('img/crud-completo.png') }}" alt="CRUD Completo" class="img-fluid">
                            </div>
                        </div>
                        <!-- Indicadores -->
                        <div class="carousel-indicators">
                            <span class="indicator active" data-slide="0"></span>
                            <span class="indicator" data-slide="1"></span>
                            <span class="indicator" data-slide="2"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Segundo Projeto: Aplicação NIS -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card projects-card">
                    <div class="card-header text-center">@lang('messages.Aplicação NIS - Sistema de Cadastro de Cidadãos')</div>
                    <div class="card-body">
                        <ul>
                            <li><strong>@lang('messages.Descrição:')</strong> @lang('messages.Sistema para cadastro de cidadãos com geração automática de NIS (Número de Identificação Social) desenvolvido como desafio técnico para a CIENTEC')</li>
                            <li><strong>@lang('messages.Tecnologias:')</strong> PHP 8.x, SQLite, PDO, Composer, PHPUnit, HTML5, CSS3</li>
                            <li><strong>@lang('messages.Recursos Implementados:')</strong>
                                <ul>
                                    <li>@lang('messages.Cadastro completo de cidadãos com validação')</li>
                                    <li>@lang('messages.Geração automática de NIS único')</li>
                                    <li>@lang('messages.Sistema de busca eficiente por NIS')</li>
                                    <li>@lang('messages.Estrutura MVC organizada')</li>
                                    <li>@lang('messages.Testes automatizados com PHPUnit')</li>
                                    <li>@lang('messages.URLs amigáveis com .htaccess')</li>
                                    <li>@lang('messages.Servidor embutido PHP compatível')</li>
                                </ul>
                            </li>
                            <li><strong>@lang('messages.Banco de Dados:')</strong> @lang('messages.SQLite com estrutura otimizada e scripts de criação automatizados')</li>
                            <li><strong>@lang('messages.Arquitetura:')</strong> @lang('messages.MVC com separação clara de responsabilidades (src/, tests/, public/)')</li>
                            <li><strong>@lang('messages.Funcionalidades:')</strong> @lang('messages.CRUD de cidadãos, geração de NIS único, consulta por NIS, validações robustas')</li>
                        </ul>
                    </div>
                    <!-- Screenshots do Sistema NIS -->
                    <strong class="d-block screenshots-title text-center">@lang('messages.Screenshots')</strong>
                    <div id="nisCarousel" class="carousel-container">
                        <div class="carousel-item active">
                            <div class="image-wrapper">
                                <img src="{{ asset('img/sistema-nis-registro.png') }}" alt="Sistema NIS - Registro"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="image-wrapper">
                                <img src="{{ asset('img/sistema-nis-cadastro.png') }}" alt="Sistema NIS - Cadastro"
                                    class="img-fluid">
                            </div>
                        </div>
                        <!-- Indicadores -->
                        <div class="carousel-indicators">
                            <span class="indicator active" data-slide="0"></span>
                            <span class="indicator" data-slide="1"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Terceiro Projeto: Analize Platform -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card projects-card">
                    <div class="card-header text-center">@lang('messages.Analize - Plataforma de Gestão Contábil')</div>
                    <div class="card-body">
                        <ul>
                            <li><strong>@lang('messages.Descrição:')</strong> @lang('messages.Plataforma 100% online para gestão contábil ágil e inteligente desenvolvida para automatizar processos de consolidação contábil')</li>
                            <li><strong>@lang('messages.Tecnologias:')</strong> PHP, Laravel, MySQL, Vue.js, Docker, AWS, REST APIs</li>
                            <li><strong>@lang('messages.Recursos Implementados:')</strong>
                                <ul>
                                    <li>@lang('messages.Demonstrações consolidadas, combinadas e individuais (CPC 36/44)')</li>
                                    <li>@lang('messages.Conversão de demonstrações contábeis (CPC 02)')</li>
                                    <li>@lang('messages.Dashboard de indicadores financeiros em tempo real')</li>
                                    <li>@lang('messages.Equivalência patrimonial com eliminações automáticas')</li>
                                    <li>@lang('messages.Integração com qualquer ERP e múltiplos bancos de dados')</li>
                                    <li>@lang('messages.Bloco K SPED-ECD com mapeamento automático')</li>
                                    <li>@lang('messages.Notas explicativas automatizadas')</li>
                                    <li>@lang('messages.Sistema em nuvem com interface responsiva')</li>
                                </ul>
                            </li>
                            <li><strong>@lang('messages.Banco de Dados:')</strong> MySQL com replicação e backup automatizado</li>
                            <li><strong>@lang('messages.Arquitetura:')</strong> @lang('messages.Plataforma SaaS com arquitetura distribuída em nuvem')</li>
                            <li><strong>@lang('messages.Funcionalidades:')</strong> @lang('messages.Consolidação contábil automatizada, gestão de demonstrações financeiras, análise de indicadores, integração ERP')</li>
                        </ul>
                    </div>
                    <!-- Link da Plataforma Analize -->
                    <div class="text-center mt-3 mb-3">
                        <a href="https://analize.com.br" target="_blank" class="btn btn-outline-success">
                            <i class="fas fa-external-link-alt"></i> @lang('messages.Acessar Plataforma Analize')
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Include Carousel JavaScript --}}
    <script src="{{ asset('js/carousel.js') }}"></script>
@endsection
