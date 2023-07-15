@extends('plantilla.app')

@section('titulo')
Contacto
@endsection

@section('main')
<main id="conseguir" class="container mt-5">
    <h2>¿Dónde lo consigo?</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 p-5">
                <div class="card one">
                    <div class="content">
                        <h2 class="title">Acude a tu librería</h2>
                        <p class="copy">Da click para ver la lista de librerías participantes.</p>
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#modal-imagen">Consultar</button>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 p-5">
                <div class="card two">
                    <div class="content">
                        <h2 class="title">Encuentra tu código</h2>
                        <p class="copy">Tu libro tiene un código único. ¡No lo compartas! Es el acceso a tu libro.</p>
                        <button class="btn">Ver Tutorial</button>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 p-5">
                <div class="card three">
                    <div class="content">
                        <h2 class="title">¡Comienza a leer!</h2>
                        <p class="copy">Introduce el código en nuestra app y accede a todo el contenido digital exclusivo.</p>
                        <button class="btn"><a href="/aplicacion">Descarga la App</a></button>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modal-imagen">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class=" modo">
                    <a class="ico gonvil" target="_blank" href="https://www.gonvill.com.mx"><span>Gonvill</span></a>
                    <a class="ico gandhi" target="_blank" href="https://www.gandhi.com.mx"><span>Gandhi</span></a>
                    <a class="ico carlos" target="_blank" href="https://www.libreriacarlosfuentes.mx/es"><span>Carlos Fuentes</span></a>
                    <a class="ico amazon" target="_blank" href="#"><span>Amazon</span></a>
                    <a class="ico mercado" target="_blank" href="https://articulo.mercadolibre.com.mx/MLM-1862471517-libro-con-realidad-aumentada-_JM"><span>Mercado Libre</span></a>
                </div>
            </div>
        </div>
    </div>
</main>



