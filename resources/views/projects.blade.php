<!-- resources/views/projetos.blade.php -->

@extends('layouts.app')

{{-- Projetos Blade Template --}}
{{-- Este arquivo exibe uma lista de projetos desenvolvidos pelo programador. --}}
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">@lang('messages.Projetos')</div>
                    <div class="card-body">
                        <ul>
                            <li>@lang('messages.Projeto 1: [nome do projeto]')</li>
                            <li>@lang('messages.Projeto 2: [nome do projeto]')</li>
                            <li>@lang('messages.Projeto 3: [nome do projeto]')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection