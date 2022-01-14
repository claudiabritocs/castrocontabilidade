@extends('frontend.common.template')

@section('content')

<section class="cont_quemsomos">

    <div class="banner_serv" style="background-image: url({{ asset('assets/img/banners/banner.png')}});">
        <img src="{{ asset('assets/img/layout/biglogo.png') }}" alt="Logo Castro Contabilidade e Assessoria">
        <h2>Quem Somos</h2>
    </div>

    <div class="boxes2">
        <i class="fa fa-chevron-down" aria-hidden="true"></i>
        
        <div class="boxbox2">
            <h3>A Empresa</h3>

            <p><strong>A CASTRO CONTABILIDADE E ASSESSORIA</strong> é um escritório de Contabilidade em Santa Isabel - SP, que presta serviços contábeis, fisco-tributários, de consultoria e recursos humanos, em toda Região. Dispomos de uma excelente e completa infraestrutura de Informática e comunicação ágil com seus clientes.
            </p>
            <br>
            <p>Dois princípios sempre nortearam nossas atividades: primar pelo relacionamento com os clientes e aprimorar constantemente a equipe de trabalho. Mesmo tendo estendido o número de clientes ao longo dos anos, a empresa ainda mantém a relação humanizada, de ouvir com atenção os anseios e necessidades dos clientes, como nos primeiros anos de fundação.
            </p>
        </div>

        <div class="boxbox2">
            <h3>Missão</h3>

            <p>Disponibilizar, com qualidade e honestidade, serviços contábeis e de consultoria empresarial, que proporcionem a satisfação de nossos clientes e o desenvolvimento profissional de nossos funcionários.
            </p>
        </div>

        <div class="boxbox2">
            <h3>Visão</h3>

            <p>Ser um escritório contábil reconhecido em São Paulo por seu serviço diferenciado e personalizado e pela qualidade e credibilidade de seus profissionais.
            </p>
        </div>
        
        <div class="boxbox2">
            <h3>Valores</h3>

            <p>Atuar de forma responsável e transparente, com ética, honestidade, comprometimento e seriedade, respeitando as leis, as pessoas, o meio ambiente e promovendo a formação de novos profissionais.
            </p>
        </div>
    </div>

</section>

<section class="cert_div4">
    <div class="cert_principal4">
        <img src="{{ asset('assets/img/certificados/crcsp.png') }}" alt="CRC-SP">
        <p>Empresa Registrada no Conselho Regional de Contabilidade do Estado de São Paulo.</p>
    </div>

    <div class="img_cert4">
        @foreach($certificados as $c)
        <img src="{{ asset('assets/img/certificados/'.$c->imagem) }}" alt="certificados">
        @endforeach
    </div>
</section>

<section class="contatos4">
    <h5>Sobre a Empresa</h5>
    <div class="contatoscards4">
      <div>
        <h6><ion-icon name="pin"></ion-icon> Endereço</h6>
        <p id="end4">{{ str_replace(array("<p>", "</p>"),'', $contato->endereco) }}</p>
      </div>
      <div>
        <h6><ion-icon name="call4"></ion-icon> Contato</h6>
        <p>{{ $contato->telefone }}</p>
        <p>{{ $contato->telefone_2 }}</p>
      </div>
      <div>
        <h6><ion-icon name="mail4"></ion-icon> E-mail</h6>
        <p>{{ $contato->email }}</p>
      </div>
    </div>

    @if($contato->google_maps)
      <div class="mapgoggle4">
          {!! $contato->google_maps !!}
      </div>
    @endif
</section>

<section class="FAQ4">
    <div class="faixafaq4">
      <h5>F.A.Q.</h5>
    </div>
    <div class="allblocos4">
      @foreach ($faq as $f)
        <div class="blocos4">
          <h4>{{ $f->titulo }}</h4>
          <hr>
          <p>{{ $f->paragrafo }}</p>
        </div>
      @endforeach
    </div>
</section>

<div class="banner_call2" style="background-image: url({{ asset('assets/img/banners/back1.jpg')}});">
    <h2>Fale com a gente Agora!</h2>
    <div class="serv_btn2">
        <div class="botaoserv2">
          <a href="https://api.whatsapp.com/send?phone=5511972467069&text=Oi%2C%20tudo%20bem%3F%20Quero%20falar%20agora.">
                <div class="btn_falar2">
                    <span>
                      <i class="fa fa-whatsapp" aria-hidden="true"></i>
                       APROVEITAR AGORA!
                    </span>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection