<header class="navbar-fixed">
    <nav class="nav-wrapper navbar-app green">
        <a href="/" class="brand-logo">Support Ticket System</a>
        <ul class="right hide-on-med-and-down">
            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Inicio</a></li>
            <li class="{{ Request::is('acerca') ? 'active' : '' }}"><a href="/acerca">Acerca</a></li>
            <li class="{{ Request::is('contacto') ? 'active' : '' }}"><a href="/contacto">Contacto</a></li>
            <li><a href="#!" class="dropdown-trigger" data-target="dropdown-usuario">Usuario <i class="material-icons right">arrow_drop_down</i></a></li>
            <ul id="dropdown-usuario" class="dropdown-content">
                <li><a href="/usuarios/acceso" class="green-text">Acceder</a></li>
                <li><a href="/usuarios/registro" class="green-text">Registro</a></li>
            </ul>
        </ul>
    </nav>
</header>
