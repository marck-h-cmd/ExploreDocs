<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> -->
    <!-- Splide CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Glass+Antiqua" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</head>

<body>

    <nav x-data="{ stickyMenu: false, openDropdown: null }"
        :class="{ 'bg-transparent opacity-0': stickyMenu, 'bg-[#1E5397] opacity-100': !stickyMenu }"
        @scroll.window="stickyMenu = (window.pageYOffset > 20); if(stickyMenu) openDropdown = null"
        @mouseenter="stickyMenu = false; openDropdown = null"
        @mouseleave="stickyMenu = (window.pageYOffset > 20); if(stickyMenu) openDropdown = null"
        class="transition-all duration-300 fixed top-0 w-full z-50 py-1 md:px-12" id="navbar">
        <div class="w-full flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img class="h-12 md:h-12 my-3" src="/images/logo-v2.png" alt="Logo" />
            </a>
            <button data-collapse-toggle="navbar-multi-level" type="button"
                class="text-white inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-multi-level" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto md:my-3" id="navbar-multi-level">
                <ul
                    class="flex flex-col font-medium p-4 space-y-1 md:space-y-0 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-11 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:items-center">
                    <li>
                        <a href="{{ route('home') }}"
                            class="text-white block py-2 px-3 rounded md:border-0 md:hover:text-[#98C560] hover:bg-[#98C560] md:hover:bg-transparent md:p-0 {{ request()->routeIs('home') ? 'text-white bg-[#98C560] md:bg-transparent md:text-[#98C560]' : 'text-white bg-transparent' }}">
                            Inicio
                        </a>
                    </li>

                    <!-- Dropdown Nosotros -->
                    <li class="relative">
                        <button id="dropdownNavbarLink"
                            class="flex items-center justify-between w-full py-2 px-3 text-white hover:bg-[#98C560] rounded-md md:hover:bg-transparent md:border-0 md:hover:text-[#98C560] md:p-0 md:w-auto {{ request()->routeIs('about', 'historia') ? 'text-white bg-[#98C560] md:bg-transparent md:text-[#98C560]' : 'text-white bg-transparent' }}"
                            @click="openDropdown = openDropdown === 'dropdownNavbar' ? null : 'dropdownNavbar'">
                            Nosotros
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdownNavbar" x-show="openDropdown === 'dropdownNavbar'"
                            class="z-10 font-normal rounded shadow w-44 bg-white absolute top-full mt-1 left-0"
                            @click="openDropdown = openDropdown === 'dropdownNavbar' ? null : 'dropdownNavbar'; if(openDropdown !== 'dropdownNavbar') openDropdown = 'dropdownNavbar'"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:leave="transition ease-in duration-150">
                            <ul class="py-2 text-sm" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="{{ route('about') }}"
                                        class="block px-4 py-2 hover:text-[#98C560] {{ request()->routeIs('about') ? 'text-[#98C560]' : 'text-black' }}">
                                        Acerca
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </li>



                    <!-- Dropdown Biblioteca -->
                    <li class="relative">
                        <button id="dropdownNavbarLink3"
                            class="flex items-center justify-between w-full py-2 px-3 text-white hover:bg-[#98C560] rounded-md md:hover:bg-transparent md:border-0 md:hover:text-[#98C560] md:p-0 md:w-auto {{ request()->routeIs(['biblioteca.papers.*', 'areas_proyectos_user', 'areas.proyectos', 'proyectos.show']) ? 'text-white bg-[#98C560] md:bg-transparent md:text-[#98C560]' : 'text-white bg-transparent' }}"
                            @click="openDropdown = openDropdown === 'dropdownNavbar3' ? null : 'dropdownNavbar3'">
                            Explore
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdownNavbar3" x-show="openDropdown === 'dropdownNavbar3'"
                            class="z-10 font-normal rounded shadow w-44 bg-white absolute top-full mt-1 left-0"
                            @click="openDropdown = openDropdown === 'dropdownNavbar3' ? null : 'dropdownNavbar3'; if(openDropdown !== 'dropdownNavbar3') openDropdown = 'dropdownNavbar3'"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:leave="transition ease-in duration-150">
                            <ul class="py-2 text-sm">
                                <li>
                                    <a href="{{ route('papers') }}"
                                        class="block px-4 py-2 hover:text-[#98C560] {{ request()->routeIs('biblioteca.papers.*') ? 'text-[#98C560]' : 'text-black' }}">
                                        Publicaciones
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('books') }}"
                                        class="block px-4 py-2 hover:text-[#98C560] {{ request()->routeIs('areas_proyectos_user', 'areas.proyectos', 'proyectos.show') ? 'text-[#98C560]' : 'text-black' }}">
                                        Libros
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>



                    <li>
                        <a href="{{ route('contacto') }}"
                            class="text-white block py-2 px-3 rounded md:border-0 md:px-4 bg-[#98C560] w-max md:w-auto">
                            Contacto
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- #CONTENT -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- CHATBOT-->
    <button class="chatbot-toggler">
        <span class="material-symbols-rounded">mode_comment</span>
        <span class="material-symbols-outlined">close</span>
    </button>
    <div class="chatbot">
        <header>
            <h2>Chatbot</h2>
            <span class="close-btn material-symbols-outlined">close</span>
        </header>
        <ul class="chatbox">
            <li class="chat incoming">
                <span class="material-symbols-outlined">smart_toy</span>
                <p>Hola 👋<br />En que te puedo ayudar?</p>
            </li>
        </ul>
        <div class="chat-input">
            <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
            <span id="send-btn" class="material-symbols-rounded">send</span>
        </div>
    </div>

    <!-- Footer -->
    <footer class="mt-auto flex justify-center bg-gray-800 text-white py-4">
        <div class="container-t mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Información de la empresa -->
                <div class="mb-4">
                    <h5 class="text-lg font-medium mb-2">Sobre Nosotros</h5>
                    <p class="text-sm">Somos un sitio dedicado a ofrecerte los mejores libros y publicaciones en todo
                        el
                        país.</p>
                </div>

                <!-- Enlaces rápidos -->
                <div class="mb-4">
                    <h5 class="text-lg font-medium mb-2">Enlaces Rápidos</h5>
                    <ul>
                        <li class="mb-1">
                            <a class="text-white hover:text-gray-300 flex items-center" href="{{ route('home') }}">
                                <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                    fill="currentColor">
                                    <path
                                        d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                                </svg>
                                Inicio
                            </a>
                        </li>
                        <li class="mb-1">
                            <a class="text-white hover:text-gray-300 flex items-center" href="{{ route('about') }}">
                                <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                    fill="currentColor">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                </svg>
                                Nosotros
                            </a>
                        </li>
                        <li class="mb-1">
                            <a class="text-white hover:text-gray-300 flex items-center"
                                href="{{ route('contacto') }}">
                                <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                    fill="currentColor">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                </svg>
                                Contacto
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Información de contacto -->
                <div class="mb-4">
                    <h5 class="text-lg font-medium mb-2">Contacto</h5>
                    <ul>
                        <li class="mb-1 flex items-center">
                            <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                fill="currentColor">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                            Av.San Pabl0, Springfield
                        </li>
                        <li class="mb-1 flex items-center">
                            <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                            +51 911 123 568
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                fill="currentColor">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                            </svg>
                            soporteExplore@gmail.com
                        </li>
                    </ul>
                </div>

                <!-- Redes Sociales -->
                <div class="mb-4">
                    <h5 class="text-lg font-medium mb-2">Síguenos</h5>
                    <div class="flex space-x-3">
                        <a href="https://www.facebook.com" target="_blank" class="text-white hover:text-gray-300">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                fill="currentColor">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>
                        </a>
                        <a href="https://twitter.com" target="_blank" class="text-white hover:text-gray-300">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                fill="currentColor">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com" target="_blank" class="text-white hover:text-gray-300">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                fill="currentColor">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com" target="_blank" class="text-white hover:text-gray-300">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                fill="currentColor">
                                <path
                                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <hr class="border-gray-600 my-4">

            <!-- Derechos de autor -->
            <div class="text-center">
                <p class="mb-0">&copy; 2025 ExploreDocs. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <div x-data="{ scrollTop: false }" x-init="window.addEventListener('scroll', () => scrollTop = window.scrollY > 50)" class="fixed bottom-24 right-4">
        <button x-show="scrollTop" x-cloak @click="window.scrollTo({top: 0, behavior: 'smooth'})"
            class="bg-[#98C560] text-white p-3 rounded-md shadow-lg focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
            </svg>
        </button>
    </div>


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- Splide JS -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>



