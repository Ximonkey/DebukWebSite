@extends('plantilla.app')

@section('titulo')
Libro
@endsection

@section('main')
<main id="libro" class="contenedor seccion contenido-centrado">

    <h1>{{$book->title}}</h1>

    <picture>
        <img loading="lazy" src="/libros/{{$book->img}}" alt="Foto Libro">
    </picture>

    <div class="resumen-propiedad p-5">
        <p class="precio">Editorial: Debuk</p>
        <ul class="iconos-caracteristicas fill navbar-nav container d-flex flex-md-row justify-content-md-between text-center">
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lego" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#8DB5AD" fill="none" stroke-linecap="round" stroke-linejoin="round" loading="lazy" alt="icono edad">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <line x1="9.5" y1="11" x2="9.51" y2="11" />
                    <line x1="14.5" y1="11" x2="14.51" y2="11" />
                    <path d="M9.5 15a3.5 3.5 0 0 0 5 0" />
                    <path d="M7 5h1v-2h8v2h1a3 3 0 0 1 3 3v9a3 3 0 0 1 -3 3v1h-10v-1a3 3 0 0 1 -3 -3v-9a3 3 0 0 1 3 -3" />
                </svg>
                <p>{{$book->age}}</p>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bug" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#8DB5AD" fill="none" stroke-linecap="round" stroke-linejoin="round" loading="lazy" alt="icono categoria">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9 9v-1a3 3 0 0 1 6 0v1" />
                    <path d="M8 9h8a6 6 0 0 1 1 3v3a5 5 0 0 1 -10 0v-3a6 6 0 0 1 1 -3" />
                    <line x1="3" y1="13" x2="7" y2="13" />
                    <line x1="17" y1="13" x2="21" y2="13" />
                    <line x1="12" y1="20" x2="12" y2="14" />
                    <line x1="4" y1="19" x2="7.35" y2="17" />
                    <line x1="20" y1="19" x2="16.65" y2="17" />
                    <line x1="4" y1="7" x2="7.75" y2="9.4" />
                    <line x1="20" y1="7" x2="16.25" y2="9.4" />
                </svg>
                <p>{{$book->category->name}}</p>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-writing-sign" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#8DB5AD" fill="none" stroke-linecap="round" stroke-linejoin="round" loading="lazy" alt="icono idioma">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 19c3.333 -2 5 -4 5 -6c0 -3 -1 -3 -2 -3s-2.032 1.085 -2 3c.034 2.048 1.658 2.877 2.5 4c1.5 2 2.5 2.5 3.5 1c.667 -1 1.167 -1.833 1.5 -2.5c1 2.333 2.333 3.5 4 3.5h2.5" />
                    <path d="M20 17v-12c0 -1.121 -.879 -2 -2 -2s-2 .879 -2 2v12l2 2l2 -2z" />
                    <path d="M16 7h4" />
                </svg>
                <p>{{$book->language->name}}</p>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#8DB5AD" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                    <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                    <line x1="3" y1="6" x2="3" y2="19" />
                    <line x1="12" y1="6" x2="12" y2="19" />
                    <line x1="21" y1="6" x2="21" y2="19" />
                </svg>
                <p>{{$book->pag}}</p>
            </li>
        </ul>


        <p>{{$book->desc}}</p>
    </div>

    <div class="alinear-derecha">
        <a href="{{ url('contacto/#conseguir') }}" class="boton-verde">Conseguir Ahora</a>
    </div>

</main>
@endsection