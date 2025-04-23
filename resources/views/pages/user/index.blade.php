@extends('layout.user.template')

@section('title', 'Home')

@section('content')

<style>
    .bg-hero {
        padding: 100px 0;
        color: #fff;
        text-align: center;
        background: url('/images/fondo05.jpg') no-repeat center center/cover;
        background-attachment: scroll;
        background-size: cover;
        position: relative;
        z-index: 1;
    }

    .bg-hero::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        /* Oscurece la imagen */
        z-index: -1;
    }

    @media (max-width: 768px) {
        .bg-hero {
            padding: 60px 0;
        }
    }

    .card:hover {
        transform: scale(1.02);
        transition: transform 0.3s ease;
    }

    .section-content {
        background-color: #f8f9fa;
        /* Blanco o gris claro */
        padding: 60px 0;
    }

    .book-cover {
        width: 140px;
        height: auto;
        border-radius: 5px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
    }

    .book-cover:hover {
        transform: scale(1.05);
    }

    .carousel-inner {
        padding: px 0;
    }

    #splide {
        margin: 0 auto;
        max-width: 80%;
    }

    .splide__arrow {
        width: 40px;
        height: 40px;
        background-color: #ffffffcc;
        /* blanco semitransparente */
        border: none;
        border-radius: 50%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        color: #333;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .splide__arrow:hover {
        background-color: #ffffff;
        transform: scale(1.1);
    }

    .splide__arrow--prev {
        left: -1.5rem;
    }

    .splide__arrow--next {
        right: -1.5rem;
    }

    /* Responsive ajuste de posición */
    @media (max-width: 768px) {
        .splide__arrow--prev {
            left: -1rem;
        }

        .splide__arrow--next {
            right: -1rem;
        }
    }
</style>

<div class="mb-5">
    <div class="bg-hero">
        <h1 class="font-bold text-[2.8rem] text-white">
            Conocimiento para Todos
        </h1>
        <p class="lead mt-3">
            BUSCAR <span style="color: #20c997; font-weight: bold;">1,237</span> RECURSOS DISPONIBLES
        </p>

        <div class="container row justify-content-center mt-4">
            <form>
                <div class="row g-2">
                    <div class="col-sm-2">
                        <select class="form-select">
                            <option selected>Todo</option>
                            <option>Artículos</option>
                            <option>Autores</option>
                            <option>Temas</option>
                        </select>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Buscar...">
                    </div>
                    <div class="col-sm-2">
                        <x-button text="🔍 Buscar" color="btn-secondary" class="w-100" />
                    </div>
                </div>
            </form>
        </div>

        <div class="mt-4 d-flex justify-content-center gap-3">
            <a href="#" class="btn btn-dark">BÚSQUEDA AVANZADA</a>
            <a href="#" class="btn btn-dark">TEMAS POPULARES</a>
        </div>
    </div>
    <div class="section-content">
        <div class="container-fluid mt-5">

            <h3 class=" container text-uppercase mb-4 fw-bold text-dark fs-2 px-4">Autores más destacados</h3>

            <div class="container row row-cols-1 row-cols-md-3 g-4">
                <x-card
                    img="ruta_de_imagen_1.jpg"
                    alt="Autor 1"
                    title="Nombre del Autor 1"
                    description="Descripción breve del autor. Tal vez sus áreas de investigación o una frase destacada."
                    href="#" />

                <x-card
                    img="ruta_de_imagen_1.jpg"
                    alt="Autor 2"
                    title="Nombre del Autor 2"
                    description="Descripción breve del autor. Tal vez sus áreas de investigación o una frase destacada."
                    href="#" />

                <x-card
                    img="ruta_de_imagen_1.jpg"
                    alt="Autor 3"
                    title="Nombre del Autor 3"
                    description="Descripción breve del autor. Tal vez sus áreas de investigación o una frase destacada."
                    href="#" />
            </div>
        </div>

        <div class="container-fluid mt-5">
            <h3 class="container text-uppercase mb-4 fw-bold text-dark fs-2 px-4">Titulos populares</h3>

            <div class="container row row-cols-1 row-cols-md-3 g-4">
                <x-card
                    img="ruta.jpg"
                    alt="Imagen del artículo"
                    title="Título"
                    description="Descripción del contenido."
                    href="#"
                    btnText="Leer más"
                    btnColor="btn-warning"
                    btnIcon="bi bi-arrow-right-circle" />

                <x-card
                    img="ruta.jpg"
                    alt="Imagen del artículo"
                    title="Título"
                    description="Descripción del contenido."
                    href="#"
                    btnText="Leer más"
                    btnColor="btn-warning"
                    btnIcon="bi bi-arrow-right-circle" />

                <x-card
                    img="ruta.jpg"
                    alt="Imagen del artículo"
                    title="Título"
                    description="Descripción del contenido."
                    href="#"
                    btnText="Leer más"
                    btnColor="btn-warning"
                    btnIcon="bi bi-arrow-right-circle" />
            </div>
        </div>

        <div class="container-fluid my-5">
            <h3 class="container text-uppercase mb-4 fw-bold text-dark fs-2 px-4">Títulos Recientemente Subidos</h3>

            <div id="splide" class="splide mx-auto mb-5 text-center">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="/images/libro01.jpeg" class="book-cover" alt="El Bosque Mágico">
                        </li>
                        <li class="splide__slide">
                            <img src="/images/libro02.jpeg" class="book-cover" alt="Alicia en el País de las Maravillas">
                        </li>
                        <li class="splide__slide">
                            <img src="/images/libro03.jpeg" class="book-cover" alt="Harry Potter y la piedra filosofal">
                        </li>
                        <li class="splide__slide">
                            <img src="/images/libro04.jpeg" class="book-cover" alt="It (Eso)">
                        </li>
                        <li class="splide__slide">
                            <img src="/images/libro05.webp" class="book-cover" alt="Libro 5">
                        </li>
                        <li class="splide__slide">
                            <img src="/images/libro06.jpg" class="book-cover" alt="Libro 6">
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-5">
            <h3 class="container text-uppercase mb-4 fw-bold text-dark fs-2 px-4">Conferéncias</h3>

            <div class="container row row-cols-1 row-cols-md-3 g-4">
                <x-card-conference
                    date="19"
                    month="MAY"
                    title="INFOCOM 2025"
                    location="Londres, Reino Unido"
                    registerUrl="#"
                    moreUrl="#" />

                <x-card-conference
                    date="8"
                    month="JUN"
                    title="Conferencia Internacional en Comunicaciones"
                    location="Montreal, Canadá"
                    registerUrl="#"
                    moreUrl="#" />

                <x-card-conference
                    date="19"
                    month="OCT"
                    title="IEEE SENSORS 2025"
                    location="Vancouver, Canadá"
                    registerUrl="#"
                    moreUrl="#" />
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Splide('#splide', {
            type: 'loop',
            perPage: 4,
            gap: '1rem',
            arrows: true,
            breakpoints: {
                1024: {
                    perPage: 3,
                },
                768: {
                    perPage: 2,
                },
                480: {
                    perPage: 1,
                },
            },
        }).mount();
    });
</script>

@endsection