      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <ul class="navbar-nav">
          <li class="LogoMobi">
            <img src="{{asset('public/adminlte/img/logo.png')}}" alt="AppSyS" class="logo-image Anime">
          </li>
          <li class="nav-item">
            <a class="nav-link BaR" data-widget="pushmenu" href="#" data-tooltip="tooltip" data-placement="right" title="Menu">
              <i class="fa fa-bars Anime"></i>
            </a>
          </li>
        </ul>
        <div class="input-group input-group-sm Pesqs">
        </div>
        <ul class="navbar-nav TT">
          <li class="nav-item">
            <a href="{{route('dados')}}" class="nav-link BaR1" data-tooltip="tooltip" data-placement="left" title="Meus Dados">
              <i class="fa fa-user Anime"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link BaR1" data-widget="control-sidebar" data-slide="true" href="#" data-tooltip="tooltip" data-placement="left" title="Perguntas e Respostas">
              <i class="fa fa-comments Anime"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link BaR1" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-tooltip="tooltip" data-placement="bottom" title="Sair">
                <i class="nav-icon fas fa-power-off red Anime"></i>
            </a>
            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </nav>
<!-- /.navbar -->