</body>

</html>


<style>
    .navbar.hidden {
        top: -100px;
    }



    nav li a:hover {
        color: black !important;
        background-color: #e8ebea !important;
        border-radius: 10px;
        transition: all 0.5s;
    }


    .item img {
        width: 100%;
        max-width: 1200px;
        height: auto;
    }

    .carousel {
        box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12), 0 2px 4px -1px rgba(0, 0, 0, 0.3);
    }

    /*slidertag*/


    .carousel-caption {
        font-size: 1.5vw !important;
        font-family: 'Raleway', sans-serif !important;
    }

    /* CHATBOT */

    /* TOGGLER DEL BOTON */
    .chatbot-toggler {
        position: fixed;
        bottom: 30px;
        right: 16px;
        outline: none;
        border: none;
        height: 50px;
        width: 50px;
        display: flex;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: #1dd0e7;
        transition: all 0.2s ease;
    }

    /* ANIMACIÓN DEL X */
    body.show-chatbot .chatbot-toggler {
        transform: rotate(90deg);
    }

    .chatbot-toggler span {
        color: #fff;
        position: absolute;
    }

    .chatbot-toggler span:last-child,
    body.show-chatbot .chatbot-toggler span:first-child {
        opacity: 0;
    }

    body.show-chatbot .chatbot-toggler span:last-child {
        opacity: 1;
    }

    /* CONTAINER DEL CHATBOT */
    .chatbot {
        position: fixed;
        right: 35px;
        bottom: 90px;
        width: 420px;
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        opacity: 0;
        pointer-events: none;
        transform: scale(0.5);
        transform-origin: bottom right;
        box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1),
            0 32px 64px -48px rgba(0, 0, 0, 0.5);
        transition: all 0.1s ease;
        z-index: 900;
    }

    body.show-chatbot .chatbot {
        opacity: 1;
        pointer-events: auto;
        transform: scale(1);
    }

    .chatbot header {
        padding: 16px 0;
        position: relative;
        text-align: center;
        color: #fff;
        background: #1dd0e7;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .chatbot header span {
        position: absolute;
        right: 15px;
        top: 50%;
        display: none;
        cursor: pointer;
        transform: translateY(-50%);
    }

    header h2 {
        font-size: 1.4rem;
    }

    /* CAJA DE TEXTO */
    .chatbot .chatbox {
        overflow-y: auto;
        height: 510px;
        padding: 30px 20px 100px;
    }

    .chatbot :where(.chatbox, textarea)::-webkit-scrollbar {
        width: 6px;
    }

    .chatbot :where(.chatbox, textarea)::-webkit-scrollbar-track {
        background: #fff;
        border-radius: 25px;
    }

    .chatbot :where(.chatbox, textarea)::-webkit-scrollbar-thumb {
        background: #ccc;
        border-radius: 25px;
    }

    .chatbox .chat {
        display: flex;
        list-style: none;
    }

    .chatbox .outgoing {
        margin: 20px 0;
        justify-content: flex-end;
    }

    .chatbox .incoming span {
        width: 32px;
        height: 32px;
        color: #fff;
        cursor: default;
        text-align: center;
        line-height: 32px;
        align-self: flex-end;
        background: #1dd0e7;
        border-radius: 4px;
        margin: 0 10px 7px 0;
    }

    .chatbox .chat p {
        white-space: pre-wrap;
        padding: 12px 16px;
        border-radius: 10px 10px 0 10px;
        max-width: 75%;
        color: #fff;
        font-size: 0.95rem;
        background: #1dd0e7;
    }

    .chatbox .incoming p {
        border-radius: 10px 10px 10px 0;
    }

    .chatbox .chat p.error {
        color: #721c24;
        background: #f8d7da;
    }

    .chatbox .incoming p {
        color: #000;
        background: #f2f2f2;
    }

    .chatbot .chat-input {
        display: flex;
        gap: 5px;
        position: absolute;
        bottom: 0;
        width: 100%;
        background: #fff;
        padding: 3px 20px;
        border-top: 1px solid #ddd;
    }

    .chat-input textarea {
        height: 55px;
        width: 100%;
        border: none;
        outline: none;
        resize: none;
        max-height: 180px;
        padding: 15px 15px 15px 0;
        font-size: 0.95rem;
    }

    .chat-input span {
        align-self: flex-end;
        color: #1dd0e7;
        cursor: pointer;
        height: 55px;
        display: flex;
        align-items: center;
        visibility: hidden;
        font-size: 1.35rem;
    }

    .chat-input textarea:valid~span {
        visibility: visible;
    }

    @media (max-width: 490px) {
        .chatbot-toggler {
            right: 20px;
            bottom: 20px;
        }

        .chatbot {
            right: 0;
            bottom: 0;
            height: 100%;
            border-radius: 0;
            width: 100%;
        }

        .chatbot .chatbox {
            height: 90%;
            padding: 25px 15px 100px;
        }

        .chatbot .chat-input {
            padding: 5px 15px;
        }

        .chatbot header span {
            display: block;
        }
    }
