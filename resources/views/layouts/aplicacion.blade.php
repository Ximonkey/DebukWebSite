@extends('plantilla.app')

@section('titulo')
Aplicación
@endsection

@section('main')

<main class="contenedor seccion">
    <h1>Descarga nuestra Aplicación</h1>
    <div class="texto-nosotros">
        <p>En este apartado podrás encontrar las diferentes versiones de nuestra aplicación desde la version de cuentos hasta los textos cientificos. </p>
    </div>
    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="img/aplicacion.jpg" type="image/webp">
                <source srcset="img/aplicacion.jpg" type="image/jpeg">
                <img loading="lazy" src="img/aplicacion.jpg" alt="Sobre Nosotros">
            </picture>
        </div>

        <div class="texto-nosotros">
            <a href="anuncio.html" class="boton-rojo-block">
                Versión 1.0
            </a>
            <a href="anuncio.html" class="boton-crema-block">
                Versión 1.1
            </a>
            <a href="anuncio.html" class="boton-aqua-block">
                Versión 1.2
            </a>
            <a href="anuncio.html" class="boton-naranja-block">
                Versión 2
            </a>
        </div>
    </div>
</main>

@endsection

@section('contenido')

@endsection