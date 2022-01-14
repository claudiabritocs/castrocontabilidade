<header class="headermain">
    <div class="mainheader">
        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('assets/img/layout/headerlogo.png') }}" alt="Logo Castro Contabilidade e Assessoria">
        </a>

        <nav class="menulongo">
            <ul>
                <a href="{{ route('home') }}"><li>HOME</li></a>
                <a href="{{ route('abrircnpj') }}"><li>ABRIR CNPJ</li></a>
                <a href="{{ route('servicos') }}"><li>SERVIÇOS</li></a>
                <a href="{{ route('quemsomos') }}"><li>QUEM SOMOS</li></a>
                <div id="termos"><li>TERMOS ▼</li></div>
                <div class="dropdown-content" id="dropdown-content">
                    <a href="{{ route('termos') }}">Política de Privacidade</a>
                    <a href="{{ route('termos') }}#termosdeuso">Termos de Uso</a>
                </div>
            </ul>
        </nav>

        <div class="menuburger" id="menuburger">
            ☰
        </div>

        <div class="menuburgerlist0" id="menuburgerlist">
            <ul>
                <a href="{{ route('home') }}"><li>HOME</li></a>
                <a href="{{ route('abrircnpj') }}"><li>ABRIR CNPJ</li></a>
                <a href="{{ route('servicos') }}"><li>SERVIÇOS</li></a>
                <a href="{{ route('quemsomos') }}"><li>QUEM SOMOS</li></a>
                <a href="{{ route('termos') }}"><li>TERMOS</li></a>
            </ul>
        </div>
    </div>
</header>
