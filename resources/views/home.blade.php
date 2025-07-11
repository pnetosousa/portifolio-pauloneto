@extends('layouts.app')

@section('content')
    {{-- Cabeçalho com foto e saudação --}}
    <div class="d-flex flex-row flex-wrap justify-content-center align-items-center text-center text-md-left py-5">
        <div class="text-content px-4">
            <h1 class="display-4 font-weight-bold mb-3">
                @lang('messages.Olá!')<br>
                @lang('messages.Eu sou <span style="color: #00ff88;">Paulo Neto</span>,')
            </h1>
            <h2 class="h4 font-weight-normal mb-4">
                @lang('messages.Desenvolvedor PHP e fera em banco de dados.')
            </h2>

            {{-- Ícones abaixo do subtítulo --}}
            <div class="d-flex justify-content-center justify-content-md-start mt-3">
                <a href="https://wa.me/5562982761742" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"
                    class="mx-2">
                    <img src="{{ asset('img/whatsapp.png') }}" alt="WhatsApp" style="width: 40px; height: 40px;">
                </a>
                <a href="https://www.linkedin.com/in/pauloneto-sousa/" target="_blank" rel="noopener noreferrer"
                    aria-label="LinkedIn" class="mx-2">
                    <img src="{{ asset('img/linkedin.png') }}" alt="LinkedIn" style="width: 40px; height: 40px;">
                </a>
            </div>
        </div>

        <div class="foto-perfil px-4">
            <div class="foto-wrapper">
                <img src="{{ asset('img/foto-perfil.jpg') }}" alt="Foto de perfil" class="img-fluid border-custom">
            </div>
        </div>
    </div>

    {{-- Descrição sobre mim --}}
    <div class="row justify-content-center mt-4">
        <div class="col-md-9">
            <div class="mb-4">
                <p class="text-justify">
                    @lang('messages.Programador, formado em Ciência da Computação, viciado em resolver problemas com lógica e código. Trabalho com PHP e Laravel no dia a dia, mas também tenho uma boa bagagem com bancos de dados relacionais e integrações pesadas, tipo APIs REST, SOAP e até SAP. Gosto de código limpo, funcional e direto ao ponto, como as respostas que eu curto receber.')
                </p>
            </div>
            <div class="mb-4">
                <p class="text-justify">
                    @lang('messages.Sou daqueles que prefere entender o todo antes de sair programando. Gosto de pensar na solução, não só no sistema. Já fiz de tudo um pouco: desde sites institucionais one-page até integração contábil com dados cabeludos e manipulação de planilhas com Python. Composer, PSR-4, PHPUnit, Git… tudo isso faz parte da minha rotina.')
                </p>
            </div>
            <div class="mb-4">
                <p class="text-justify">
                    @lang('messages.Tenho planos grandes: quero me tornar desenvolvedor sênior nos próximos anos e mirar oportunidades fora do Brasil. Já tô me preparando pra isso. Inclusive, tenho inglês em nível C1, com boa fluência para comunicação técnica e conversação do dia a dia.')
                </p>
            </div>
            <div class="mb-4">
                <p class="text-justify">
                    @lang('messages.Mas nem só de código vive o dev. Treino musculação quase todo dia e encaixo uns treinos de Muay Thai durante a semana. Gosto dessa rotina porque me ajuda a manter o foco, o corpo ativo e a mente afiada. E sim, também sou aquele cara do time que resolve o bug e ainda te manda um meme.')
                </p>
            </div>
            <div>
                <p class="text-justify">
                    @lang('messages.Se você quer alguém comprometido, com vontade de crescer e que leva trabalho a sério sem perder a leveza, pode contar comigo.')
                </p>
            </div>
        </div>
    </div>
@endsection