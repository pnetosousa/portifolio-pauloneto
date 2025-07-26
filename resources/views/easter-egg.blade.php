@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/easter-egg.css') }}">

<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="text-center mb-4">
                <h1 class="display-4" style="color: #00ff88; font-family: 'Share Tech Mono', monospace;">
                    @lang('messages.Easter Egg - Algoritmos de Ordenação')
                </h1>
                <p class="lead text-light">@lang('messages.Visualize algoritmos de ordenação em ação!')</p>
            </div>

            <!-- Controles -->
            <div class="card bg-dark border-success mb-4">
                <div class="card-body text-center">
                    <button id="generateArray" class="btn btn-outline-success mr-2">@lang('messages.Gerar Array')</button>
                    <button id="bubbleSort" class="btn btn-outline-warning mr-2">@lang('messages.Bubble Sort')</button>
                    <button id="selectionSort" class="btn btn-outline-info mr-2">@lang('messages.Selection Sort')</button>
                    <button id="insertionSort" class="btn btn-outline-danger mr-2">@lang('messages.Insertion Sort')</button>
                    <div class="mt-3">
                        <label for="arraySize" class="text-light">@lang('messages.Tamanho do Array:')</label>
                        <input type="range" id="arraySize" min="10" max="50" value="20" class="ml-2">
                        <span id="arraySizeValue" class="text-success ml-2">20</span>
                    </div>
                    <div class="mt-2">
                        <label for="speed" class="text-light">@lang('messages.Velocidade:')</label>
                        <input type="range" id="speed" min="10" max="500" value="100" class="ml-2">
                        <span id="speedValue" class="text-success ml-2">100ms</span>
                    </div>
                </div>
            </div>

            <!-- Visualização -->
            <div class="card bg-dark border-success">
                <div class="card-header text-center">
                    <h4 id="algorithmTitle" class="text-success">@lang('messages.Clique em "Gerar Array" para começar')</h4>
                    <div id="stats" class="text-muted"></div>
                </div>
                <div class="card-body">
                    <div id="arrayContainer" class="d-flex justify-content-center align-items-end" style="height: 300px;">
                    </div>
                </div>
            </div>

            <!-- Informações sobre os Algoritmos -->
            <div class="algorithm-info">
                <h2 class="text-center text-success mb-4" style="font-family: 'Share Tech Mono', monospace;">
                    📚 @lang('messages.Sobre os Algoritmos')
                </h2>
                
                <!-- Bubble Sort -->
                <div class="algorithm-card">
                    <div class="algorithm-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="text-warning mb-0">🟡 @lang('messages.Bubble Sort')</h4>
                            <div>
                                <span class="complexity-badge complexity-bad">@lang('messages.Complexidade de Tempo:') O(n²)</span>
                                <span class="complexity-badge complexity-good ml-2">@lang('messages.Complexidade de Espaço:') O(1)</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-light mb-3">@lang('messages.Bubble Sort Descrição')</p>
                        <div class="pros-cons">
                            <div class="pros">
                                <h6>@lang('messages.Vantagens')</h6>
                                <ul>
                                    @foreach (__('messages.Bubble Vantagens') as $advantage)
                                        <li>{{ $advantage }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="cons">
                                <h6>@lang('messages.Desvantagens')</h6>
                                <ul>
                                    @foreach (__('messages.Bubble Desvantagens') as $disadvantage)
                                        <li>{{ $disadvantage }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Selection Sort -->
                <div class="algorithm-card">
                    <div class="algorithm-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="text-info mb-0">🔵 @lang('messages.Selection Sort')</h4>
                            <div>
                                <span class="complexity-badge complexity-bad">@lang('messages.Complexidade de Tempo:') O(n²)</span>
                                <span class="complexity-badge complexity-good ml-2">@lang('messages.Complexidade de Espaço:') O(1)</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-light mb-3">@lang('messages.Selection Sort Descrição')</p>
                        <div class="pros-cons">
                            <div class="pros">
                                <h6>@lang('messages.Vantagens')</h6>
                                <ul>
                                    @foreach (__('messages.Selection Vantagens') as $advantage)
                                        <li>{{ $advantage }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="cons">
                                <h6>@lang('messages.Desvantagens')</h6>
                                <ul>
                                    @foreach (__('messages.Selection Desvantagens') as $disadvantage)
                                        <li>{{ $disadvantage }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Insertion Sort -->
                <div class="algorithm-card">
                    <div class="algorithm-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="text-danger mb-0">🔴 @lang('messages.Insertion Sort')</h4>
                            <div>
                                <span class="complexity-badge complexity-medium">@lang('messages.Complexidade de Tempo:') O(n²)</span>
                                <span class="complexity-badge complexity-good ml-2">@lang('messages.Complexidade de Espaço:') O(1)</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-light mb-3">@lang('messages.Insertion Sort Descrição')</p>
                        <div class="pros-cons">
                            <div class="pros">
                                <h6>@lang('messages.Vantagens')</h6>
                                <ul>
                                    @foreach (__('messages.Insertion Vantagens') as $advantage)
                                        <li>{{ $advantage }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="cons">
                                <h6>@lang('messages.Desvantagens')</h6>
                                <ul>
                                    @foreach (__('messages.Insertion Desvantagens') as $disadvantage)
                                        <li>{{ $disadvantage }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/easter-egg.js') }}"></script>
@endsection
