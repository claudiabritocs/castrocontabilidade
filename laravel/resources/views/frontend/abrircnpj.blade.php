@extends('frontend.common.template')

@section('content')

<body>
  <section class="inicial">
    <div class="banner2" style="background-image: url({{ asset('assets/img/banners/banner.png')}});">
      <img src="{{ asset('assets/img/layout/biglogo.png') }}" alt="Logo Castro Contabilidade e Assessoria">
      <h1>Abra Sua Empresa MEI<br>Sem Nenhum Custo e Burocracia</h1>
      <h2 style="font-family: 'Mulish';">A Melhor Assessoria da Região</h2>
      <div class="btn_link0">
        <a href="https://api.whatsapp.com/send?phone=5511972467069&text=Oi%2C%20tudo%20bem%3F%20Quero%20abrir%20um%20MEI." target="_blank">
          <div class="mainbutton3"><p>Abrir Agora</p></div>
        </a>
      </div>
    </div>
  </section>

  <div class="hidden_call2">
    <h1>Abra Sua Empresa MEI<br>Sem Nenhum Custo e Burocracia</h1>
    <h2>A Melhor Assessoria da Região</h2>
    <a href="https://api.whatsapp.com/send?phone=5511972467069&text=Oi%2C%20tudo%20bem%3F%20Quero%20abrir%20um%20MEI." target="_blank"><div class="mainbutton4"><p>Clique Aqui</p></div></a>
  </div>
 
  <section class="formalizar">
    <div class="two_blocks">
      <div class="block1">
        <h2>Já pensou em formalizar sua Empresa abrindo um CNPJ?</h2>
      </div>
      <div class="block2">
        <h2>E o melhor: ter uma Contabilidade séria fazendo isso pra você de forma gratuita?</h2>
      </div>
    </div>
    <div class="big_square">
      <img src="{{ asset('assets/img/layout/negocios.jpg')}}" alt="Duas pessoas frente a frente em uma mesa com diversos documentos, papéis de relatórios e cadernetas.">
      <p>Um dos maiores problemas que as empresas não formalizadas tem, é não passar confiança para o cliente, que as vezes evita fazer negócio com a sua empresa simplesmente por não ter um CNPJ ou por não passar a impressão de uma empresa séria.</p>
      <p>Só isso já seria um motivo grande para não ficar assim. Mas a verdade é que se a sua empresa está informal, você ainda corre sérios riscos com a Receita Federal.</p>

      <div class="btn_link3">
        <a href="https://api.whatsapp.com/send?phone=5511972467069&text=Oi%2C%20tudo%20bem%3F%20Quero%20abrir%20um%20MEI." target="_blank">
          <div class="mainbutton5"><span>QUERO FALAR AGORA</span></div>
        </a>
      </div>
    </div>
  </section>

  <section class="littlecall">
    
    <div class="call1">
      <img class="insideimg1" src="{{ asset('assets/img/layout/servi3.jpg') }}" alt="Dois homens sentados à mesa, um apontando para a tela do notebook, enquanto o outro escreve em uma caderneta.">
      <h3>E se te falassem que é possível?</h3>
      <p>E se te falassem que é possível pagar uma guia como MEI que é extremamente baixa para ter toda a segurança e a confiança que a sua empresa precisa passar.</p>
      <br>
      <p>O processo pode até não ser tão simples, mas isso é por nossa conta e vamos fazer para te ajudar.</p>
      <br>
      <p>Queremos te oferecer a oportunidade de regularizar sua empresa sem nenhuma cobrança, realizar todo o processo de abertura do seu CNPJ.</p>

        <img class="outsideimg1" src="{{ asset('assets/img/layout/servi2.jpg') }}" alt="Dois homens sentados à mesa, um apontando para a tela do notebook, enquanto o outro escreve em uma caderneta.">
    </div>

    <div class="call2">
      <img class="insideimg2" src="{{ asset('assets/img/layout/servi4.jpg') }}" alt="Dois homens sentados à mesa, olhando para a tela do notebook com duas xícaras de café à mesa.">
      <h3>Pode Confiar!</h3>
      <p>Nós da Castro Contabilidade e Assessoria estamos sempre atualizados e trabalhamos da forma mais transparente possível, com orgulho de ter uma cartela com os clientes mais respeitados da região, desde micro empresas até empresas de grande porte.</p>

      <img class="outsideimg2" src="{{ asset('assets/img/layout/servi1.jpg') }}" alt="Dois homens sentados à mesa, olhando para a tela do notebook com duas xícaras de café à mesa.">
    </div>

    <div class="btn_little">
      <a href="https://api.whatsapp.com/send?phone=5511972467069&text=Oi%2C%20tudo%20bem%3F%20Quero%20abrir%20um%20MEI.">
        <div class="btnn"><p class="p4">ABRIR CNPJ AGORA</p></div>
      </a>
    </div>

  </section>
  
  <section class="cards-father2">
    <div class="arrow2">
      <i class="fa fa-angle-double-down"  aria-hidden="true"></i>
    </div>
    
    <div class="cards2">
      <div class="son-um2">
        <img src="{{ asset('assets/img/icons/icon1.png') }}" alt="Ícone de um monitor com engrenagens">
        <h3>A Melhor Tecnologia para Garantir sua Contabilidade</h3>
        <p>Nós utilizamos a tecnologia a favor da contabilidade para sua empresa. Dessa forma, conseguimos entregar mais praticidade, agilidade e transparência.</p>
      </div>

      <div class="son-dois2">
        <img src="{{ asset('assets/img/icons/icon2.png') }}" alt="Ícone de um relógio com linhas à esquerda, dando impressão de movimento">
        <h3>Ganhe Mais Tempo</h3>
        <p>Agilizamos sempre o serviço porque sabemos que o recurso mais valioso do cliente é o seu tempo.</p>
      </div>

      <div class="son-um2">
        <img src="{{ asset('assets/img/icons/icon3.png') }}" alt="Ícone de uma moeda caindo na palma de uma mão estendida.">
        <h3>Preço Justo e Economia Garantida</h3>
        <p>Temos os melhores Planos com preço justo e sem cobrança surpresa. Você fica tranquilo sabendo que está em boas mãos.</p>
      </div>

      <div class="son-dois2">
        <img src="{{ asset('assets/img/icons/icon4.png') }}" alt="Ícone de duas pessoas conversando com balões acima de suas cabeças.">
        <h3>Excelência no Atendimento</h3>
        <p>Nossos Clientes conhecem e confiam no nosso atendimento, seja por telefone, e-mail ou até pessoalmente sempre que precisam.</p>
      </div>
    </div>

      <div class="arrow2">
      <i class="fa fa-angle-double-down"  aria-hidden="true"></i>
      </div>

  </section>

  <section class="cert_div2">
    <div class="cert_principal2">
      <img src="{{ asset('assets/img/certificados/crcsp.png') }}" alt="CRC-SP">
      <p>Empresa Registrada no Conselho Regional de Contabilidade do Estado de São Paulo.</p>
    </div>

    <div class="img_cert2">
      @foreach($certificados as $c)
        <img src="{{ asset('assets/img/certificados/'.$c->imagem) }}" alt="certificados">
      @endforeach
    </div>
  </section>

  <section class="oportunidade">
    <h2>Aproveite essa Oportunidade Única</h2>
    
    <div class="brown_box">
      <h3>Não perca mais tempo e abra já seu CNPJ sem nenhuma Cobrança!</h3>
      <img class="business" src="{{ asset('assets/img/layout/servi6.jpg')}}" alt="Dois homens de terno à uma pequena mesa redonda. Um aponta para a tela do notebook, enquanto o outro realiza anotações numa agenda.">
      
      <p>Essa é uma oportunidade única que estamos dando apenas para algumas pessoas, por isso essa oportunidade só vai existir enquanto o tempo aí embaixo durar. Aproveite e ainda ganhe a chance de ter nossa assessoria guiando você e sua empresa para o sucesso.</p>
      
      <hr class="white-line">

      <ul>
        <li><i class="fa fa-check" aria-hidden="true"></i> Sem dores de cabeça</li>
        <li><i class="fa fa-check" aria-hidden="true"></i> Apenas profissionais lidando com o mais Importante</li>
        <li><i class="fa fa-check" aria-hidden="true"></i> Você livre para atender os Clientes</li>
      </ul>

      <div class="prt_btn">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
        <div class="botao1">
          <a href="https://api.whatsapp.com/send?phone=5511972467069&text=Oi%2C%20tudo%20bem%3F%20Quero%20abrir%20um%20MEI."><div class="btn_oprt"><span>APROVEITAR AGORA</span></div></a>
        </div>
      </div>
    </div>
  </section>

  <section class="FAQ2">
    <div class="faixafaq2">
      <h5>F.A.Q.</h5>
    </div>
    <div class="allblocos2">
      @foreach ($faq as $f)
        <div class="blocos2">
          <h4>{{ $f->titulo }}</h4>
          <hr>
          <p>{{ $f->paragrafo }}</p>
        </div>
      @endforeach
    </div>
  </section>

  <section class="contatos2">
    <h5>Sobre a Empresa</h5>
    <div class="contatoscards2">
      <div>
        <h6><ion-icon name="pin"></ion-icon> Endereço</h6>
        <p id="end2">{{ str_replace(array("<p>", "</p>"),'', $contato->endereco) }}</p>
      </div>
      <div>
        <h6><ion-icon name="call2"></ion-icon> Contato</h6>
        <p>{{ $contato->telefone }}</p>
        <p>{{ $contato->telefone_2 }}</p>
      </div>
      <div>
        <h6><ion-icon name="mail2"></ion-icon> E-mail</h6>
        <p>{{ $contato->email }}</p>
      </div>
    </div>

    @if($contato->google_maps)
      <div class="mapgoggle2">
          {!! $contato->google_maps !!}
      </div>
    @endif
  </section>

  
</body>


@endsection
