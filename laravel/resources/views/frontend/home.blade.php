@extends('frontend.common.template')

@section('content')

<body>
  <section class="inicial">
    <div class="banner" style="background-image: url({{ asset('assets/img/banners/banner.png')}});">
      <img src="{{ asset('assets/img/layout/biglogo.png') }}" alt="Logo Castro Contabilidade e Assessoria">
      <h1>{{ $home->titulo }}</h1>
      <h2 style="font-family: 'Mulish';">{{ $home->subtitulo }}</h2>
      <div class="btn_link0">
        <a href="https://api.whatsapp.com/send?phone=5511972467069&text=Oi%2C%20tudo%20bem%3F%20Quero%20fazer%20uma%20pergunta." target="_blank">
          <div class="mainbutton"><p>Clique Aqui</p></div>
        </a>
      </div>
    </div>
  </section>

  <div class="hidden_call">
    <h1>{{ $home->titulo }}</h1>
    <h2>{{ $home->subtitulo }}</h2>
    <a href="https://api.whatsapp.com/send?phone=5511972467069&text=Oi%2C%20tudo%20bem%3F%20Quero%20fazer%20uma%20pergunta." target="_blank"><div class="mainbutton2"><p>Clique Aqui</p></div></a>
  </div>

  <section class="cards-father">
    <div class="arrow1">
      <i class="fa fa-angle-double-down"  aria-hidden="true"></i>
    </div>
    
    <div class="cards">
      <div class="son-um">
        <img src="{{ asset('assets/img/icons/icon1.png') }}" alt="Ícone de um monitor com engrenagens">
        <h3>A Melhor Tecnologia para Garantir sua Contabilidade</h3>
        <p>Nós utilizamos a tecnologia a favor da contabilidade para sua empresa. Dessa forma, conseguimos entregar mais praticidade, agilidade e transparência.</p>
      </div>

      <div class="son-dois">
        <img src="{{ asset('assets/img/icons/icon2.png') }}" alt="Ícone de um relógio com linhas à esquerda, dando impressão de movimento">
        <h3>Ganhe Mais Tempo</h3>
        <p>Agilizamos sempre o serviço porque sabemos que o recurso mais valioso do cliente é o seu tempo.</p>
      </div>

      <div class="son-um">
        <img src="{{ asset('assets/img/icons/icon3.png') }}" alt="Ícone de uma moeda caindo na palma de uma mão estendida.">
        <h3>Preço Justo e Economia Garantida</h3>
        <p>Temos os melhores Planos com preço justo e sem cobrança surpresa. Você fica tranquilo sabendo que está em boas mãos.</p>
      </div>

      <div class="son-dois">
        <img src="{{ asset('assets/img/icons/icon4.png') }}" alt="Ícone de duas pessoas conversando com balões acima de suas cabeças.">
        <h3>Excelência no Atendimento</h3>
        <p>Nossos Clientes conhecem e confiam no nosso atendimento, seja por telefone, e-mail ou até pessoalmente sempre que precisam.</p>
      </div>
    </div>

    <div class="arrow1">
      <i class="fa fa-angle-double-down"  aria-hidden="true"></i>
    </div>

  </section>

  <section class="abertura">
    
    <img class="smallimg" src="{{ asset('assets/img/layout/negocio.png') }}" alt="Uma mulher e um homem sentados frente a frente, na mesa diversos papéis com gráficos e cadernetas.">
    
    <div class="uniquebox">

      <img class="bigimg" src="{{ asset('assets/img/layout/negocio.png') }}" alt="Uma mulher e um homem sentados frente a frente, na mesa diversos papéis com gráficos e cadernetas.">

      <h3>Abertura de CNPJ</h3>
      <p class="p1">O primeiro passo é ter um planejamento de negócio. É importante ter uma previsão de faturamento e definir o segmento de atuação e a estrutura jurídica.</p>
      <p class="p2">Fique Tranquilo que vamos te ajudar com tudo isso.</p>

      <div class="btn_unq">
          <a href="https://api.whatsapp.com/send?phone=5511972467069&text=Oi%2C%20tudo%20bem%3F%20Quero%20fazer%20uma%20pergunta." target="_blank">
            <div class="btn_abertura"><p class="p3">QUERO FALAR AGORA</p></div>
          </a>
      </div>
      
    </div>
  </section>

  <section class="servicos">
    <h2>Serviços</h2>

    <div class="serv1">
    <img class="serbig4" src="{{ asset('assets/img/layout/servi3.jpg') }}" alt="Dois homens sentados à mesa, um apontando para a tela do notebook, enquanto o outro escreve em uma caderneta.">
      <h3>Regularização de Empresas</h3>
      <p>Após a avaliação técnica estabelecemos o melhor caminho para a regularização de sua empresa, sempre trabalhando com os fatores de custo da regularização e o prazo demandado.</p>
        <ul>
          <li>Elaboração de um relatório minucioso da situação da empresa;</li>
          <li>Organização interna da documentação e da escrita contábil e fiscal;</li>
          <li>Levantamento de Darfs, GPS's, Guias de ISS, Guias de Recolhimentos de Imposto Sindical, etc.;</li>
          <li>Levantamento de notas fiscais de compras, notas fiscais de vendas, recibos de pagamentos diversos, etc.;</li>
          <li>Levantamento de impostos em atraso para fins de parcelamentos;</li>
          <li>Elaboração da Escrita Contábil que se encontrar em atraso;</li>
          <li>Elaboração da Escrita Fiscal que se encontrar em atraso.</li>
        </ul>
        <img class="serbig1" src="{{ asset('assets/img/layout/servi.jpg') }}" alt="Dois homens sentados à mesa, um apontando para a tela do notebook, enquanto o outro escreve em uma caderneta.">
    </div>

    <div class="serv2">
    <img class="serbig5" src="{{ asset('assets/img/layout/servi4.jpg') }}" alt="Dois homens sentados à mesa, olhando para a tela do notebook com duas xícaras de café à mesa.">
      <h3>Departamento Fiscal</h3>
      <p>Atualizamos sua escrituração dos livros fiscais, apuração e controle dos impostos federais, estaduais e municipais. Serão elaboradas e encaminhadas as declarações e obrigações pertinentes a sua empresa a nível federal, estadual e municipal. Quanto aos impostos em atraso.</p>
      <br>
      <ul>
        <li>Consultoria nas áreas de PIS, COFINS, SIMPLES E ISS;</li>
        <li>Emissão de carta de faturamento;</li>
        <li>Escrituração de livros (Entrada, Saída).</li>
      </ul>
      <img class="serbig2" src="{{ asset('assets/img/layout/servi2.jpg') }}" alt="Dois homens sentados à mesa, olhando para a tela do notebook com duas xícaras de café à mesa.">
    </div>

    <div class="serv3">
      <img class="serbig6" src="{{ asset('assets/img/layout/servi5.jpg') }}" alt="Uma vista de cima de uma reunião de negócios, com um notebook e papéis a mesa. Dois homens apertam mãos, enquanto a mão de uma mulher está fazendo anotações.">

      <h3>Contabilidade Geral</h3>
      <p>Colocamos a contabilidade de sua empresa em ordem no que tange a escrituração contábil, levantamento de balancetes mensais, balanços trimestrais e anuais e demais demonstrativos contábeis e financeiros.</p>
      <br>
      <ul>
        <li>Balanços/Demonstrações Contábeis;</li>
        <li>Balancetes;</li>
        <li>Demonstração de Resultados;</li>
        <li>Análise periódicas;</li>
        <li>Apuração e controle de Lucro Presumido;</li>
        <li>Livro caixa;</li>
        <li>Consultoria Contábil;</li>
        <li>Emissão de livros obrigatórios (Diário, Razão e outros);</li>
        <li>Retenções de CSLL / IRPJ / INSS / ISS / PIS-PASEP / COFINS;</li>
        <li>DCTF - Declaração de Créditos;</li>
        <li>DACON, DIF, DIPJ, IRPF, DIRF;</li>
        <li>Declaração de Simples, Declaração de Imunes, Declaração de Isentas, Declaração de Extinção, Declaração de Inativas.</li>
      </ul>
      <img class="serbig3" src="{{ asset('assets/img/layout/servi1.jpg') }}" alt="Uma vista de cima de uma reunião de negócios, com um notebook e papéis a mesa. Dois homens apertam mãos, enquanto a mão de uma mulher está fazendo anotações.">
    </div>

    <div class="btn_ser">
      <a href="/servicos">
        <div class="btn_todos"><p class="p4">VER TODOS OS SERVIÇOS</p></div>
      </a>
    </div>
  </section>

  <section class="cert_div">
    <div class="cert_principal">
      <img src="{{ asset('assets/img/certificados/crcsp.png') }}" alt="CRC-SP">
      <p>Empresa Registrada no Conselho Regional de Contabilidade do Estado de São Paulo.</p>
    </div>

    <div class="img_cert">
      @foreach($certificados as $c)
        <img src="{{ asset('assets/img/certificados/'.$c->imagem) }}" alt="certificados">
      @endforeach
    </div>
  </section>

  <section class="contatos">
    <h5>Sobre a Empresa</h5>
    <div class="contatoscards">
      <div>
        <h6><ion-icon name="pin"></ion-icon> Endereço</h6>
        <p id="end">{{ str_replace(array("<p>", "</p>"),'', $contato->endereco) }}</p>
      </div>
      <div>
        <h6><ion-icon name="call"></ion-icon> Contato</h6>
        <p>{{ $contato->telefone }}</p>
        <p>{{ $contato->telefone_2 }}</p>
      </div>
      <div>
        <h6><ion-icon name="mail"></ion-icon> E-mail</h6>
        <p>{{ $contato->email }}</p>
      </div>
    </div>

    @if($contato->google_maps)
      <div class="mapgoggle">
          {!! $contato->google_maps !!}
      </div>
    @endif
  </section>

  <section class="FAQ">
    <div class="faixafaq">
      <h5>F.A.Q.</h5>
    </div>
    <div class="allblocos">
      @foreach ($faq as $f)
        <div class="blocos">
          <h4>{{ $f->titulo }}</h4>
          <hr>
          <p>{{ $f->paragrafo }}</p>
        </div>
      @endforeach
    </div>
  </section>
</body>


@endsection
