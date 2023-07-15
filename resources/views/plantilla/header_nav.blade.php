<div class="contenedor contenido-header">
    <div class="barra">
        <a href="/">
            <img class="logo" src="/img/logo.png" alt="Logotipo Debuk">
        </a>

        <div class="mobile-menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#064B72" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" alt="icono menu responsive"/>
                <line x1="4" y1="6" x2="20" y2="6" />
                <line x1="4" y1="12" x2="20" y2="12" />
                <line x1="4" y1="18" x2="20" y2="18" />
            </svg>
        </div>

        <div class="derecha">
            <img class="dark-mode-boton" src="/img/dark-mode.svg">
            <nav class="navegacion">
                <a href="{{ url('/nosotros') }}">Nosotros</a>
                <a href="{{ url('/galeria') }}">Libros</a>
                <a href="{{ url('/personaje') }}">Personajes</a>
                <a href="{{ url('/aplicacion') }}">Aplicación</a>
                <a href="{{ url('/contacto') }}">Contacto</a>
            </nav>
        </div>


    </div> <!--.barra-->

    <h1>@yield('inicio')</h1>

</div>