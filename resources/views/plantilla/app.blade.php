<!DOCTYPE html>
<html lang="es">

<head>
    @include('plantilla.head')
    <title>@yield('titulo')</title>
</head>

<body>

    <header class="header inicio">
        @include('plantilla.header_nav')
    </header>

    @yield('main')

    @yield('contenido')

    <footer class="footer seccion">

        @include('plantilla.footer')

    </footer>

    <script src="{{ asset('js/bundle.min.js') }}"></script>

    @yield('script')
    

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>



</html>