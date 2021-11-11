<!-- DASHBOARD MENU -->
<header>
    <div class="logo">
        <a href="#">
            <figure>
                <img src="{{asset('assets/admin/images/logoGrupo.png')}}" alt="Logo grupo Gracom">
            </figure>
        </a>
    </div>
    <nav class="suave">
        <ul>
            <li>
                <a href="{{route('reset')}}" class="suave">Alterar Senha</a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Sair') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                 </form>
            </li>
        </ul>
    </nav>
    <div class="perfil">
        <div class="infos">
            <h6 class="barlow">
                {{ Auth::user()->name }}
                <span>
                </span>
            </h6>
        </div>
    </div>
    <div class="clear"></div>
</header>
<!-- /DASHBOARD MENU -->