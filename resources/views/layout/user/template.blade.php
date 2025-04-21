<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <!--<link href="https://fonts.googleapis.com/css?family=Glass+Antiqua" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <!--Bootstrap MCDN-->
    <link href="https://fonts.googleapis.com/css?family=Glass+Antiqua" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

</head>

<body>
      <!-- Nav -->
    <nav class="navbar navbar-expand-lg fixed-top bg-light" id="eenavbar">
        <div class="container ">
          <!-- Logo -->
          <a class="navbar-brand" href="#">
            <img src="eelogo5.png" alt="Logoimg" class="img-fluid Logoimg" height="40">
          </a>
      
          <!-- Hamburger Button -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <!-- Collapsible Navigation -->
          <div class="collapse navbar-collapse eenavbar" id="myNavbar">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
      
              <!-- Browse Dropdown -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="browseDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Browse
                </a>
                <ul class="dropdown-menu" aria-labelledby="browseDropdown">
                  <li><a class="dropdown-item" href="ee-landmarks-en.html">Landmarks</a></li>
                  <li><a class="dropdown-item" href="ee-spirtual-en.html">Spiritual</a></li>
                </ul>
              </li>
      
              <!-- Explore Dropdown -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="exploreDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Explore
                </a>
                <ul class="dropdown-menu" aria-labelledby="exploreDropdown">
                  <li><a class="dropdown-item" href="#">Adventure</a></li>
                  <li><a class="dropdown-item" href="#">Sport</a></li>
                </ul>
              </li>
      
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>



    <main class="main-content">
        @yield('content')
    </main>

    <footer>
        <div id="contactfoot">
            <h3 class="footinfo">Contact Us:</h3>
            <p class="footinfo"> Via Phone:
                <br>01151537797
                <br>01143214535
                <br>

            </p>
            <h3>Email Us:</h3>
        </div>
        <div id="Addressfoot">
            <h3 class="footinfo">Address</h3>
            56, Mohammed Mokaled street<br>
            8th district, nasrcity,<br>
            Cairo, Egypt.
        </div>
        <div id="followfoot">
            <h3>Follow us:</h3>
            <img src="tw.png" alt="tw">
            <img src="fb.png" alt="fb">
            <img src="rss.png" alt="rss">
            <br>
            <a href="" class="pfoot">Click for Site Map</a>
        </div>
        <h4>© 2025 Group-21.ICS-BUE, All rights reserved.</h4>
    </footer>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>


<style>
    /*universal*/


    /*NavBar*/
    #eenavbar {
        background-color: #F9F8EB;
        border: 0;
        box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12), 0 2px 4px -1px rgba(0, 0, 0, 0.3);

    }

    nav a {
        font-family: 'Raleway', sans-serif !important;
        font-weight: bold;
        font-size: 1em;
        color: grey !important;
        transition: all 0.5s ease;
    }

    nav li a:hover {
        color: black !important;
        background-color: #FFE1B6 !important;
    }

    .selectedee {
        background-color: #FFE1B6 !important;
        color: darkgrey !important;
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

    #contactfoot,
    #Addressfoot,
    #followfoot {
        float: left;
        width: 33%;
        text-align: center;
        height: 150px;
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

    /*spirtual*/
    .spirtualcont {
        top: 10%;
    }

    .row {
        max-width: 100%;
        z-index: 30;
    }

    .eeboxsp {
        border-radius: 9px !important;
        background-color: #B0BEC5 !important;
        box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12), 0 2px 4px -1px rgba(0, 0, 0, 0.3);
    }

    .eeboxsph5 {
        font-family: Agency FB !important;
        font-size: 25px;
    }

    #eespheadtag {
        font-family: Agency FB !important;
        font-size: 70px !important;
    }

    #eesppStag {
        font-family: Courier New !important;
        text-align: justify !important;
        line-height: 1 !important;
        color: #455A64 !important;
        font-size: 5vh !important
    }

    .eespmodalwin {
        background-color: #B0BEC5 !important;
    }

    .spmodalh {
        color: #263238 !important;
        font-size: 30px !important;
        font-weight: bold;
    }

    .spmodalp {
        font-family: Courier New !important;
        text-align: center !important;
        line-height: 1 !important;
        color: #455A64 !important;
        font-size: 18px !important
    }

    #map,
    #googleMap {
        height: 400px;
        width: 100%;
    }

    /*Landmark*/
    #toggle-em,
    #toggle-oh,
    #toggle-ct,
    #toggle-ap,
    #toggle-al {
        display: none;
    }

    .eecltogcontem,
    .eecltogcontem,
    .eecltogcontoh,
    .eecltogcontct,
    .eecltogcontal,
    .eecltogcontap {
        background-color: #CFD8DC;
        width: 60%;
        overflow: hidden;
        max-height: 0;
        padding: 0;
        margin: 0 auto;
        -webkit-transition: all 2s ease;
        box-shadow: inset 0px 0px 10px 0px #ABABAB;
        -webkit-box-shadow: inset 0px 0px 10px 0px #ABABAB;
        -moz-box-shadow: inset 0px 0px 10px 0px #ABABAB;
        -o-box-shadow: inset 0px 0px 10px 0px #ABABAB;
    }

    #toggle-em:checked~.eecltogcontem {
        max-height: 100vh;
    }

    #toggle-oh:checked~.eecltogcontoh {
        max-height: 100vh;
    }

    #toggle-ct:checked~.eecltogcontct {
        max-height: 100vh;
    }

    #toggle-al:checked~.eecltogcontal {
        max-height: 100vh;
    }

    #toggle-ap:checked~.eecltogcontap {
        max-height: 100vh;
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

    .h2cltogp {
        font-family: Courier New !important;
        text-align: center !important;
        line-height: 1 !important;
        color: #455A64 !important;
        font-size: 18px !important
    }

    .natimg {
        max-width: 80%;
        margin-right: 10%;
        margin-left: 10%;
        margin-top: 10%;
        padding: 0;
        border-radius: 2vh 2vh 0 0;
        -webkit-box-shadow: 0px -2px 15px 2px rgba(0, 0, 0, 0.12);
        -moz-box-shadow: 0px -2px 15px 2px rgba(0, 0, 0, 0.12);
        box-shadow: 0px -2px 15px 2px rgba(0, 0, 0, 0.12);

    }

    #naturebod {
        background: #263238 !important;
        position: relative;
    }

    #nat2back {
        background: #343434;
        z-index: 2;
        max-width: 100%;
        height: 1000px;
        box-shadow: 0px -1px 52px -11px rgba(0, 0, 0, 1);
    }

    #natimgtag {
        font: 400 100px/1.3 'Berkshire Swash', Helvetica, sans-serif;
        color: white;
        text-shadow: 2px 4px 3px rgba(0, 0, 0, 0.3);
        position: absolute;
        top: 35vw !important;
        align-content: center;
        z-index: 3;

    }

    #covconttt {
        margin-top: 15%;

    }

    #covnav {
        text-align: center;
    }
</style>
