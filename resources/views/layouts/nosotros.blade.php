@extends('plantilla.app')

@section('titulo')
Nosotros
@endsection

@section('main')
<main class="contenedor seccion">
    <h1>Conoce sobre Nosotros</h1>
    <div class="contenido-nosotros mt-5">

        <div class="sketchfab-embed-wrapper">
            <iframe class="modelo" title="ROBER_BOT" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="480" height="480" src="https://sketchfab.com/models/4cbc90b63b7b4cadbf265315a2a44469/embed?ui_theme=dark">
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
<div class="container mt-5">
    <h2>Más Sobre Nosotros</h2>
    <div class="card-container">
        <div class="card">
            <div class="card-count-container">
                <div class="card-count">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-submarine" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" alt="Icono creatividad" loading="lazy" />
                        <path d="M3 11v6h2l1 -1.5l3 1.5h10a3 3 0 0 0 0 -6h-10h0l-3 1.5l-1 -1.5h-2z" />
                        <path d="M17 11l-1 -3h-5l-1 3" />
                        <path d="M13 8v-2a1 1 0 0 1 1 -1h1" />
                    </svg>
                </div>
            </div>
            <div class="card-content">
                <h2 class="text-dark">Creatividad</h2>
                Diseñamos modelos e imágenes personalizadas para los textos, escritos e infinidad de historias plasmados en libros.
            </div>
            <div class="card-footer">
                De la imaginación a la realidad
            </div>
        </div>
        <div class="card">
            <div class="card-count-container">
                <div class="card-count">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-adjustments-horizontal" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" alt="Icono equipo" loading="lazy" />
                        <circle cx="14" cy="6" r="2" />
                        <line x1="4" y1="6" x2="12" y2="6" />
                        <line x1="16" y1="6" x2="20" y2="6" />
                        <circle cx="8" cy="12" r="2" />
                        <line x1="4" y1="12" x2="6" y2="12" />
                        <line x1="10" y1="12" x2="20" y2="12" />
                        <circle cx="17" cy="18" r="2" />
                        <line x1="4" y1="18" x2="15" y2="18" />
                        <line x1="19" y1="18" x2="20" y2="18" />
                    </svg>
                </div>
            </div>
            <div class="card-content">
                <h2 class="text-dark">Trabajo de Equipo</h2>
                Nuestro equipo de trabajo está conformado por personal capacitado, eficaz y creativo.
            </div>
            <div class="card-footer">
                Atentos a los diseños hechos realidad
            </div>
        </div>
        <div class="card">
            <div class="card-count-container">
                <div class="card-count">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-wand" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" alt="Icono innovacion" loading="lazy" />
                        <polyline points="6 21 21 6 18 3 3 18 6 21" />
                        <line x1="15" y1="6" x2="18" y2="9" />
                        <path d="M9 3a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2" />
                        <path d="M19 13a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2" />
                    </svg>
                </div>
            </div>
            <div class="card-content">
                <h2 class="text-dark">Innovación</h2>
                Damos un toque interactivo a los textos complejos de entender facilitando su comprensión.
            </div>
            <div class="card-footer">
                Contenido Visual
            </div>
        </div>
    </div>
</div>

<style>
    .card-container {
        display: flex;
    }

    .card-container .card {
        margin: 20px;
        border-radius: 10px;
        background-color: #fff;
        overflow: hidden;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.4);
    }

    .card-container .card .card-count-container {
        display: flex;
        align-items: center;
        width: 100%;
        height: 200px;
        padding: 20px 0px;
    }

    .card-container .card .card-count {
        font-weight: bold;
        font-size: 100px;
        width: 150px;
        height: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin: auto;
        margin-right: -50px;
        padding-right: 25px;
        overflow: hidden;
        color: #fff;
        box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.5);
        text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
        transition: all 0.2s ease-in-out;
    }

    .card-container .card .card-content {
        padding: 20px;
        padding-top: 0px;
    }

    .card-container .card .card-content>h2 {
        margin-top: 0px;
        text-align: center;
    }

    .card-container .card .card-footer {
        padding: 20px;
        color: #fff;
    }

    .card-container .card:nth-child(1) .card-count,
    .card-container .card:nth-child(1) .card-footer {
        background-image: linear-gradient(90deg, #f6671f, #c01b1c);
    }

    .card-container .card:nth-child(2) .card-count,
    .card-container .card:nth-child(2) .card-footer {
        background-image: linear-gradient(90deg, #fec22f, #ea9826);
    }

    .card-container .card:nth-child(3) .card-count,
    .card-container .card:nth-child(3) .card-footer {
        background-image: linear-gradient(90deg, #6fc6a9, #058ba9);
    }

    .card-container .card:hover .card-count {
        width: 160px;
        height: 160px;
    }

    @media (max-width: 767px) {
        .card-container {
            flex-wrap: wrap;
        }
    }
</style>
@endsection