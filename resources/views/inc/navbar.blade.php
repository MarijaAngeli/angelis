<!-- Navigation -->
    <nav class="navbar navbar-default navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="/">Angeli'S</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
              <a class="nav-link" href="/"><span class="fa-stack fa-md">
              <i class="fa fa-square-o fa-stack-2x"></i>
              <i class="fa fa-home fa-stack-1x"></i>
              </span></a>
            </li>
            <li class="nav-item {{Request::is('about') ? 'active' : ''}}">
              <a class="nav-link" href="/about">O Nama</a>
            </li>
            <li class="nav-item {{Request::is('services') ? 'active' : ''}}">
              <a class="nav-link" href="/services">Usluge</a>
            </li>
            <li class="nav-item {{Request::is('prices') ? 'active' : ''}}">
              <a class="nav-link" href="/prices">Cenovnik</a>
            </li>
            <li class="nav-item {{Request::is('contact') ? 'active' : ''}}">
              <a class="nav-link" href="/contact">Kontakt</a>
            </li>
            <li class="nav-item {{Request::is('blog') ? 'active' : ''}}">
              <a class="nav-link" href="/blog">Blog</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>