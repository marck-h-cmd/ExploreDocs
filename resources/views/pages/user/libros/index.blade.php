@extends('layout.user.template')
@section('title','Libros')


@section('content')
    <section class="py-12 my-10">
        <div class="flex flex-col items-center gap-3 mb-12">
            <h2 class="text-blue-800 font-semibold text-4xl mb-1">Libros</h2>
            <div class="blue-line w-1/3 h-0.5 bg-[#64d423]"></div>
        </div>

        <div class="px-10 max-w-screen-2xl mx-auto grid grid-cols-1 lg:grid-cols-3 sm:grid-cols-2 gap-10 lg:gap-14">
             @php
        $titles = [
            "Convocatorias del Paraiso",
            "Un nuevo Amanecer",
            "Las casas",
            "Investigación sobre cambio climático",
            "El alquimista",
            "Los saberes"
        ];
        
        $descriptions = [
            "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.",
            "Desde el año 1500, cuando un impresor desconocido usó una galería de textos.",
            "Ha sobrevivido no solo a cinco siglos, sino también al salto a la composición electrónica.",
            "Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido.",
            "Muchas variaciones de pasajes de Lorem Ipsum disponibles.",
            "Todos los generadores de Lorem Ipsum que se encuentran en Internet tienden a repetir."
        ];
         $images = [
            "libro01.jpeg",
            "libro02.jpeg",
            "libro03.jpeg",
            "libro04.jpeg",
            "libro05.webp",
            "libro06.jpg"
        ];
    @endphp
           @for ($i = 0; $i < 9; $i++)
                    <!-- Tarjeta como un div normal -->
                    <div
                        class="relative w-full bg-white shadow-md rounded-xl duration-500
                            hover:scale-105 hover:shadow-xl group overflow-hidden">

                        <!-- Imagen -->
                        <img src="/images/{{ $images[array_rand($images)] }}" alt="noticias"
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
                                {{ $titles[array_rand($titles)] }}
                            </p>


                            <div class="text-base font-normal text-black cursor-auto my-3 break-words select-none">
                                {{ $descriptions[array_rand($descriptions)] }}
                            </div>
                        </div>

                        <!-- Overlay con enlace “Leer más” -->
                        <div
                            class="absolute inset-0 bg-[#1E5397] bg-opacity-35 flex items-center justify-center
                                opacity-0 translate-y-full group-hover:opacity-100 group-hover:translate-y-0
                                transition-all duration-500 ease-in-out rounded-xl backdrop-blur-md">
                            <a href=""
                                class="text-white text-base font-semibold select-none bg-[#1ef1bd]
                                  hover:bg-[#85cfec] px-3 py-2 rounded-lg cursor-pointer">
                                Leer más
                            </a>
                        </div>
                    </div>
                @endfor
        </div>

        <!-- Paginación -->
        <div class="flex justify-center mt-8">
          
        </div>
    </section>
@endsection