</style>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile menu toggle
        const navToggle = document.getElementById('nav-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        if (navToggle && mobileMenu) {
            navToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Mobile dropdown toggles
        const dropdownButtons = document.querySelectorAll('#mobile-menu button');
        dropdownButtons.forEach(button => {
            button.addEventListener('click', function() {
                const dropdown = this.nextElementSibling;
                dropdown.classList.toggle('hidden');
            });
        });
    });

    window.addEventListener('load', function() {
        const navbarHeight = document.getElementById('navbar').offsetHeight;
        document.getElementById('main-content').style.marginTop = `${navbarHeight}px`;
    });

    // Actualizar en caso de que el tamaño de la ventana cambie
    window.addEventListener('resize', function() {
        const navbarHeight = document.getElementById('navbar').offsetHeight;
        document.getElementById('main-content').style.marginTop = `${navbarHeight}px`;
    });

    const chatbotToggler = document.querySelector(".chatbot-toggler");
    const closeBtn = document.querySelector(".close-btn");
    const chatbox = document.querySelector(".chatbox");
    const chatInput = document.querySelector(".chat-input textarea");
    const sendChatBtn = document.querySelector(".chat-input span");

    let userMessage = null;
    const inputInitHeight = chatInput.scrollHeight;

    // API configuration
    const API_KEY = "{{ env('API_KEY') }}"; 
    const API_URL = `https://openrouter.ai/api/v1/chat/completions`;
    const MODEL = 'meta-llama/llama-3.3-70b-instruct:free'
    const createChatLi = (message, className) => {
        const chatLi = document.createElement("li");
        chatLi.classList.add("chat", `${className}`);
        let chatContent = className === "outgoing" ? `<p></p>` :
            `<span class="material-symbols-outlined">smart_toy</span><p></p>`;
        chatLi.innerHTML = chatContent;
        chatLi.querySelector("p").textContent = message;
        return chatLi;
    };

    const generateResponse = async (chatElement) => {
        const messageElement = chatElement.querySelector("p");


        const requestOptions = {
            method: "POST",
            headers: {
                'Authorization': `Bearer ${API_KEY}`,
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                model: MODEL,
                messages: [{
                        role: 'system',
                        content: "Tu nombre es DeepDocs, un asistente virtual de la pagina repositorio ExploreDocs, que es una pagina de libros,tesis, papers, Brindas Información de lo que trata y tus mensajes son medio cortos y consisos y das sugerencias de libros a veces",
                    },
                    {
                        role: "user",
                        content: userMessage,
                    },
                ],
            }),
        };


        try {
            const response = await fetch(API_URL, requestOptions);
            const data = await response.json();
            if (!response.ok) throw new Error(data.error.message);


            messageElement.textContent = data.choices[0].message.content;
        } catch (error) {
            messageElement.classList.add("error");
            messageElement.textContent = error.message;
        } finally {
            chatbox.scrollTo(0, chatbox.scrollHeight);
        }
    };

    const handleChat = () => {
        userMessage = chatInput.value.trim();
        if (!userMessage) return;


        chatInput.value = "";
        chatInput.style.height = `${inputInitHeight}px`;
        chatbox.appendChild(createChatLi(userMessage, "outgoing"));
        chatbox.scrollTo(0, chatbox.scrollHeight);

        setTimeout(() => {

            const incomingChatLi = createChatLi("Pensando...", "incoming");
            chatbox.appendChild(incomingChatLi);
            chatbox.scrollTo(0, chatbox.scrollHeight);
            generateResponse(incomingChatLi);
        }, 600);
    };

    chatInput.addEventListener("input", () => {
        chatInput.style.height = `${inputInitHeight}px`;
        chatInput.style.height = `${chatInput.scrollHeight}px`;
    });

    chatInput.addEventListener("keydown", (e) => {
        if (e.key === "Enter" && !e.shiftKey && window.innerWidth > 800) {
            e.preventDefault();
            handleChat();
        }
    });

    sendChatBtn.addEventListener("click", handleChat);
    closeBtn.addEventListener("click", () => document.body.classList.remove("show-chatbot"));
    chatbotToggler.addEventListener("click", () => document.body.classList.toggle("show-chatbot"));
</script>
