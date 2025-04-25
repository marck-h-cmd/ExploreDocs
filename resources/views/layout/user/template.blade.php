<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Splide CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <!--Bootstrap MCDN-->
    <link href="https://fonts.googleapis.com/css?family=Glass+Antiqua" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />

</head>

<body>

    <div class="top-hover-area"></div>
    <!-- Nav -->
    <nav class="navbar navbar-expand-lg  fixed-top bg-body-tertiary bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="/images/logo.png" alt="Logoimg" class=" Logoimg" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Browse
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Libros</a></li>
                            <li><a class="dropdown-item" href="#">Tesis</a></li>
                            <li><a class="dropdown-item" href="#">Papers</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Explore
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Conferencias</a></li>
                            <li><a class="dropdown-item" href="#">Eventos</a></li>
                            <li><a class="dropdown-item" href="#">Noticias</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <main class="main-content">
        @yield('content')
    </main>

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

    <footer class="mt-auto d-flex justify-content-center bg-dark text-white pt-4 pb-4">
        <div class="container">
            <div class="row">
                <!-- Información de la empresa -->
                <div class="col-md-3 mb-3">
                    <h5>Sobre Nosotros</h5>
                    <p>Somos un sitio dedicado a ofrecerte los mejores libros y publicaciones en todo el país.</p>
                </div>

                <!-- Enlaces rápidos -->
                <div class="col-md-3 mb-3">
                    <h5>Enlaces Rápidos</h5>
                    <ul class="list-unstyled">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('home')}}">
                                <i class="bi bi-house"></i> Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('about')}}">
                                <i class="bi bi-info-circle"></i> Nosotros
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">
                                <i class="bi bi-envelope"></i> Contacto
                            </a>
                        </li>

                    </ul>
                </div>

                <!-- Información de contacto -->
                <div class="col-md-3 mb-3">
                    <h5>Contacto</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt-fill"></i> Av.San Pabl0, Springfield</li>
                        <li><i class="bi bi-telephone-fill"></i> +51 911 123 568</li>
                        <li><i class="bi bi-envelope-fill"></i> soporteExplore@gmail.com</li>
                    </ul>
                </div>

                <!-- Redes Sociales -->
                <div class="col-md-3 mb-3">
                    <h5>Síguenos</h5>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="https://www.facebook.com" target="_blank"
                                class="text-white"><i class="bi bi-facebook fs-4"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com" target="_blank" class="text-white"><i
                                    class="bi bi-twitter fs-4"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com" target="_blank"
                                class="text-white"><i class="bi bi-instagram fs-4"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com" target="_blank"
                                class="text-white"><i class="bi bi-linkedin fs-4"></i></a></li>
                    </ul>
                </div>
            </div>

            <hr class="bg-light">

            <!-- Derechos de autor -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0">&copy; 2025 ExploreDocs. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Splide JS -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>



</body>

</html>


