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
        z-index: 0;
    }

    .bg-hero::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: -1;
    }

    /*Media para dispositivos móviles*/
    @media (max-width: 768px) {
        .bg-hero {
            font-size: 2.8rem;
        }
    }

    /*Hover para las tarjetas*/
    .card:hover {
        transform: scale(1.02);
        transition: transform 0.3s ease;
    }

    /*Estilos para el contenido de la sección*/
    .section-content {
        background-color: #f8f9fa;
        padding: 60px 0;
    }

    /*Estilos para el carrusel de libros*/
    .book-cover {
        width: 140px;
        height: auto;
        border-radius: 5px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
    }

    /*Hover para las imágenes de los libros*/
    .book-cover:hover {
        transform: scale(1.05);
    }

    .carousel-inner {
        padding: px 0;
    }

    /*Estilos para el carrusel*/
    #splide {
        margin: 0 auto;
        max-width: 80%;
    }

    /*estilo para las flechas*/
    .splide__arrow {
        width: 40px;
        height: 40px;
        background-color: #ffffffcc;
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

    /*hover para las flechas*/
    .splide__arrow:hover {
        background-color: #ffffff;
        transform: scale(1.1);
    }

    /*Estilo para las flechas de la izquierda y derecha*/
    .splide__arrow--prev {
        left: -1.5rem;
    }

    /*Ajuste de posición para la flecha derecha*/
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

        form .form-select,
        form .form-control {
            font-size: 0.9rem;
            padding: 0.5rem;
        }
    }

    /*Estilo para el botón de búsqueda*/
    .btn {
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    /*Hover para el botón de búsqueda*/
    .btn:hover {
        transform: scale(1.05);
    }
</style>
<div class="mb-5">
    <div class="bg-hero">
        <h1 class="font-bold text-white display-4 display-md-3">
            Conocimiento para Todos
        </h1>
        <p class="lead mt-3">
            BUSCAR <span style="color: #20c997; font-weight: bold;">1,237</span> RECURSOS DISPONIBLES
        </p>

        <div class="container row justify-content-center mt-4">
            <form class="col-12 col-md-8">
                <div class="row g-2">
                    <div class="col-12 col-md-3">
                        <select class="form-select">
                            <option selected>Todo</option>
                            <option>Artículos</option>
                            <option>Autores</option>
                            <option>Temas</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="input-group">
                            <input type="text" class="form-control border border-dark" placeholder="Buscar...">
                            <x-button icon="bi bi-search" color="btn-info" />
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="mt-4 d-flex flex-wrap justify-content-center gap-3">
            <a href="#" class="btn btn-info btn-sm btn-md" style="color: #fff">BÚSQUEDA AVANZADA</a>
            <a href="#" class="btn btn-info btn-sm btn-md" style="color: #fff">TEMAS POPULARES</a>
        </div>
    </div>
        <!-- CONTAINER AUTORES MÁS DESTACADOS -->
    <div class="section-content">
        <div class="container-fluid mt-5">

            <h3 class=" container text-uppercase mb-4 fw-bold text-dark fs-2 px-4">Autores más destacados</h3>

            <div class="container row row-cols-1 row-cols-md-3 g-4">
                <x-card-autor
                    name="Mario Vargas Llosa"
                    country="Perú"
                    avatar="/images/autor01.png"
                    description="Premio Nobel de Literatura, autor de obras como 'La ciudad y los perros'."
                    moreUrl="#" />

                <x-card-autor
                    name="Octavio Paz"
                    country="Mexico"
                    avatar="/images/autor03.webp"
                    description="Premio Nobel de Literatura, autor de obras como 'El olvido'."
                    moreUrl="#" />

                <x-card-autor
                    name="J. R. R. Tolkien"
                    country="Inglaterra"
                    avatar="/images/autor02.webp"
                    description="Autor de obras como 'El Seno de los Anillos' y 'El Hobbit'"
                    moreUrl="#" />
            </div>
        </div>
            <!-- CONTAINER TITULOS POPULARES-->
        <div class="container-fluid mt-5">
            <h3 class="container text-uppercase mb-4 fw-bold text-dark fs-2 px-4">Títulos populares</h3>

            <div class="container row row-cols-1 row-cols-md-3 g-4">
                <x-card
                    img="images/titulo01.webp"
                    alt="Imagen del artículo"
                    title="Tu sueño imperios han sido"
                    description="Álvaro Enrigue narra el histórico encuentro entre Cortés y Moctezuma el 8 de noviembre de 1519, 
                        un choque entre dos mundos y visiones opuestas. Su novela mezcla historia y ficción para explorar qué ocurrió realmente y 
                        cómo pudo haberse interpretado.La obra está cargada de misterio, violencia y ambición imperial. 
                        Publicada por Anagrama, ha sido destacada por Karla Martínez de Salas de Vogue México y Latinoamérica."
                    href="#"
                    btnText="Leer más"
                    btnColor="btn-warning"
                    btnIcon="bi bi-arrow-right-circle" />

                <x-card
                    img="images/titulo02.webp"
                    alt="Imagen del artículo"
                    title="La última casa"
                    description="Arantxa Urretabizkaia aborda la vejez con originalidad, lejos de los 
                        clichés, y ganó el premio Euskadi con su versión en euskera. La novela mezcla misterio, 
                        recuerdos y decisiones pasadas mientras una mujer busca su refugio final en Hendaya. 
                        En un entorno lleno de secretos, vecinos vigilantes y fantasmas del pasado, 
                        se construye una historia íntima y única."
                    href="#"
                    btnText="Leer más"
                    btnColor="btn-warning"
                    btnIcon="bi bi-arrow-right-circle" />

                <x-card
                    img="images/titulo03.webp"
                    alt="Imagen del artículo"
                    title="Silencios que matan"
                    description="Silencios que matan, de Jordan Harper, es una novela negra intensa y premiada, 
                        ambientada en una Los Ángeles brutal y luminosa. Ganadora del premio Ian Fleming Steel 
                        Dagger, fue destacada por medios como The New York Times y The Guardian. 
                        Con un estilo que mezcla crudeza y poesía, ofrece una mirada feroz y emotiva a los contrastes urbanos."
                    href="#"
                    btnText="Leer más"
                    btnColor="btn-warning"
                    btnIcon="bi bi-arrow-right-circle" />
            </div>
        </div>
            <!-- CONTAINER TITULOS RECIENTES -->
        <div class="container-fluid my-5">
            <h3 class="container text-uppercase mb-4 fw-bold text-dark fs-2 px-4">Títulos Recientemente Subidos</h3>

            <div id="splide" class="splide mx-auto mb-5 text-center z-0">
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

        <!-- CONTAINER CONFERENCIAS -->
        <div class="container-fluid mt-5">
            <h3 class="container text-uppercase mb-4 fw-bold text-dark fs-2 px-4">Conferencias</h3>

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

        <!--
        <div class="container-fluid mt-5">
            <div class="row g-4"> 
                
                <div class="col-md-6 h-auto"> 
                    <div class="h-auto"> 
                        <img src="https://images.newscientist.com/wp-content/uploads/2025/01/16133319/event-preview-1-740-x-630.jpg?crop=3%3A2%2Csmart" 
                             class="img-fluid w-100 h-100 object-fit-cover rounded" 
                             alt="News image">
                    </div>
                </div>
        
                
                <div class="col-md-6 "> 
                    <div class="card my-2 "> 
                        <div class="card-body d-flex flex-md-row flex-column"> 
                            <img src="https://ieeexplore.ieee.org/xploreAssets/images/cms/0e76dde4-4c17-46bd-a84c-f7a578231c03_highlight.jpg" 
                                 class="card-img-left img-fluid  me-md-3 mb-3 mb-md-0" 
                                 style="max-width: 200px; height: auto; object-fit: cover;" 
                                 alt="Card image">
                            <div>
                                <h5 class="card-title">Special title treatment</h5>
                            
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card my-2 "> 
                        <div class="card-body d-flex flex-md-row flex-column"> 
                            <img src="https://ieeexplore.ieee.org/xploreAssets/images/cms/0e76dde4-4c17-46bd-a84c-f7a578231c03_highlight.jpg" 
                                 class="card-img-left img-fluid  me-md-3 mb-3 mb-md-0" 
                                 style="max-width: 200px; height: auto; object-fit: cover;" 
                                 alt="Card image">
                            <div>
                                <h5 class="card-title">Special title treatment</h5>
                            
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    -->
        <!-- CONTAINER CONTACTO -->
        <div class="container-fluid contact">

            <div class="row">
                <div class="col-12">
                    <h4 class="display-4 text-center">Contactanos</h4>
                    <hr class="my-4">
                </div>

                <div class="col-xs-12 col-md-6 " id="contact">

                    <form class="mb-sm-4" id="for">

                        <div class="form-group">
                            <label for="exampleFormControlInput2">Nombre</label>
                            <input type="name" class="form-control" id="exampleFormControlInput2" placeholder="User Name">
                        </div>


                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email </label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Mensaje</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-info submit-form">Submit</button>
                    </form>

                </div>

                <div class="col-xs-12 col-md-6" id="contact">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.410276127892!2d-79.04060262589138!3d-8.115327781204812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ad3d9fb3467261%3A0x752547ad9a204df6!2sUniversidad%20Nacional%20de%20Trujillo%20(UNT)!5e1!3m2!1ses-419!2spe!4v1734127574943!5m2!1ses-419!2spe"
                        width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen=""></iframe>

                </div>


            </div>
            <div class="row my-4">
                <div class="col-lg-12">
                    <div class=" mt-4 border-0 mb-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-4 col-12 d-flex justify-content-center">
                                <div class="card-body d-flex align-items-center gap-3 c-detail pl-0">
                                    <div class="mr-3 align-self-center">
                                        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon1.png">
                                    </div>
                                    <div class="">
                                        <h6 class="font-weight-medium">Address</h6>
                                        <p class="">601 Sherwood Ave.
                                            <br> San Pablo
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 d-flex justify-content-center">
                                <div class="card-body d-flex align-items-center gap-3 c-detail">
                                    <div class="mr-3 align-self-center">
                                        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon2.png">
                                    </div>
                                    <div class="">
                                        <h6 class="font-weight-medium">Phone</h6>
                                        <p class="">951 546 944
                                            <br> 630 446 8851
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 d-flex justify-content-center">
                                <div class="card-body d-flex align-items-center gap-3 c-detail">
                                    <div class="mr-3 align-self-center">
                                        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon3.png">
                                    </div>
                                    <div class="">
                                        <h6 class="font-weight-medium">Email</h6>
                                        <p class="">
                                            info@gmail.com
                                            <br> 123@gmail.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<style>
    .contact {
        padding: 5% 10%;
    }

    .submit-form {
        margin: 5% 3% 5% 0;
        color: #f8f9fa;
    }

    .form-group {
        margin-top: 4px;
    }
</style>

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