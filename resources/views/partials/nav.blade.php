<!-- Start menu section -->
<section id="menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
          <a class="navbar-brand logo" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="logo"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
            <li class="active"><a href="{{ url('/') }}">Principal</a></li>
            <li><a href="{{ url('/#about') }}">Sobre</a></li>
  
            <!-- Dropdown for Serviços -->
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Soluções<span class="caret"></span></a>
              <ul class="dropdown-menu">                
                <li><a href="{{ url('/services/websites') }}">Websites</a></li>
                <li><a href="{{ url('/services/loja-virtual') }}">Loja Virtual</a></li>
                <li><a href="{{ url('/services/midias-sociais') }}">Midias Sociais</a></li>
                <li><a href="{{ url('/services/criacao-grafica') }}">Criação Gráfica</a></li>
              </ul>
            </li>  
            <li><a href="{{ url('/#portfolio')}}">Portfolio</a></li>
            <li><a href="{{ url('/#pricing-table')}}">Investimento</a></li>
            <li><a href="{{ url('/#contact')}}">Contato</a></li>
          </ul>
        </div>
        <!--/.nav-collapse -->
        <div class="search-area">
          <form action="">
            <input id="search" name="search" type="text" placeholder="O que você procura?">
            <input id="search_submit" value="Rechercher" type="submit">
          </form>
        </div>
      </div>
    </nav>
  </section>
  <!-- End menu section -->
  