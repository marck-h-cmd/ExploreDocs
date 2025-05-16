@extends('layout.user.template')

@section('title', 'Publicaciones')


@section('content')

    <section>

        <header class="home bg-cover mb-4 bg-center text-white"
            style="background-image: url('https://fondosmil.co/fondo/110721.jpg');">
            <div class="header-mask bg-[rgba(3,91,136,0.8)]">
                <div class=" mx-auto px-4">
                    <div class="jumbo text-center py-40">
                        <h1 class="text-6xl text-left">Publicaciones</h1>
                    </div>
                </div>
                <!-- NAV DE Biblioteca -->
                <div class="nav">
                    <div class=" mx-auto px-4 flex items-center justify-between">


                        <nav role="navigation mt-4">
                            <ul class="hor--nav flex space-x-12">
                                <li><a href="" class="text-gray-300 hover:text-white">Publicaciones</a></li>
                            </ul>

                        </nav>


                    </div>
                </div>
            </div>
        </header>


        <div class="Nosotros max-w-screen-2xl max w-full px-5 mx-auto mt-36">

            <div class="flex flex-col items-center gap-3 mb-12">
                <h2 class="text-blue-800 font-semibold text-4xl mb-1">Publicaciones-Papers</h2>
                <div class="blue-line w-1/3 h-0.5 bg-[#64d423]"></div>
            </div>
            <!-- SIDEBAR PARA APLICAR FILTROS-->
            <div class="grid  grid-cols-10 gap-x-16 max-[1150px]:grid-cols-1 justify-center">

                <aside
                    class="w-[450px] max-[1150px]:bg-slate-50 max-[1150px]:w-[350px] max-[1150px]:z-50 max-[1150px]:fixed max-[1150px]:top-0 max-[1150px]:bottom-0 max-[1150px]:left-0 h-auto mt-12 max-[1150px]:mt-0 col-span-3 max-[1150px]:transform max-[1150px]:-translate-x-full max-[1150px]:transition-transform"
                    id="drawer-navigation">
                    <div class="px-3 py-4 overflow-y-auto rounded  ">
                        <ul class="space-y-2">
                            <li>
                                <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase ">
                                    Menu</h5>
                                <button type="button" data-drawer-hide="drawer-navigation"
                                    aria-controls="drawer-navigation"
                                    class="max-[1150px]:block hidden text-black text-2xl">X</button>

                            </li>
                            <div class=" space-y-2 max-md:overflow-y-visible">
                                <li>

                                    <div class='max-w-md mx-auto'>
                                        <div
                                            class="relative flex items-center border-2 w-full h-12 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
                                            <div class="grid place-items-center h-full w-12 text-gray-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                                </svg>
                                            </div>

                                            <input
                                                class="peer h-full w-full outline-none text-sm text-gray-700 pr-2 border-0"
                                                type="text" id="search-dropdown" placeholder="Buscar Titulo Paper..." />
                                        </div>
                                    </div>
                                </li>
                                <hr>
                                <li>
                                    <button type="button"
                                        class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 bg-gray-50 "
                                        aria-controls="dropdown-example-2" data-collapse-toggle="dropdown-example-2">
                                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 "
                                            width="64px" height="64px" viewBox="0 0 32 32" id="i-options"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentcolor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path
                                                    d="M28 6 L4 6 M28 16 L4 16 M28 26 L4 26 M24 3 L24 9 M8 13 L8 19 M20 23 L20 29">
                                                </path>
                                            </g>
                                        </svg>
                                        <span class="flex-1 ml-3 text-left whitespace-nowrap"
                                            sidebar-toggle-item>Topicos</span>
                                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                    <ul id="dropdown-example-2" class=" hidden py-2 space-y-2 overflow-y-auto max-h-52">

                                        <li>

                                            <span
                                                class="flex items-center w-full p-2 text-base font-normal text-gray-600 transition duration-75 rounded-lg group hover:bg-gray-100  ">
                                                <input class="mr-2 checkbox-topico" type="checkbox" name="topics"
                                                    value="1">
                                                Quimica <span
                                                    class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full">2</span></span>
                                        </li>
                                        <li>

                                            <span
                                                class="flex items-center w-full p-2 text-base font-normal text-gray-600 transition duration-75 rounded-lg group hover:bg-gray-100  ">
                                                <input class="mr-2 checkbox-topico" type="checkbox" name="topics"
                                                    value="1">
                                                Inteligencia artificial <span
                                                    class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full">6</span></span>
                                        </li>
                                        <li>

                                            <span
                                                class="flex items-center w-full p-2 text-base font-normal text-gray-600 transition duration-75 rounded-lg group hover:bg-gray-100  ">
                                                <input class="mr-2 checkbox-topico" type="checkbox" name="topics"
                                                    value="1">
                                                Salud <span
                                                    class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full">3</span></span>
                                        </li>


                                    </ul>
                                </li>
                                <hr>
                                <li>
                                    <!-- FILTRO AREAS DE INVESTIGACION -->
                                    <button type="button"
                                        class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 bg-gray-50 "
                                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                        <svg class="flex-shrink-0 w-6 h-6" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M2 7a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1zm0 5a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1zm1 4a1 1 0 1 0 0 2h10a1 1 0 1 0 0-2H3z"
                                                    fill="#000000"></path>
                                            </g>
                                        </svg>
                                        <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Areas
                                            Investigación</span>
                                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                    <ul id="dropdown-example" class=" py-2 space-y-2 overflow-y-auto max-h-52">

                                        <li>
                                            <button type="button" value="1"
                                                class="area-btn flex items-center w-full p-2 text-base font-normal text-gray-600 transition duration-75 rounded-lg group hover:bg-gray-100  ">Computación</button>
                                        </li>

                                        <li>
                                            <button type="button" value="1"
                                                class="area-btn flex items-center w-full p-2 text-base font-normal text-gray-600 transition duration-75 rounded-lg group hover:bg-gray-100  ">
                                                Estructuras</button>
                                        </li>
                                        <li>
                                            <button type="button" value="1"
                                                class="area-btn flex items-center w-full p-2 text-base font-normal text-gray-600 transition duration-75 rounded-lg group hover:bg-gray-100  ">Medicina</button>
                                        </li>

                                    </ul>
                                </li>
                                <hr>
                                <li>
                                    <a href=""
                                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg  hover:bg-gray-100 ">
                                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75  group-hover:text-gray-900 "
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                                            </path>
                                            <path
                                                d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                                            </path>
                                        </svg>
                                        <span class="flex-1 ml-3 whitespace-nowrap">Contactanos</span>
                                    </a>
                                </li>
                            </div>

                        </ul>
                    </div>
                </aside>



                <div class="pt-6 pb-12  col-span-7 ">
                    <div class=" w-auto mx-2 overflow-y-auto">
                        <div id="card" class="">
                            <!-- BARRA PARA MOSTRAR PAGINA -->
                            <div class=" px-24 max-lg:px-2 ">
                                <div
                                    class="p-4 w-full bg-[#98c560] rounded-l-3xl rounded-r-3xl flex justify-between items-center">
                                    <button id="menuBtn" data-drawer-target="drawer-navigation"
                                        data-drawer-show="drawer-navigation" aria-controls="drawer-navigation"
                                        class="max-[1150px]:block hidden bg-[#28ddc5] text-white w-12 h-12 rounded-full flex items-center justify-center shadow-lg">
                                        <svg class="ml-3 w-6 h-6 text-gray-50 transition duration-75 group-hover:text-gray-900 "
                                            viewBox="0 0 32 32" id="i-options" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" stroke="currentcolor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path
                                                    d="M28 6 L4 6 M28 16 L4 16 M28 26 L4 26 M24 3 L24 9 M8 13 L8 19 M20 23 L20 29">
                                                </path>
                                            </g>
                                        </svg>
                                    </button>
                                    <p class="text-gray-50 ">Mostrando <span class="text-gray-100"
                                            id="paper-count">6</span> resultados <span class=" ml-2 text-sm"> Pag. <span
                                                class=" text-white" id="current-page">1</span>-<span class="text-white"
                                                id="pages">1</span></span>
                                    </p>

                                </div>
                            </div>
                            <!-- container para papers -->
                            <div id="papers-container" class=" w-100 lg:w-4/5  mx-auto flex flex-col overflow-y-visible">
                                <!-- paper -->

                                <div
                                    class="flex flex-col md:flex-row overflow-hidden relative                                          rounded-lg shadow-xl   mt-4  mx-2  bg-[#f4f4f4] max-w-6xl py-2 h-auto">

                                    <p
                                        class="absolute right-6 px-2 md:top-2   font-semibold bg-gray-200 p-1 text-gray-600 rounded-lg text-sm">
                                        Todas</p>
                                    <!-- información del paper -->
                                    <div class="max-h-96 max-w-[400px]   md:w-1/2 p-4">
                                        <a href=""
                                            class=" cursor-pointer hover:underline max-md:text-center relative group ">
                                            <h3 class="font-semibold text-lg mt-4 text-blue-400 text-justify ">
                                                jfkjd fkdkfkdk </h3>
                                            <!-- Titulo flotante completo -->
                                            <div
                                                class="absolute z-30 left-0 mb-3 w-max max-w-xs bg-white text-black text-xs rounded-md px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300 shadow-lg">
                                                Sample
                                            </div>

                                        </a>
                                        <div class="mt-5">
                                            <p class="text-gray-600 ">Autores:</p>
                                            <p class="autores italic text-base mb-3">
                                                Felix, Manuel</p>
                                        </div>
                                        <p class="doi mt-3"><span class="text-gray-600">
                                                Publisher: </span><span
                                                class="doi-link  text-gray-500 text-base">Alexis</span>
                                        </p>
                                        <p class="text-base  mt-3">
                                            <span class="text-gray-600  ">Publicado: </span>
                                            <strong class="text-gray-700 uppercase font-semibold text-sm ">
                                                28-06-25 </strong>
                                        </p>
                                        <a href="" class="mt-2 flex gap-2 cursor-pointer font-bold">
                                            <svg width="24px" height="24px" viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg" fill="none">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path fill="#98c560" fill-rule="evenodd"
                                                        d="M8 3.517a1 1 0 011.62-.784l5.348 4.233a1 1 0 010 1.568l-5.347 4.233A1 1 0 018 11.983v-1.545c-.76-.043-1.484.003-2.254.218-.994.279-2.118.857-3.506 1.99a.993.993 0 01-1.129.096.962.962 0 01-.445-1.099c.415-1.5 1.425-3.141 2.808-4.412C4.69 6.114 6.244 5.241 8 5.042V3.517zm1.5 1.034v1.2a.75.75 0 01-.75.75c-1.586 0-3.066.738-4.261 1.835a8.996 8.996 0 00-1.635 2.014c.878-.552 1.695-.916 2.488-1.138 1.247-.35 2.377-.33 3.49-.207a.75.75 0 01.668.745v1.2l4.042-3.2L9.5 4.55z"
                                                        clip-rule="evenodd"></path>
                                                </g>
                                            </svg>
                                            <p class=" text-[#98c560] text-base">Redirigir</p>
                                        </a>
                                    </div>
                                    <div class="w-full p-6 max-md:py-2 text-gray-800 flex flex-col justify-between  ">
                                        <p class="mt-4  text-justify text-gray-500 text-sm ">
                                            es un término, generalmente de origen anglosajón, que se usa para referirse a un
                                            artículo científico, un trabajo de investigación o una publicación académica.
                                            Normalmente, este tipo de texto tiene como objetivo presentar los resultados de
                                            una investigación teórica o empírica, y está destinado a ser publicado en
                                            revistas especializadas
                                        </p>
                                    </div>

                                </div>
                                <div
                                    class="flex flex-col md:flex-row overflow-hidden relative                                          rounded-lg shadow-xl   mt-4  mx-2  bg-[#f4f4f4] max-w-6xl py-2 h-auto">

                                    <p
                                        class="absolute right-6 px-2 md:top-2   font-semibold bg-gray-200 p-1 text-gray-600 rounded-lg text-sm">
                                        Todas</p>
                                    <!-- información del paper -->
                                    <div class="max-h-96 max-w-[400px]   md:w-1/2 p-4">
                                        <a href=""
                                            class=" cursor-pointer hover:underline max-md:text-center relative group ">
                                            <h3 class="font-semibold text-lg mt-4 text-blue-400 text-justify ">
                                                jfkjd fkdkfkdk </h3>
                                            <!-- Titulo flotante completo -->
                                            <div
                                                class="absolute z-30 left-0 mb-3 w-max max-w-xs bg-white text-black text-xs rounded-md px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300 shadow-lg">
                                                Sample
                                            </div>

                                        </a>
                                        <div class="mt-5">
                                            <p class="text-gray-600 ">Autores:</p>
                                            <p class="autores italic text-base mb-3">
                                                Felix, Manuel</p>
                                        </div>
                                        <p class="doi mt-3"><span class="text-gray-600">
                                                Publisher: </span><span
                                                class="doi-link  text-gray-500 text-base">Alexis</span>
                                        </p>
                                        <p class="text-base  mt-3">
                                            <span class="text-gray-600  ">Publicado: </span>
                                            <strong class="text-gray-700 uppercase font-semibold text-sm ">
                                                28-06-25 </strong>
                                        </p>
                                        <a href="" class="mt-2 flex gap-2 cursor-pointer font-bold">
                                            <svg width="24px" height="24px" viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg" fill="none">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path fill="#98c560" fill-rule="evenodd"
                                                        d="M8 3.517a1 1 0 011.62-.784l5.348 4.233a1 1 0 010 1.568l-5.347 4.233A1 1 0 018 11.983v-1.545c-.76-.043-1.484.003-2.254.218-.994.279-2.118.857-3.506 1.99a.993.993 0 01-1.129.096.962.962 0 01-.445-1.099c.415-1.5 1.425-3.141 2.808-4.412C4.69 6.114 6.244 5.241 8 5.042V3.517zm1.5 1.034v1.2a.75.75 0 01-.75.75c-1.586 0-3.066.738-4.261 1.835a8.996 8.996 0 00-1.635 2.014c.878-.552 1.695-.916 2.488-1.138 1.247-.35 2.377-.33 3.49-.207a.75.75 0 01.668.745v1.2l4.042-3.2L9.5 4.55z"
                                                        clip-rule="evenodd"></path>
                                                </g>
                                            </svg>
                                            <p class=" text-[#98c560] text-base">Redirigir</p>
                                        </a>
                                    </div>
                                    <div class="w-full p-6 max-md:py-2 text-gray-800 flex flex-col justify-between  ">
                                        <p class="mt-4  text-justify text-gray-500 text-sm ">
                                            es un término, generalmente de origen anglosajón, que se usa para referirse a un
                                            artículo científico, un trabajo de investigación o una publicación académica.
                                            Normalmente, este tipo de texto tiene como objetivo presentar los resultados de
                                            una investigación teórica o empírica, y está destinado a ser publicado en
                                            revistas especializadas
                                        </p>
                                    </div>

                                </div>

                                <div
                                    class="flex flex-col md:flex-row overflow-hidden relative                                          rounded-lg shadow-xl   mt-4  mx-2  bg-[#f4f4f4] max-w-6xl py-2 h-auto">

                                    <p
                                        class="absolute right-6 px-2 md:top-2   font-semibold bg-gray-200 p-1 text-gray-600 rounded-lg text-sm">
                                        Todas</p>
                                    <!-- información del paper -->
                                    <div class="max-h-96 max-w-[400px]   md:w-1/2 p-4">
                                        <a href=""
                                            class=" cursor-pointer hover:underline max-md:text-center relative group ">
                                            <h3 class="font-semibold text-lg mt-4 text-blue-400 text-justify ">
                                                jfkjd fkdkfkdk </h3>
                                            <!-- Titulo flotante completo -->
                                            <div
                                                class="absolute z-30 left-0 mb-3 w-max max-w-xs bg-white text-black text-xs rounded-md px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300 shadow-lg">
                                                Sample
                                            </div>

                                        </a>
                                        <div class="mt-5">
                                            <p class="text-gray-600 ">Autores:</p>
                                            <p class="autores italic text-base mb-3">
                                                Felix, Manuel</p>
                                        </div>
                                        <p class="doi mt-3"><span class="text-gray-600">
                                                Publisher: </span><span
                                                class="doi-link  text-gray-500 text-base">Alexis</span>
                                        </p>
                                        <p class="text-base  mt-3">
                                            <span class="text-gray-600  ">Publicado: </span>
                                            <strong class="text-gray-700 uppercase font-semibold text-sm ">
                                                28-06-25 </strong>
                                        </p>
                                        <a href="" class="mt-2 flex gap-2 cursor-pointer font-bold">
                                            <svg width="24px" height="24px" viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg" fill="none">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path fill="#98c560" fill-rule="evenodd"
                                                        d="M8 3.517a1 1 0 011.62-.784l5.348 4.233a1 1 0 010 1.568l-5.347 4.233A1 1 0 018 11.983v-1.545c-.76-.043-1.484.003-2.254.218-.994.279-2.118.857-3.506 1.99a.993.993 0 01-1.129.096.962.962 0 01-.445-1.099c.415-1.5 1.425-3.141 2.808-4.412C4.69 6.114 6.244 5.241 8 5.042V3.517zm1.5 1.034v1.2a.75.75 0 01-.75.75c-1.586 0-3.066.738-4.261 1.835a8.996 8.996 0 00-1.635 2.014c.878-.552 1.695-.916 2.488-1.138 1.247-.35 2.377-.33 3.49-.207a.75.75 0 01.668.745v1.2l4.042-3.2L9.5 4.55z"
                                                        clip-rule="evenodd"></path>
                                                </g>
                                            </svg>
                                            <p class=" text-[#98c560] text-base">Redirigir</p>
                                        </a>
                                    </div>
                                    <div class="w-full p-6 max-md:py-2 text-gray-800 flex flex-col justify-between  ">
                                        <p class="mt-4  text-justify text-gray-500 text-sm ">
                                            es un término, generalmente de origen anglosajón, que se usa para referirse a un
                                            artículo científico, un trabajo de investigación o una publicación académica.
                                            Normalmente, este tipo de texto tiene como objetivo presentar los resultados de
                                            una investigación teórica o empírica, y está destinado a ser publicado en
                                            revistas especializadas
                                        </p>
                                    </div>

                                </div>

                                <div
                                    class="flex flex-col md:flex-row overflow-hidden relative                                          rounded-lg shadow-xl   mt-4  mx-2  bg-[#f4f4f4] max-w-6xl py-2 h-auto">

                                    <p
                                        class="absolute right-6 px-2 md:top-2   font-semibold bg-gray-200 p-1 text-gray-600 rounded-lg text-sm">
                                        Todas</p>
                                    <!-- información del paper -->
                                    <div class="max-h-96 max-w-[400px]   md:w-1/2 p-4">
                                        <a href=""
                                            class=" cursor-pointer hover:underline max-md:text-center relative group ">
                                            <h3 class="font-semibold text-lg mt-4 text-blue-400 text-justify ">
                                                jfkjd fkdkfkdk </h3>
                                            <!-- Titulo flotante completo -->
                                            <div
                                                class="absolute z-30 left-0 mb-3 w-max max-w-xs bg-white text-black text-xs rounded-md px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300 shadow-lg">
                                                Sample
                                            </div>

                                        </a>
                                        <div class="mt-5">
                                            <p class="text-gray-600 ">Autores:</p>
                                            <p class="autores italic text-base mb-3">
                                                Felix, Manuel</p>
                                        </div>
                                        <p class="doi mt-3"><span class="text-gray-600">
                                                Publisher: </span><span
                                                class="doi-link  text-gray-500 text-base">Alexis</span>
                                        </p>
                                        <p class="text-base  mt-3">
                                            <span class="text-gray-600  ">Publicado: </span>
                                            <strong class="text-gray-700 uppercase font-semibold text-sm ">
                                                28-06-25 </strong>
                                        </p>
                                        <a href="" class="mt-2 flex gap-2 cursor-pointer font-bold">
                                            <svg width="24px" height="24px" viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg" fill="none">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path fill="#98c560" fill-rule="evenodd"
                                                        d="M8 3.517a1 1 0 011.62-.784l5.348 4.233a1 1 0 010 1.568l-5.347 4.233A1 1 0 018 11.983v-1.545c-.76-.043-1.484.003-2.254.218-.994.279-2.118.857-3.506 1.99a.993.993 0 01-1.129.096.962.962 0 01-.445-1.099c.415-1.5 1.425-3.141 2.808-4.412C4.69 6.114 6.244 5.241 8 5.042V3.517zm1.5 1.034v1.2a.75.75 0 01-.75.75c-1.586 0-3.066.738-4.261 1.835a8.996 8.996 0 00-1.635 2.014c.878-.552 1.695-.916 2.488-1.138 1.247-.35 2.377-.33 3.49-.207a.75.75 0 01.668.745v1.2l4.042-3.2L9.5 4.55z"
                                                        clip-rule="evenodd"></path>
                                                </g>
                                            </svg>
                                            <p class=" text-[#98c560] text-base">Redirigir</p>
                                        </a>
                                    </div>
                                    <div class="w-full p-6 max-md:py-2 text-gray-800 flex flex-col justify-between  ">
                                        <p class="mt-4  text-justify text-gray-500 text-sm ">
                                            es un término, generalmente de origen anglosajón, que se usa para referirse a un
                                            artículo científico, un trabajo de investigación o una publicación académica.
                                            Normalmente, este tipo de texto tiene como objetivo presentar los resultados de
                                            una investigación teórica o empírica, y está destinado a ser publicado en
                                            revistas especializadas
                                        </p>
                                    </div>

                                </div>

                                <div
                                    class="flex flex-col md:flex-row overflow-hidden relative                                          rounded-lg shadow-xl   mt-4  mx-2  bg-[#f4f4f4] max-w-6xl py-2 h-auto">

                                    <p
                                        class="absolute right-6 px-2 md:top-2   font-semibold bg-gray-200 p-1 text-gray-600 rounded-lg text-sm">
                                        Todas</p>
                                    <!-- información del paper -->
                                    <div class="max-h-96 max-w-[400px]   md:w-1/2 p-4">
                                        <a href=""
                                            class=" cursor-pointer hover:underline max-md:text-center relative group ">
                                            <h3 class="font-semibold text-lg mt-4 text-blue-400 text-justify ">
                                                jfkjd fkdkfkdk </h3>
                                            <!-- Titulo flotante completo -->
                                            <div
                                                class="absolute z-30 left-0 mb-3 w-max max-w-xs bg-white text-black text-xs rounded-md px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300 shadow-lg">
                                                Sample
                                            </div>

                                        </a>
                                        <div class="mt-5">
                                            <p class="text-gray-600 ">Autores:</p>
                                            <p class="autores italic text-base mb-3">
                                                Felix, Manuel</p>
                                        </div>
                                        <p class="doi mt-3"><span class="text-gray-600">
                                                Publisher: </span><span
                                                class="doi-link  text-gray-500 text-base">Alexis</span>
                                        </p>
                                        <p class="text-base  mt-3">
                                            <span class="text-gray-600  ">Publicado: </span>
                                            <strong class="text-gray-700 uppercase font-semibold text-sm ">
                                                28-06-25 </strong>
                                        </p>
                                        <a href="" class="mt-2 flex gap-2 cursor-pointer font-bold">
                                            <svg width="24px" height="24px" viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg" fill="none">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path fill="#98c560" fill-rule="evenodd"
                                                        d="M8 3.517a1 1 0 011.62-.784l5.348 4.233a1 1 0 010 1.568l-5.347 4.233A1 1 0 018 11.983v-1.545c-.76-.043-1.484.003-2.254.218-.994.279-2.118.857-3.506 1.99a.993.993 0 01-1.129.096.962.962 0 01-.445-1.099c.415-1.5 1.425-3.141 2.808-4.412C4.69 6.114 6.244 5.241 8 5.042V3.517zm1.5 1.034v1.2a.75.75 0 01-.75.75c-1.586 0-3.066.738-4.261 1.835a8.996 8.996 0 00-1.635 2.014c.878-.552 1.695-.916 2.488-1.138 1.247-.35 2.377-.33 3.49-.207a.75.75 0 01.668.745v1.2l4.042-3.2L9.5 4.55z"
                                                        clip-rule="evenodd"></path>
                                                </g>
                                            </svg>
                                            <p class=" text-[#98c560] text-base">Redirigir</p>
                                        </a>
                                    </div>
                                    <div class="w-full p-6 max-md:py-2 text-gray-800 flex flex-col justify-between  ">
                                        <p class="mt-4  text-justify text-gray-500 text-sm ">
                                            es un término, generalmente de origen anglosajón, que se usa para referirse a un
                                            artículo científico, un trabajo de investigación o una publicación académica.
                                            Normalmente, este tipo de texto tiene como objetivo presentar los resultados de
                                            una investigación teórica o empírica, y está destinado a ser publicado en
                                            revistas especializadas
                                        </p>
                                    </div>

                                </div>





                            </div>
                        </div>
                    </div>
                    <!-- BOTON DE VER MÁS PUBLICACIONES -->
                    <div class="flex justify-center mt-5 p-6 ">
                        <button id="load-more"
                            class="bg-[#98c560]  text-white text-lg font-bold py-3 px-6 rounded-lg hover:bg-[#66b308] transition-all duration-300">
                            VER MÁS PUBLICACIONES
                        </button>
                    </div>
                    <div class="mt-4 px-4" id="pagination-links">

                    </div>



                </div>
            </div>
        </div>

    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const drawer = document.getElementById('drawer-navigation');
            // Función para actualizar el sidebar segun resizing
            function updateDrawerPosition() {
                if (window.innerWidth >= 1150) {
                    // Vista de escritorio
                    drawer.style.transform = 'translateX(0)';
                    drawer.style.transition = 'none';
                } else {

                    if (drawer.style.transform !== 'translateX(0)') {
                        drawer.style.transition = 'transform 0.3s ease-in-out';
                    }
                }
            }

            // Cerrar
            function closeDrawer() {
                drawer.style.transform = 'translateX(-100%)';
            }

            // Mostrar
            function showDrawer() {
                drawer.style.transform = 'translateX(0)';
            }

            document.addEventListener('click', (event) => {
                if (window.innerWidth >= 1150) return;

                const isClickInside = drawer.contains(event.target);
                const isMenuButton = event.target.closest('#menuBtn');

                if (!isClickInside && !isMenuButton) {
                    closeDrawer();
                }
            });


            window.addEventListener('resize', updateDrawerPosition);

            // inicializar una llamada al principio
            updateDrawerPosition();


            document.querySelector('[data-drawer-show="drawer-navigation"]').addEventListener('click', showDrawer);
            document.querySelector('[data-drawer-hide="drawer-navigation"]').addEventListener('click', closeDrawer);


            // Guardar en localStorage
            function saveToLocalStorage(key, value) {
                localStorage.setItem(key, JSON.stringify(value));
            }

            // Cargar  de localStorage
            function loadFromLocalStorage(key) {
                const value = localStorage.getItem(key);
                return value ? JSON.parse(value) : null;
            }

        });
    </script>


@endsection
