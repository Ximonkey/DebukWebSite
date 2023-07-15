@extends('plantilla.app')

@section('titulo')
Personajes
@endsection

@section('main')
<main class="contenedor seccion">
    <div class="container bottom">
        <div class="row">
            <h1 class="text-center">Galeria de Personajes</h1>
        </div>
        <div class="row">
            <div class="contenedor-anuncios">
            @foreach($characters as $character)
            <div class="anuncio">
                <div class="card-flipper effect__hover" data-id="1">
                    <div class="card__front">
                        <div class="card card-01">
                            <div class="profile-box-01">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item">
                                            <img class="card-img-top" src="/personajes/{{$character->photo}}" alt="Card image cap">

                                        </div>
                                        <div class="carousel-item">
                                            <img class="card-img-top" src="/personajes/{{$character->photo2}}" alt="Card image cap">

                                        </div>
                                        <div class="carousel-item active">
                                            <img class="card-img-top" src="/personajes/{{$character->photo3}}" alt="Card image cap">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <span class="badge-box"><i class="fa fa-check"></i></span>
                                <h4 class="card-title text-dark">{{$character->name}}</h4>
                            </div>
                        </div>
                    </div>

                    <div class="card__back">
                        <div class="card card-01">
                            <div class="card-body text-center">
                                <ul class="iconos-caracteristicas">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-rainbow" width="50" height="50" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fd0061" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" loading="lazy" alt="icono color" />
                                            <path d="M22 17c0 -5.523 -4.477 -10 -10 -10s-10 4.477 -10 10" />
                                            <path d="M18 17a6 6 0 1 0 -12 0" />
                                            <path d="M14 17a2 2 0 1 0 -4 0" />
                                        </svg>
                                        <p class="text-dark">{{$character->icolor}}</p>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mood-neutral" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fd0061" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <circle cx="12" cy="12" r="9" />
                                            <line x1="9" y1="10" x2="9.01" y2="10" />
                                            <line x1="15" y1="10" x2="15.01" y2="10" />
                                        </svg>
                                        <p class="text-dark">{{$character->iperson}}</p>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sock" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fd0061" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M13 3v6l4.798 5.142a4 4 0 0 1 -5.441 5.86l-6.736 -6.41a2 2 0 0 1 -.621 -1.451v-9.141h8z" />
                                            <path d="M7.895 15.768c.708 -.721 1.105 -1.677 1.105 -2.768a4 4 0 0 0 -4 -4" />
                                        </svg>
                                        <p class="text-dark">{{$character->iobj}}</p>
                                    </li>
                                </ul>
                                <p class="card-text text-dark mt-5">{{$character->desc}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>

    <div class="alinear-derecha">
        <a href="{{ url('contacto/#conseguir') }}" class="boton-verde">Conseguir Ahora</a>
    </div>
</main>

<style>
    section:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: #fadc0b;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3E%3Cpath fill='%23fab516' fill-opacity='1' d='M1 3h1v1H1V3zm2-2h1v1H3V1z'%3E%3C/path%3E%3C/svg%3E");
        z-index: 0;
        -webkit-transform: scale(2);
        -ms-transform: scale(2);
        transform: scale(2);
    }

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
@endsection