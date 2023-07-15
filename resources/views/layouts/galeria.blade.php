@extends('plantilla.app')

@section('titulo')
Libros
@endsection

@section('main')
<main class="contenedor seccion contenido-centrado">
    <h1>Nuestro Libros</h1>

    @foreach($books as $book)
    <article class="entrada-blog bottom">

        <div class="imagen">
            <a href="{{ url('/libro/'.$book->id) }}">
                <picture>
                    <img loading="lazy" src="/libros/{{$book->img}}" alt="Foto Libro">
                </picture>
            </a>
        </div>
        <div class="texto-entrada">
            <a href="{{ url('/libro/'.$book->id) }}">
                <h4>{{$book->title}}</h4>
                <p>Escrito el: <span>{{$book->date}}</span> por: <span>{{$book->author}}</span> </p>
                <p class="text-justify">
                    {{$book->desc}}
                </p>
            </a>
        </div>
    </article>
    @endforeach

    <div class="alinear-derecha">
        <a href="{{ url('contacto/#conseguir') }}" class="boton-verde">Conseguir Ahora</a>
    </div>
</main>
@endsection