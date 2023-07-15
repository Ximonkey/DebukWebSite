@extends('plantilla.app')

@section('titulo')
Inicio
@endsection

@section('inicio')
Una lectura llena de vida
@endsection

@section('main')
<main class="contenedor seccion">
    <h1>Conoce sobre Nosotros</h1>
    <div class="contenido-nosotros mt-5">

        <div class="sketchfab-embed-wrapper">
            <iframe class="modelo" title="Castillo LowPoly" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="480" height="480" src="https://sketchfab.com/models/c9476ad179c94021bd196a6b5536a936/embed?ui_theme=dark">

            </iframe>
        </div>

        <div class="texto-nosotros p-5">

            <blockquote>
                Debúk
            </blockquote>

            <p class="font-weight-light">Una lectura llena de vida</p>
            <p class="text-justify mt-5">Damos vida a tus escritos, historias y textos. Somos una editorial digital, ofrecemos experiencia de realidad aumentada para lectores de todas las edades.</p>
            <p class="text-justify mt-5">Diseñamos modelos 3D, imágenes 2D y targets para la creación de nuestros libros. Nuestra aplicación trabaja con realidad aumentada a la par de tu lectura.</p>
        </div>
    </div>
</main>
@endsection

@section('contenido')
<section class="seccion contenedor">
    <h2>Galeria de Modelos</h2>

    <div class="contenedor-anuncios">
        <div class="anuncio">
            <picture>
                <img loading="lazy" src="/img/circo.jpg" alt="anuncio">
            </picture>

            <div class="contenido-anuncio">
                <h3>El circo de Carlo</h3>
                <p class="m-5 text-center">El lugar favorito de Carlo el conejito mago.</p>

                <a href="anuncio.html" class="boton-amarillo-block" data-bs-toggle="modal" data-bs-target="#anuncio1">
                    Visualizar
                </a>
            </div><!--.contenido-anuncio-->
        </div><!--anuncio-->

        <div class="modal fade" id="anuncio1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="sketchfab-embed-wrapper">
                        <iframe class="modela" title="CIRCO" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="480" height="480" src="https://sketchfab.com/models/91881f167bff460591bc316b8eeabfae/embed?ui_theme=dark"> </iframe>
                    </div>
                </div>
            </div>
        </div><!--modal anuncio-->

        <div class="anuncio">
            <picture>
                <img loading="lazy" src="/img/cohete.jpg" alt="anuncio">
            </picture>

            <div class="contenido-anuncio">
                <h3>Cohete Espacial</h3>
                <p class="m-5 text-center">Súbete baby, vamos por tu estrella favorita.</p>

                <a href="anuncio.html" class="boton-amarillo-block" data-bs-toggle="modal" data-bs-target="#anuncio2">
                    Visualizar
                </a>
            </div><!--.contenido-anuncio-->
        </div><!--anuncio-->

        <div class="modal fade" id="anuncio2">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="sketchfab-embed-wrapper">
                        <iframe class="modela" title="COHETE" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="480" height="480" src="https://sketchfab.com/models/e42539ecdcdf4711bab6a8d0d29410d9/embed?ui_theme=dark"> </iframe>
                    </div>
                </div>
            </div>
        </div><!--modal anuncio-->

        <div class="anuncio">
            <picture>
                <img loading="lazy" src="/img/pizza.jpg" alt="anuncio">
            </picture>

            <div class="contenido-anuncio">
                <h3>Yummy Pizza</h3>
                <p class="m-5 text-center">¿Pizza con piñaaa? Mejor sin pizza.</p>

                <a href="anuncio.html" class="boton-amarillo-block" data-bs-toggle="modal" data-bs-target="#anuncio3">
                    Visualizar
                </a>
            </div><!--.contenido-anuncio-->
        </div><!--anuncio-->
        <div class="modal fade" id="anuncio3">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="sketchfab-embed-wrapper">
                        <iframe class="modela" title="PIZZA" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="480" height="480" src="https://sketchfab.com/models/d559fb06ec3a4508b65cc48153943f9f/embed?ui_theme=dark"> </iframe>
                    </div>
                </div>
            </div>
        </div><!--modal anuncio-->
    </div>
    <div class="alinear-derecha">
        <a href="{{ url('personajes') }}" class="boton-verde">Más Personajes</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>¿Listo para llevar tu aprendizaje a otro nivel?</h2>
    <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad.</p>
    <a href="{{ url('contacto') }}" class="boton-amarillo">Contactános</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestros Libros</h3>

        <article class="entrada-blog m-5">
            <a href="{{ url('galeria') }}">
                <div class="imagen">
                    <picture>
                        <img loading="lazy" src="img/Tornillos.png" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Tornillos y Tuercas</h4>
                        <p>Escrito el: <span>23/02/2023</span> por: <span>Alan Avalos</span> </p>
                        <p class="text-justify">
                        Tornillos y tuercas narra las aventuras de un tímido robot y su querido amigo perruno. Juntos atraviesan distintos desafíos en la tierra después de la extensión de la raza humana.
                        </p>
                    </a>
                </div>
            </a>
        </article>

        <article class="entrada-blog m-5">
            <a href="{{ url('galeria') }}">
                <div class="imagen">
                    <picture>
                        <img loading="lazy" src="img/Bones.png" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Bones</h4>
                        <p>Escrito el: <span>01/10/2023</span> por: <span>Eric Madera</span> </p>
                        <p class="text-justify">
                        Bones es una guía intuitiva que modela el sistema óseo por completo. Además de visualizar los modelos 3D, bones ofrece una experiencia completa a través de los minijuegos en su aplicación móvil.
                        </p>
                    </a>
                </div>
            </a>
        </article>
    </section>

    <section class="testimoniales">
        <h3>Testimoniales</h3>

        <div class="testimonial">
            <blockquote>
                Debuk dejó una gigantesca huella en el aprendizaje de nuestros estudiantes. Están facinados con la realidad aumentada.
            </blockquote>
            <p>- Colegio Nuevo México</p>
        </div>
        <div class="testimonial mt-5">
            <blockquote>
                Debuk tiene una fuerte presencia en el mercado. Son TOP VENTAS en nuestras librerias.
            </blockquote>
            <p>- Librerias Gandhi</p>
        </div>

    </section>
