@extends('layout.user.template')

@section('title', 'Home')

@section('content')

<style>
    .bg-radial-hero {
        background: radial-gradient(circle at center, #ffcc99, #ffb347);
        padding: 100px 0;
        color: #fff;
        box-shadow: inset 0 0 50px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 768px) {
        .bg-radial-hero {
            padding: 60px 0;
        }
    }

    .card:hover {
        transform: scale(1.02);
        transition: transform 0.3s ease;
    }
</style>

<div class="mb-5">
    <div class="bg-radial-hero">
        <div style="text-align: center;">
            <h1 style="font-weight: bold; font-size: 2.8rem;">Conocimiento para Todos</h1>
            <p class="lead mt-3">BUSCAR <span style="color: #00e600; font-weight: bold;">1,237</span> RECURSOS DISPONIBLES</p>

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
    </div>

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
        <h3 class="container text-uppercase mb-4 fw-bold text-dark fs-2 px-4">Futuros Artículos</h3>

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

    <div class="container-fluid mt-5">
        <h3 class="container text-uppercase mb-4 fw-bold text-dark fs-2 px-2">Novedades y Conferencias</h3>
        
        <div id="newsCarousel" class="container carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="ruta_de_imagen_1.jpg" class="d-block w-100 rounded" alt="Noticia 1">
                        </div>
                        <div class="col-md-6 d-flex flex-column justify-content-center">
                            <h4 class="fw-bold">¡Nuevo Webinar!</h4>
                            <p>La importancia de la educación continua para ingenieros. Regístrate gratis hoy.</p>
                            <a href="#" class="btn btn-primary mt-2">Registrar</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="ruta_de_imagen_2.jpg" class="d-block w-100 rounded" alt="Noticia 2">
                        </div>
                        <div class="col-md-6 d-flex flex-column justify-content-center">
                            <h4 class="fw-bold">Tecnología 5G/6G</h4>
                            <p>Explora el testbed de protocolos e innovación en redes futuras.</p>
                            <a href="#" class="btn btn-primary mt-2">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

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
@endsection