<style>
   
    nav a {
        font-family: 'Raleway', sans-serif !important;
        font-weight: bold;
        font-size: 1em;
        color: grey !important;
        transition: all 0.5s ease;
    }

    .navbar {
      transition: top 0.3s ease;
    }

    .navbar.hidden {
      top: -100px;
    }

    .top-hover-area {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 20px;
      z-index: 1051; 
    }

    nav li a:hover {
        color: black !important;
        background-color: #56e2d7 !important;
    }

   
    .container {
        margin-right: 2% !important;
        margin-left: 2% !important;
        width: auto !important;
    }

    /*footer*/
    footer {
        background-color: #F9F8EB;
        box-shadow: 0px 2px 29px 0px rgba(50, 50, 50, 0.5);

    }

    h4 {
        margin: 0 !important;
        padding: 0 !important;
        text-align: center !important;
    }

  

    /*footer*/
    /*home*/
    /*slider*/
    .item img {
        width: 100%;
        max-width: 1200px;
        height: auto;
    }

    .carousel {
        box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12), 0 2px 4px -1px rgba(0, 0, 0, 0.3);
    }

    /*slidertag*/
    h1 {
        text-align: center;
        text-shadow: 2px 4px 3px rgba(0, 0, 0, 0.3);
        z-index: 5;
        width: 100%;
        font-size: 4vw !important;
        height: auto;
        color: black !important;
        font-family: 'Glass Antiqua', serif !important;
    }

    .carousel-caption {
        font-size: 1.5vw !important;
        font-family: 'Raleway', sans-serif !important;
    }

    /*Content*/
    .contentp {
        font-size: 1.2vw !important;
        font-family: 'Raleway', sans-serif !important;
        text-align: justify !important;
        line-height: 1.5 !important;
        color: white !important;
    }

    h2 {
        font-size: 2.2vw !important;
        color: white !important;
        font-family: 'Glass Antiqua', cursive !important;
        text-align: center !important;
        font-weight: bold !important;
    }

    .homecont {
        margin-left: 65px !important;
        margin-top: 80px !important;
        margin-right: 65px !important;
    }

   
    .row {
        max-width: 100%;
        z-index: 30;
    }

    
 

    /*Landmark*/
    #toggle-em,
    #toggle-oh,
    #toggle-ct,
    #toggle-ap,
    #toggle-al {
        display: none;
    }

    
    .labelbtn {
        font-family: Agency FB;
        font-weight: bold;
        font-size: 25px;
        cursor: pointer;
        display: block;
        text-align: center;

    }

    .labelbtn:hover {
        color: #CFD8DC;
    }

    .eeculimg {

        box-shadow: 0px -4px 91px -31px rgba(0, 0, 0, 0.75);
    }

    

    /* CHATBOT */

    .chatbot-toggler {
        position: fixed;
        bottom: 30px;
        right: 35px;
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
    let lastScrollTop = 0;
    const navbar = document.querySelector('.navbar');
    const hoverArea = document.querySelector('.top-hover-area');

    window.addEventListener('scroll', () => {
      const currentScroll = window.scrollY;
      if (currentScroll > lastScrollTop) {
        navbar.classList.add('hidden');  // scroll hacia abajo
    }else if(currentScroll==0){
        navbar.classList.remove('hidden'); // scroll hacia arriba
    }

      lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // calculo del scroll
    });

    hoverArea.addEventListener('mouseenter', () => {
      navbar.classList.remove('hidden'); // mostrar navbar al pasar el mouse por arriba
    });
  </script>

<script>
    const chatbotToggler = document.querySelector(".chatbot-toggler");
    const closeBtn = document.querySelector(".close-btn");
    const chatbox = document.querySelector(".chatbox");
    const chatInput = document.querySelector(".chat-input textarea");
    const sendChatBtn = document.querySelector(".chat-input span");


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

    //ssendChatBtn.addEventListener("click", handleChat);
    closeBtn.addEventListener("click", () => document.body.classList.remove("show-chatbot"));
    chatbotToggler.addEventListener("click", () => document.body.classList.toggle("show-chatbot"));




</script>






















































<script>
    /*
    const chatbotToggler = document.querySelector(".chatbot-toggler");
    const closeBtn = document.querySelector(".close-btn");
    const chatbox = document.querySelector(".chatbox");
    const chatInput = document.querySelector(".chat-input textarea");
    const sendChatBtn = document.querySelector(".chat-input span");

    let userMessage = null;
    const inputInitHeight = chatInput.scrollHeight;

    // API configuration
    const API_KEY = ""; // Your API key here
    const API_URL = `https://openrouter.ai/api/v1/chat/completions`;
    const MODEL = 'meta-llama/llama-3.3-70b-instruct:free'
    const createChatLi = (message, className) => {
        // Create a chat <li> element with passed message and className
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
        console.log('user', userMessage)

        // Define the properties and message for the API request
        const requestOptions = {
            method: "POST",
            headers: {
                'Authorization': `Bearer ${API_KEY}`,
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                model: MODEL,
                messages: [{
                    role: "user",
                    content: userMessage,
                }, ],
            }),
        };

        // Send POST request to API, get response and set the reponse as paragraph text
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
            // Display "Thinking..." message while waiting for the response
            const incomingChatLi = createChatLi("Thinking...", "incoming");
            chatbox.appendChild(incomingChatLi);
            chatbox.scrollTo(0, chatbox.scrollHeight);
            generateResponse(incomingChatLi);
        }, 600);
    };

    chatInput.addEventListener("input", () => {
        // Adjust the height of the input textarea based on its content
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
    chatbotToggler.addEventListener("click", () => document.body.classList.toggle("show-chatbot"));  */
</script>