</div>

<style>
    .mb-5 {
        font-size: 48px;
    }

    .btn-default {
        background: #DFC717;
        color: #fff;
        font-weight: 700;
        text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.2);
        font-size: 14px;
    }

    .card {
        box-shadow: 2px 2px 20px rgba(0, 0, 0, 0.3);
        border: 10px solid #fcf5d3;
        margin-bottom: 30px;
    }

    .card-01 .card-body {
        position: relative;
        padding-top: 40px;
    }

    .card-01 .badge-box {
        position: absolute;
        top: -20px;
        left: 50%;
        width: 100px;
        height: 100px;
        margin-left: -50px;
        text-align: center;
    }

    .card-01 .badge-box i {
        background: #DFC717;
        color: #fff;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        font-size: 20px;
    }

    .profile-box {
        background-size: cover;
        float: left;
        width: 100%;
        text-align: center;
        padding: 30px 0;
        position: relative;
        overflow: hidden;
    }

    .profile-box:before {
        background-color: #777777;
        background-image: url("https://images.pexels.com/photos/247599/pexels-photo-247599.jpeg?h=350&auto=compress&cs=tinysrgb");
        width: 100%;
        position: absolute;
        content: "";
        left: -10%;
        top: 0;
        z-index: 0;
    }

    .profile-box img {
        width: 170px;
        height: 170px;
        position: relative;
        border: 5px solid #fff;
    }

    .social-box i {
        border: 1px solid #DFC717;
        color: #DFC717;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        line-height: 30px;
    }

    .social-box i:hover {
        background: #DFC717;
        color: #fff;
    }

    .social-box a {
        margin: 0 5px;
    }

    .card-01 .height-fix .card-img-overlay {
        top: inherit;
        color: #fff;
        background: -moz-linear-gradient(top, #1e5799 0%, #7db9e8 100%);
        /* FF3.6+ */
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #1e5799), color-stop(100%, #7db9e8));
        /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top, #1e5799 0%, #7db9e8 100%);
        /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(top, #1e5799 0%, #7db9e8 100%);
        /* Opera 11.10+ */
        background: -ms-linear-gradient(top, #1e5799 0%, #7db9e8 100%);
        /* IE10+ */
    }

    .card-01 .height-fix .fa {
        color: #fff;
        font-size: 22px;
        margin-right: 18px;
    }

    .card-01 .height-fix .card-img-top {
        width: auto;
        height: 100%;
    }

    /*flipper-card*/
    .card-flipper {
        position: relative;
        float: left;
        width: 100%;
        text-align: center;
        height: 450px;
    }

    .card__front,
    .card__back {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .card__back .card {
        width: 100%;
        height: 450px;
    }

    .card__front,
    .card__back {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transition: 0.3s;
        transition: 0.3s;
    }

    .card__front {
        background-color: #ff5078;
    }

    .card__back {
        background-color: #1e1e1e;
        -webkit-transform: rotateY(-180deg);
        -ms-transform: rotateY(-180deg);
        transform: rotateY(-180deg);
    }

    .card-flipper.effect__hover:hover .card__front {
        -webkit-transform: rotateY(-180deg);
        -ms-transform: rotateY(-180deg);
        transform: rotateY(-180deg);
    }

    .card-flipper.effect__hover:hover .card__back {
        -webkit-transform: rotateY(0);
        -ms-transform: rotateY(0);
        transform: rotateY(0);
    }

    .card-flipper.effect__random.flipped .card__front {
        -webkit-transform: rotateY(-180deg);
        -ms-transform: rotateY(-180deg);
        transform: rotateY(-180deg);
    }

    .card-flipper.effect__random.flipped .card__back {
        -webkit-transform: rotateY(0);
        -ms-transform: rotateY(0);
        transform: rotateY(0);
    }
</style>

<style>
    .conteneur {
        width: 431px;
        margin: auto;
        position: relative;
    }

    .circle {
        background: transparent;
        margin: auto;
        width: 300px;
        height: 300px;
        border: 8px solid #12826c;
        border-radius: 50%;
        position: relative;
        -webkit-animation: animation 12s infinite linear;
        animation: animation 12s infinite linear;
        /*Safari and Chrome*/
    }

    .circle:hover {
        animation-play-state: paused;
        -webkit-animation-play-state: paused;
        /* Safari and Chrome */
    }

    .point_general {
        width: 12px;
        height: 12px;
        position: absolute;
        border-radius: 50%;
        background: #1abc9c;
        border: 6px solid #16a085;
    }

    .point_general:after {
        width: 0px;
        height: 0px;
        position: absolute;
        top: 0px;
        left: 0px;
        content: '';
        background: #1abc9c;
        opacity: 0;
        border-radius: 50%;
        -webkit-transition: all .4s ease;
        transition: all .4s ease;
    }

    .point_general:hover:after {
        opacity: 0.8;
        width: 200px;
        height: 200px;
        top: -94px;
        left: -94px;
    }

    .texte {
        opacity: 0;
        position: absolute;
        text-align: center;
        top: -50px;
        left: -50px;
        width: 110px;
        height: 110px;
        overflow: hidden;
        color: #ecf0f1;
        font-family: 'Roboto', sans-serif;
        z-index: 10;
        -webkit-transition: opacity .2s 0s ease;
        transition: opacity .2s 0s ease;
        -webkit-animation: animation2 12s infinite linear;
        animation: animation2 12s infinite linear;
        /*Safari and Chrome*/
    }

    .point_general:hover .texte {
        opacity: 1;
        -webkit-transition: opacity .4s .4s ease;
        transition: opacity .4s .4s ease;
    }

    .circle:hover .texte {
        animation-play-state: paused;
        -webkit-animation-play-state: paused;
        /* Safari and Chrome */
    }

    .point1 {
        top: 30px;
        left: 30px;
    }

    .point2 {
        top: -16px;
        left: 138px;
    }

    .point3 {
        top: 30px;
        right: 30px;
    }

    .point4 {
        top: 138px;
        right: -16px;
    }

    .point5 {
        bottom: 30px;
        right: 30px;
    }

    .point6 {
        bottom: -16px;
        left: 138px;
    }

    .point7 {
        bottom: 30px;
        left: 30px;
    }

    .point8 {
        top: 138px;
        left: -16px;
    }

    @keyframes animation {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    @-webkit-keyframes animation

    /*Safari and Chrome*/
        {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes animation2 {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(-360deg);
        }
    }

    @-webkit-keyframes animation2

    /*Safari and Chrome*/
        {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(-360deg);
        }
    }
</style>
@endsection