<style>
    :root {
        --d: 700ms;
        --e: cubic-bezier(0.19, 1, 0.22, 1);
    }


    .card {
        position: relative;
        display: flex;
        align-items: flex-end;
        overflow: hidden;
        padding: 1rem;
        width: 100%;
        text-align: center;
        color: whitesmoke;
        background-color: whitesmoke;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1), 0 2px 2px rgba(0, 0, 0, 0.1), 0 4px 4px rgba(0, 0, 0, 0.1), 0 8px 8px rgba(0, 0, 0, 0.1), 0 16px 16px rgba(0, 0, 0, 0.1);
    }

    @media (min-width: 600px) {
        .card {
            height: 350px;
        }
    }

    .card:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 110%;
        background-size: cover;
        background-position: 0 0;
        transition: transform calc(var(--d) * 1.5) var(--e);
        pointer-events: none;
    }

    .card:after {
        content: '';
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 200%;
        pointer-events: none;
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.009) 11.7%, rgba(0, 0, 0, 0.034) 22.1%, rgba(0, 0, 0, 0.072) 31.2%, rgba(0, 0, 0, 0.123) 39.4%, rgba(0, 0, 0, 0.182) 46.6%, rgba(0, 0, 0, 0.249) 53.1%, rgba(0, 0, 0, 0.320) 58.9%, rgba(0, 0, 0, 0.394) 64.3%, rgba(0, 0, 0, 0.468) 69.3%, rgba(0, 0, 0, 0.540) 74.1%, rgba(0, 0, 0, 0.607) 78.8%, rgba(0, 0, 0, 0.668) 83.6%, rgba(0, 0, 0, 0.721) 88.7%, rgba(0, 0, 0, 0.762) 94.1%, rgba(0, 0, 0, 0.790) 100%);
        transform: translateY(-50%);
        transition: transform calc(var(--d) * 2) var(--e);
    }

    .one {
        background-image: url(/img/libreria.jpeg);
        background-repeat: no-repeat;
        background-size: cover;
    }

    .two {
        background-image: url(/img/qr.jpeg);
        background-repeat: no-repeat;
        background-size: cover;
    }

    .three {
        background-image: url(/img/libro2.jpeg);
        background-repeat: no-repeat;
        background-size: cover;
    }

    .content {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        padding: 1rem;
        transition: transform var(--d) var(--e);
        z-index: 1;
    }

    .content>*+* {
        margin-top: 1rem;
    }

    .title {
        font-size: 2rem;
        font-weight: bold;
        text-shadow: 1px 1px 1px black, 2px 2px 1px black;
        line-height: 0.5;
    }

    .copy {
        font-size: 1.7rem;
        font-style: bold;
        line-height: 1.35;
    }

    .btn {
        cursor: pointer;
        margin-top: 1.5rem;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        font-weight: bold;
        letter-spacing: 0.025rem;
        text-transform: uppercase;
        color: white;
        background-color: black;
        border: none;
    }

    .btn:hover {
        background-color: #0d0d0d;
    }

    .btn:focus {
        outline: 1px dashed yellow;
        outline-offset: 3px;
    }

    @media (hover: hover) and (min-width: 600px) {
        .card:after {
            transform: translateY(0);
        }

        .content {
            transform: translateY(calc(100% - 4.5rem));
        }

        .content>*:not(.title) {
            opacity: 0;
            transform: translateY(1rem);
            transition: transform var(--d) var(--e), opacity var(--d) var(--e);
        }

        .card:hover,
        .card:focus-within {
            align-items: center;
        }

        .card:hover:before,
        .card:focus-within:before {
            transform: translateY(-4%);
        }

        .card:hover:after,
        .card:focus-within:after {
            transform: translateY(-50%);
        }

        .card:hover .content,
        .card:focus-within .content {
            transform: translateY(0);
        }

        .card:hover .content>*:not(.title),
        .card:focus-within .content>*:not(.title) {
            opacity: 1;
            transform: translateY(0);
            transition-delay: calc(var(--d) / 8);
        }

        .card:focus-within:before,
        .card:focus-within:after,
        .card:focus-within .content,
        .card:focus-within .content>*:not(.title) {
            transition-duration: 0s;
        }

        .modo {
            display: inline-block;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        /* Icons */

        .ico {
            color: #fff;
            background: #DB6E82;
            border-radius: 4px;
            text-align: center;
            text-decoration: none;
            font-family: fontawesome;
            position: relative;
            display: inline-block;
            width: 40px;
            height: 28px;
            padding-top: 12px;
            margin: 0 2px;
            -o-transition: all .5s;
            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            transition: all .5s;
            -webkit-font-smoothing: antialiased;
        }

        .ico:hover {
            background: #ef92a3;
        }

        /* pop-up text */

        .ico span {
            color: #666;
            position: absolute;
            font-family: sans-serif;
            bottom: 0;
            left: -25px;
            right: -25px;
            padding: 5px 7px;
            z-index: -1;
            font-size: 14px;
            border-radius: 2px;
            background: #fff;
            visibility: hidden;
            opacity: 0;
            -o-transition: all .5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -webkit-transition: all .5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -moz-transition: all .5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            transition: all .5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        /* pop-up text arrow */

        .ico span:before {
            content: '';
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid #fff;
            position: absolute;
            bottom: -5px;
            left: 40px;
        }

        /* text pops up when icon is in hover state */

        .ico:hover span {
            bottom: 50px;
            visibility: visible;
            opacity: 1;
        }

        /* font awesome icons */

        .gonvil {
            background-image: url(/img/gonvil.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .gandhi {
            background-image: url(/img/gandhi.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .carlos {
            background-image: url(/img/carlos.png);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .amazon {
            background-image: url(/img/amazon.png);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .mercado {
            background-image: url(/img/mercadolibre.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

    }
</style>

@endsection

@section('contenido')
<section class="contenedor seccion">
    <h1>Contacto</h1>

    <h2>Llene el formulario de Contacto</h2>

    <form class="formulario" action="/contacts" method="POST">
        @csrf
        <fieldset>
            <legend>Información Personal</legend>

            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Tu Nombre" name="name" id="nombre">

            <label for="email">E-mail</label>
            <input type="email" placeholder="Tu Email" name="mail" id="email">

            <label for="telefono">Teléfono</label>
            <input type="tel" placeholder="Tu Teléfono" name="tel" id="telefono">

            <label for="mensaje">Mensaje:</label>
            <textarea name="text" id="mensaje"></textarea>
        </fieldset>
        <input type="submit" value="Enviar" class="boton-verde">
    </form>
</section>

@endsection

@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif