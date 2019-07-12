<!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-5">
    <a href="" class="brand-link bg-secondary text-center">
      <img src="{{asset('public/adminlte/img/logo.png')}}" alt="AppSyS" class="brand-image Anime">
      <span class="brand-text font-weight-light text-center">AppSyS</span>
    </a>
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('public/adminlte/img/uploads/'.Auth::user()->photo)}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">{{ Auth::user()->name }}<br/><small>{{ Auth::user()->perm }}</small></a>
        </div>
      </div>
<!-- NAV Sidebar -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{route('admin')}}" class="nav-link">
              <i class="nav-icon fas fa-home cor2"></i>
              <p>Principal</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('agenda')}}" class="nav-link">
              <i class="nav-icon fas fa-book cor3"></i>
              <p>Agenda</p>
            </a>
          </li>
          @if(Auth::user()->perm == 'Admin' || Auth::user()->perm == 'Gerente')
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs cor4"></i>
              <p>Administrativo <i class="right fa fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview Sub">
              @if(Auth::user()->perm == 'Admin')
              <li class="nav-item">
                <a href="{{route('usuarios')}}" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Usuários</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('logs')}}" class="nav-link">
                  <i class="fab fa-buffer nav-icon"></i>
                  <p>Logs</p>
                </a>
              </li>
              @endif
              <li class="nav-item">
                <a href="{{route('config')}}" class="nav-link">
                  <i class="fas fa-cog nav-icon"></i>
                  <p>Configurações</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          <li class="nav-item">
            <a href="{{route('faq')}}" class="nav-link">
              <i class="fas fa-comment nav-icon cor5"></i>
              <p>Faqs e Avisos</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-power-off red"></i>
                <p>Sair</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
      </nav>
    </div>
    <div class="assinatura">
      <a href="http://www.sandroweb.com.br" target="_blank">
        <img src="{{asset('public/adminlte/img/Assinatura.fw.png')}}" alt="Assinatura" class="">
      </a>
    </div>
  </aside>
  