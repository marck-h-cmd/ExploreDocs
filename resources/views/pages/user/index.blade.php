@extends('layout.user.template')

@section('title', 'Home')

@section('content')


    <div class="mb-10">
        <!-- HERO -->
        <section class="relative bg-cover bg-center py-20 md:py-40" style="background-image: url('/images/fondo05.jpg');">
            <!-- Overlay oscuridad -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/80 to-black/40"></div>
            <!-- Contenido -->
            <div class="relative z-10 flex flex-col justify-center items-center h-full px-6">
                <h1 class="text-[clamp(1.75rem,6vw,3.5rem)] md:text-[clamp(2.5rem,5vw,4rem)] font-bold text-white stroke-2">
                    Conocimiento para <span class="text-emerald-400">Todos</span>
                </h1>

                <p class="text-lg md:text-2xl text-gray-200 mb-8">
                    Accede a más de <span class="text-green-400 font-semibold">1.237</span> recursos disponibles
                </p>
                <div class="w-full max-w-3xl">
                    <form class="flex items-center rounded-lg overflow-hidden shadow-lg">
                        <select class="w-1/3 md:w-1/4 px-4 py-3 text-gray-700 focus:outline-none rounded-lg" aria-label="Categoría">
                            <option>Todo</option>
                            <option>Artículos</option>
                            <option>Autores</option>
                            <option>Temas</option>
                        </select>
                        <input type="text" placeholder="Buscar..." 
                            class="flex-1 px-4 py-3 text-gray-800 focus:outline-none rounded-lg" />
                        <x-button type="submit"
                            color="bg-green-500 hover:bg-green-600 text-white px-6 py-3 flex items-center justify-center"
                            icon="bi bi-search" />
                    </form>
                    <div class="flex justify-center mt-4 space-x-4 text-sm">
                        <x-button href="#" text="Busqueda avanzada"
                            color="bg-green-500 hover:bg-green-600 text-white" icon="bi bi-book" />
                        <x-button href="#" text="Temas populares"
                            color="bg-green-500 hover:bg-green-600 text-white" icon="bi bi-tag" />
                    </div>
                </div>
            </div>
        </section>


        <!-- AUTORES MÁS DESTACADOS -->
        <section class="bg-gray-50 py-16">
            <div class="max-w-7xl mx-auto ">
                <div class="flex flex-col items-center gap-3 mb-12">
                    <h2 class="text-blue-800 font-semibold text-4xl mb-1">Autores destacados</h2>
                    <div class="blue-line w-1/3 h-0.5 bg-[#64d423]"></div>
                </div>
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-4 justify-items-center items-stretch">
                    <x-card-autor name="Mario Vargas Llosa" country="Perú" avatar="/images/autor01.png"
                        description="Premio Nobel de Literatura, autor de obras como 'La ciudad y los perros'."
                        moreUrl="#" />
                    <x-card-autor name="Octavio Paz" country="México" avatar="/images/autor03.webp"
                        description="Premio Nobel de Literatura, autor de obras como 'El olvido'." moreUrl="#" />
                    <x-card-autor name="J. R. R. Tolkien" country="Inglaterra" avatar="/images/autor02.webp"
                        description="Autor de 'El Señor de los Anillos' y 'El Hobbit'." moreUrl="#" />
                </div>
            </div>
        </section>




        <!-- TÍTULOS POPULARES -->
        <section class="bg-white py-16">
            <div class="max-w-7xl mx-auto">
                <div class="max-w-5xl mx-auto">
                    <div class="flex flex-col items-center gap-3 mb-12">
                        <h2 class="text-blue-800 font-semibold text-4xl mb-1">Titulos Populares</h2>
                        <div class="blue-line w-1/3 h-0.5 bg-[#64d423]"></div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-4 items-stretch">
                        <x-card img="images/titulo01.webp" alt="Imagen del artículo" title="Tu sueño imperios han sido"
                            description="Álvaro Enrigue narra el histórico encuentro entre Cortés y Moctezuma el 8 de noviembre de 1519, un choque entre dos mundos y visiones opuestas. Su novela mezcla historia y ficción para explorar qué ocurrió realmente y cómo pudo haberse interpretado.La obra está cargada de misterio, violencia y ambición imperial. Publicada por Anagrama, ha sido destacada por Karla Martínez de Salas de Vogue México y Latinoamérica."
                            href="#" btnText="Leer más" btnColor="bg-emerald-500 hover:bg-emerald-600 text-white"
                            btnIcon="bi bi-arrow-right-circle" />
                        <x-card img="images/titulo02.webp" alt="Imagen del artículo" title="La última casa"
                            description="Arantxa Urretabizkaia aborda la vejez con originalidad, lejos de los clichés, y ganó el premio Euskadi con su versión en euskera. La novela mezcla misterio, recuerdos y decisiones pasadas mientras una mujer busca su refugio final en Hendaya. En un entorno lleno de secretos, vecinos vigilantes y fantasmas del pasado, se construye una historia íntima y única."
                            href="#" btnText="Leer más" btnColor="bg-emerald-500 hover:bg-emerald-600 text-white"
                            btnIcon="bi bi-arrow-right-circle" />
                        <x-card img="images/titulo03.webp" alt="Imagen del artículo" title="Silencios que matan"
                            description="Silencios que matan, de Jordan Harper, es una novela negra intensa y premiada, ambientada en una Los Ángeles brutal y luminosa. Ganadora del premio Ian Fleming Steel Dagger, fue destacada por medios como The New York Times y The Guardian. Con un estilo que mezcla crudeza y poesía, ofrece una mirada feroz y emotiva a los contrastes urbanos."
                            href="#" btnColor="bg-emerald-500 hover:bg-emerald-600 text-white" btnText="Leer más"
                            btnIcon="bi bi-arrow-right-circle" />
                    </div>
                </div>
        </section>

        <!-- TITULOS RECIENTES (CARRUSEL) -->
        <section class="bg-gray-50 py-16">
            <div class="max-w-7xl mx-auto">
                 <div class="flex flex-col items-center gap-3 mb-12">
                        <h2 class="text-blue-800 font-semibold text-4xl mb-1"> Recientemente Subidos</h2>
                        <div class="blue-line w-1/3 h-0.5 bg-[#64d423]"></div>
                    </div>
                <div id="splide" class="splide mx-auto mb-8 text-center max-w-4xl">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide px-2"><img src="/images/libro01.jpeg"
                                    class="rounded shadow-lg w-36 mx-auto hover:scale-105 transition"
                                    alt="El Bosque Mágico"></li>
                            <li class="splide__slide px-2"><img src="/images/libro02.jpeg"
                                    class="rounded shadow-lg w-36 mx-auto hover:scale-105 transition"
                                    alt="Alicia en el País de las Maravillas"></li>
                            <li class="splide__slide px-2"><img src="/images/libro03.jpeg"
                                    class="rounded shadow-lg w-36 mx-auto hover:scale-105 transition"
                                    alt="Harry Potter y la piedra filosofal"></li>
                            <li class="splide__slide px-2"><img src="/images/libro04.jpeg"
                                    class="rounded shadow-lg w-36 mx-auto hover:scale-105 transition" alt="It (Eso)"></li>
                            <li class="splide__slide px-2"><img src="/images/libro05.webp"
                                    class="rounded shadow-lg w-36 mx-auto hover:scale-105 transition" alt="Libro 5"></li>
                            <li class="splide__slide px-2"><img src="/images/libro06.jpg"
                                    class="rounded shadow-lg w-36 mx-auto hover:scale-105 transition" alt="Libro 6"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONFERENCIAS -->
        <section class="bg-white py-16">
            <div class="max-w-5xl mx-auto">
                <div class="flex flex-col items-center gap-3 mb-12">
                    <h2 class="text-blue-800 font-semibold text-4xl mb-1"> Conferencias</h2>
                    <div class="blue-line w-1/3 h-0.5 bg-[#64d423]"></div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-4 items-stretch">
                    <x-card-conference date="19" month="MAY" title="INFOCOM 2025"
                        location="Londres, Reino Unido" registerUrl="#" moreUrl="#" />
                    <x-card-conference date="8" month="JUN" title="Conferencia Internacional en Comunicaciones"
                        location="Montreal, Canadá" registerUrl="#" moreUrl="#" />
                    <x-card-conference date="19" month="OCT" title="IEEE SENSORS 2025"
                        location="Vancouver, Canadá" registerUrl="#" moreUrl="#" />
                </div>
            </div>
        </section>

        {{-- Sección noticias --}}
        <section class="py-12">
            <div class="flex flex-col items-center gap-3 mb-12">
                <h2 class="text-blue-800 font-semibold text-4xl mb-1">Noticias</h2>
                <div class="blue-line w-1/3 h-0.5 bg-[#64d423]"></div>
            </div>

            <div class="px-10 max-w-screen-2xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 lg:gap-14">
                @for ($i = 0; $i < 3; $i++)
                    <!-- Tarjeta como un div normal -->
                    <div
                        class="relative w-full bg-white shadow-md rounded-xl duration-500
                            hover:scale-105 hover:shadow-xl group overflow-hidden">

                        <!-- Imagen -->
                        <img src="/images/noticias.webp" alt="noticias"
                            class="w-full h-[200px] object-cover rounded-t-xl" />

                        <!-- Texto -->
                        <div class="px-4 py-6 w-full min-h-[150px]">
                            <span class="text-gray-600 mr-3 uppercase text-base">
                                @php
                                  
                                    $randomDays = rand(0, 365);
                                    $randomDate = now()->addDays($randomDays)->format('n/j/Y');
                                @endphp
                                {{ $randomDate }}
                            </span>
                            <p class="text-lg font-bold text-black truncate block capitalize mt-3 select-none">
                                Convocatoria de conferencias PUCP
                            </p>


                            <div class="text-base font-normal text-black cursor-auto my-3 break-words select-none">
                                Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem
                                Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un
                                impresor desde el año 1500, cuando un impresor
                            </div>
                        </div>

                        <!-- Overlay con enlace “Leer más” -->
                        <div
                            class="absolute inset-0 bg-[#1E5397] bg-opacity-35 flex items-center justify-center
                                opacity-0 translate-y-full group-hover:opacity-100 group-hover:translate-y-0
                                transition-all duration-500 ease-in-out rounded-xl backdrop-blur-md">
                            <a href=""
                                class="text-white text-base font-semibold select-none bg-[#98C560]
                                  hover:bg-[#a6d073] px-3 py-2 rounded-lg cursor-pointer">
                                Leer más
                            </a>
                        </div>
                    </div>
                @endfor

            </div>

            <div class="mt-10 flex justify-center">
                <a href="{{ route('noticias') }}"
                    class="bg-[#98C560] p-4 rounded-xl text-lg text-white hover:bg-[#a6d073] cursor-pointer">
                    VER MÁS NOTICIAS
                </a>
            </div>
        </section>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#splide', {
                type: 'loop',
                perPage: 4,
                gap: '1rem',
                arrows: true,
                breakpoints: {
                    1280: {
                        perPage: 3
                    },
                    900: {
                        perPage: 2
                    },
                    600: {
                        perPage: 1
                    },
                },
            }).mount();
        });
    </script>

@endsection
