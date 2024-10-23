@extends('layouts.app')

@section('title', 'Novaz - Criação de Logotipos, Websites e Publicidade na Internet - Curitiba 55+ 48 9 8828-8309')

@section('header')
 <!-- Start header section -->
 <header id="header">
    <div class="header-inner">
        <!-- Header image -->
        <img src="{{  asset('images/header-bg.jpg') }}" alt="img" />
        <div class="header-overlay">
            <div class="header-content">
                <!-- Start header content slider -->
                <h2 class="header-slide">
                    TENHA    
                    <span>WEBSITES</span>
                    <span>LOJAS VIRTUAIS</span>
                    <span>BLOGS</span>                    
                     NA INTERNET</h2>
                <!-- End header content slider -->
                <!-- Header btn area -->
                <div class="header-btn-area">
                    <a class="knowmore-btn" href="#about">Saiba Mais</a>
                    <a class="download-btn" href="#contact">Solicite Orçamento</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header section -->
@endsection

@section('content')


<!-- Hero Section -->
<section class="bg-primary text-white text-center py-5">
    <div class="container">
      <h1>Transforme Seu Negócio com um Website Profissional</h1>
      <p class="lead">Na NOVAZ, criamos websites que combinam design, funcionalidade e performance para destacar sua marca online.</p>
      <a href="#contato" class="btn btn-light btn-lg">Solicite um Orçamento</a>
    </div>
  </section>

  <!-- Serviços Section -->
  <section id="servicos" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Nossos Serviços</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Sites Institucionais</h5>
              <p class="card-text">Criação de sites institucionais para empresas que buscam uma presença online forte e profissional.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Lojas Virtuais</h5>
              <p class="card-text">Desenvolvimento completo de e-commerces integrados com métodos de pagamento e design moderno.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Portfólios Online</h5>
              <p class="card-text">Ideal para profissionais que desejam apresentar seus trabalhos de maneira criativa e impactante.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Processo Section -->
  <section id="processo" class="bg-light py-5">
    <div class="container">
      <h2 class="text-center mb-4">Nosso Processo</h2>
      <div class="row">
        <div class="col-md-3">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Briefing</h5>
              <p class="card-text">Entendemos suas necessidades e objetivos para criar um site alinhado com sua visão.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Planejamento</h5>
              <p class="card-text">Desenvolvemos o layout e as funcionalidades para garantir uma experiência única.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Desenvolvimento</h5>
              <p class="card-text">Nossos programadores trazem o design à vida com tecnologia de ponta.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Lançamento e Suporte</h5>
              <p class="card-text">Após o lançamento, oferecemos suporte contínuo para garantir o sucesso do site.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Vantagens Section -->
  <section id="vantagens" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Vantagens de Ter um Website Profissional</h2>
      <div class="row">
        <div class="col-md-6">
          <h5>Credibilidade</h5>
          <p>Um site bem desenvolvido transmite confiança para seus clientes, consolidando sua marca no mercado.</p>
        </div>
        <div class="col-md-6">
          <h5>Acessibilidade 24/7</h5>
          <p>Com um site, sua empresa estará disponível para todos, a qualquer hora do dia, aumentando suas chances de novos negócios.</p>
        </div>
        <div class="col-md-6">
          <h5>Expansão de Alcance</h5>
          <p>Um site pode ampliar significativamente seu público, atraindo novos clientes em diferentes regiões.</p>
        </div>
        <div class="col-md-6">
          <h5>Personalização</h5>
          <p>Um design sob medida permite que seu site reflita fielmente a identidade única do seu negócio.</p>
        </div>
      </div>
    </div>
  </section>

 
  <!-- FAQ Section -->
  <section id="faq" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Perguntas Frequentes</h2>
      <div class="accordion" id="faqAccordion">
        <div class="accordion-item">
          <h2 class="accordion-header" id="faqOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Quanto tempo leva para criar um website?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="faqOne" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              O tempo de criação varia conforme a complexidade do projeto. Em média, um site institucional simples leva cerca de 3 a 4 semanas para ser desenvolvido.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- Start Portfolio section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio-area">
                        <div class="title-area">
                            <h2 class="tittle">Portfolio</h2>
                            <span class="tittle-line"></span>
                            <p>Abaixo você vai encontrar nossos ultimos trabalhos</p>
                        </div>
                        <!-- Portfolio content -->
                        <div class="portfolio-content">
                            <!-- portfolio menu -->
                            <div class="portfolio-menu">
                                <ul>
                                    <li class="filter" data-filter="all">All</li>
                                    <li class="filter" data-filter=".branding">Logotipos</li>
                                    <li class="filter" data-filter=".websites">Websites</li>
                                    <li class="filter" data-filter=".publicidade_na_internet">Publicidade na Internet</li>
                                    <li class="filter" data-filter=".outros">Outros</li>
                                </ul>
                            </div>

                            <div id="mixit-container" class="portfolio-container">
                                <div class="single-portfolio mix branding">
                                    <div class="single-item">
                                        <img src="{{ asset('images/portfolio/logos/oticaredivo-small.jpg') }}" alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                                <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('/images/portfolio/logos/oticaredivo-big.jpg') }}"><i class="fa fa-eye"></i></a>
                                                <a class="link-btn" href="{{ asset('images/portfolio/logos/oticaredivo.pdf') }}" target="_blank"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Criação de Logotipo</h4>
                                                <span>Ótica Redivo - Criciúma-SC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-portfolio mix branding">
                                    <div class="single-item">
                                        <img src="{{ asset('images/portfolio/logos/inkjet-small.jpg') }}" alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                                <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('images/portfolio/logos/inkjet-big.jpg') }}"><i class="fa fa-eye"></i></a>
                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Criação de Logotipo</h4>
                                                <span>Inkjet - Itajaí-SC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-portfolio mix branding">
                                    <div class="single-item">
                                        <img src="{{ asset('images/portfolio/logos/cofee_and_beer-small.jpg') }}" alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                                <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('images/portfolio/logos/coffee_and_beer-big.jpg') }}"><i class="fa fa-eye"></i></a>

                                                <a class="link-btn" href="{{ asset('images/portfolio/logos/cofeeandbeer.pdf') }}" target="_blank"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Criação de Logotipo</h4>
                                                <span>Coffee & Beer - Criciúma-SC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-portfolio mix branding">
                                    <div class="single-item">
                                        <img src="{{ asset('images/portfolio/logos/cristiano_de_sa_small.jpg') }}" alt="img">
                                        <div class="single-item-content">
                                            <d   iv class="portfolio-social-icon">
                                                <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('images/portfolio/logos/cristiano_de_sa_big.jpg') }}"><i class="fa fa-eye"></i></a>

                                                <a class="link-btn" href="{{ asset('images/portfolio/logos/cristianodesa.pdf') }}" target="_blank"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Criação de Logotipo</h4>
                                                <span>Cristiano de Sá - Criciúma-SC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-portfolio mix branding">
                                    <div class="single-item">
                                        <img src="{{ asset('images/portfolio/logos/o_catarina-small.jpg') }}" alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                                <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('images/portfolio/logos/o_catarina-big.jpg') }}"><i class="fa fa-eye"></i></a>

                                                <a class="link-btn" href="{{ asset('images/portfolio/logos/ocatarina.pdf') }}" target="_blank"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Criação de Logotipo</h4>
                                                <span>O Catarina Florianópolis-SC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-portfolio mix branding">
                                    <div class="single-item">
                                        <img src="{{ asset('images/portfolio/logos/mao_amiga-small.jpg') }}" alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                                <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('images/portfolio/logos/mao_amiga-big.jpg') }}"><i class="fa fa-eye"></i></a>

                                                <a class="link-btn" href="{{ asset('images/portfolio/logos/maoamiga.pdf') }}" target="_blank"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Criação de Logotipo</h4>
                                                <span>Mão Amiga - Laguna-SC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-portfolio mix websites">
                                    <div class="single-item">
                                        <img src="{{ asset('images/portfolio/website/chico_pizzas-small.jpg') }} " alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                                <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('images/portfolio/website/chico_pizzas-big.jpg') }}"><i class="fa fa-eye"></i></a>

                                                <a class="link-btn" href="http://www.novaz.com.br/demo/chico_pizzas/" target="_blank"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Criação de Website</h4>
                                                <span>Chico Pizzas - Criciúma-SC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-portfolio mix websites">
                                    <div class="single-item">
                                        <img src="{{ asset('images/portfolio/website/cupcakes-small.jpg') }}" alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                                <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('images/portfolio/website/cupcakes-big.jpg') }}"><i class="fa fa-eye"></i></a>

                                                <a class="link-btn" href="http://www.novaz.com.br/demo/cupcakesdapaula/" target="_blank"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Criação de Website</h4>
                                                <span>Cupcakes da Paula - Florianópolis-SC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-portfolio mix websites">
                                    <div class="single-item">
                                        <img src="{{ asset('images/portfolio/website/hotel-zata-small.jpg') }}" alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                                <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('images/portfolio/website/hotel-zata-big.jpg') }}"><i class="fa fa-eye"></i></a>

                                                <a class="link-btn" href="http://www.novaz.com.br/demo/hotel_zata/" target="_blank"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Criação de Website</h4>
                                                <span>Hotel Zata - Criciúma-SC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-portfolio mix publicidade_na_internet">
                                    <div class="single-item">
                                        <img src="{{ asset('images/portfolio/publicidade_na_internet/hgsolucoes-small.jpg') }}" alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                                <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('images/portfolio/publicidade_na_internet/hgsolucoes-big.jpg') }}"><i class="fa fa-eye"></i></a>

                                                <a class="link-btn" href="https://www.facebook.com/HG-Solu%C3%A7%C3%B5es-Financeiras-961318787280334/" target="_blank"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Publicidade na Internet</h4>
                                                <span>HG Soluções Financeiras</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-portfolio mix outros">
                                    <div class="single-item">
                                        <img src="{{ asset('images/portfolio/manipulacao_de_imagens/bentoloveemaxwell-small.jpg') }}" alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                                <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('images/portfolio/manipulacao_de_imagens/bentoloveemaxwell-big.jpg') }}"><i class="fa fa-eye"></i></a>

                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Manipulação de Imagem</h4>
                                                <span>Bento Love And Maxwell</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-portfolio mix outros">
                                    <div class="single-item">
                                        <img src="{{ asset('images/portfolio/manipulacao_de_imagens/pense-sempre-small.jpg') }}" alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                                <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('images/portfolio/manipulacao_de_imagens/pense_sempre-big.jpg') }}"><i class="fa fa-eye"></i></a>

                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Manipulação de Imagem</h4>
                                                <span>Pense Sempre - Florianópolis</span>
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
    </section>
    <!-- End Portfolio section -->


    <section id="testimonial">
        <img src=" {{ asset('images/testimonial-bg.jpg') }}" alt="img">
        <div class="counter-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial-area">
                            <div class="title-area">
                                <h2 class="tittle">O que as pessoas dizem sobre a Novaz?</h2>
                                <span class="tittle-line"></span>
                            </div>
                            <div class="testimonial-conten">
                                <!-- Start testimonial slider -->
                                <div class="testimonial-slider">
                                    <!-- single slide -->
                                    <div class="single-slide">
                                        <p>Utilizo o Logotipo que a Novaz criou para apresentar meus trabalhos no Facebook. Faço cupcakes personalizados e ter uma marca me ajudou a sair da informalidade.</p>
                                        <div class="single-testimonial">
                                            <img class="testimonial-thumb" src="{{ asset('images/testemunhos/paula_moretti.png') }}" alt="img">
                                            <p>Paula Moretti</p>
                                            <span>Cupcakes da Paula</span>
                                        </div>
                                    </div>
                                    <!-- single slide -->
                                    <div class="single-slide">
                                        <p>Contratei em 2012 o serviço de Website da Novaz e mudou meu negócio. Hoje 70% dos meus clientes vem do meu website, Recomendo.</p>
                                        <div class="single-testimonial">
                                            <img class="testimonial-thumb" src="{{ asset('images/testemunhos/ivonei_s_cescon.png') }}" alt="img">
                                            <p>Ivonei S. Cescon</p>
                                            <span>WD Wall Divisórias</span>
                                        </div>
                                    </div>
                                    <!-- single slide -->
                                    <div class="single-slide">
                                        <p>A Novaz desenvolveu o Manual da Marca que irei utilizar na minha ótica. fiquei satisfeito com a qualidade do trabalho.</p>
                                        <div class="single-testimonial">
                                            <img class="testimonial-thumb" src="{{ asset('images/testemunhos/lucas_redivo.png') }}" alt="img">
                                            <p>Lucas Redivo</p>
                                            <span>Ótica Redivo</span>
                                        </div>
                                    </div>
                                    <!-- single slide -->
                                    <div class="single-slide">
                                        <p>Através do Website pude ter mais informações de onde os meus clientes vinham e qual o perfil deles. ajudou muito na tomada de decisões da minha empresa.</p>
                                        <div class="single-testimonial">
                                            <img class="testimonial-thumb" src="{{ asset('images/testemunhos/fabiano_winiarski.png') }}" alt="img">
                                            <p>Fabiano Winiarski</p>
                                            <span>Performance Academia</span>
                                        </div>
                                    </div>
                                    <!-- single slide -->
                                    <div class="single-slide">
                                        <p>Fiquei impressionado com a agilidade do atendimento, atualizaram meu website antigo e obtive retorno de clientes que elogiaram o site.</p>
                                        <div class="single-testimonial">
                                            <img class="testimonial-thumb" src="{{ asset('images/testemunhos/carlos_dropfish.png') }}" alt="img">
                                            <p>Carlos</p>
                                            <span>DropFish</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial section -->


    <section id="client">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area">
                        <h2 class="tittle">Clientes</h2>
                    </div>
                    <div class="client-area">
                        <ul class="client-table">
                            <li><img src="{{ asset('images/clientes/cupcakes-da-paula.png') }}" alt="Cupcakes da Paula"></li>
                            <li><img src="{{ asset('images/clientes/wd_wall_divisorias.png') }}" alt="WD Wall Divisórias"></li>
                            <li><img src="{{ asset('images/clientes/otica_redivo.png') }}" alt="Òtica Redivo"></li>
                            <li><img src="{{ asset('images/clientes/hg_solucoes_financeiras2.png') }}" alt="HG Soluções Financeiras"></li>
                            <li><img src="{{ asset('images/clientes/coffee_and_beer.png') }}" alt="Coffee & Beer"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Contact section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="contact-left wow fadeInLeft">
                        <h2>Contato</h2>
                        <address class="single-address">
                            <h4>Endereço:</h4>
                            <p>R. Adelina Buffara Nasser 100 - CIC , Curitiba - Paraná</p>
                        </address>
                        <address class="single-address">
                            <h4>Telefone</h4>
                            <p>Whatsapp: <a href="https://wa.me/5548988288309?text=Gostaria%20de%20avaliar%20minha%20presen%C3%A7a%20online%20e%20gerar%20mais%20visibilidade%20a%20minha%20empresa">55+ 48 9 9.88288309</a></p>
                        </address>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="contact-right wow fadeInRight">
                        <h2>Envie uma mensagem</h2>
                        <form action="controllers/envia_contato.php" class="contact-form" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nome" name="nomecompleto" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Telefone" name="telefone">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Mensagem" name="mensagem"></textarea>
                            </div>
                            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" />
                            <button type="submit" data-text="Enviar" class="button button-default"><span>Enviar</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection