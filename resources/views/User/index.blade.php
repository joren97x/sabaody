<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/logo.png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="css/custom.css"> -->
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/css/newindex.css') }}">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script defer src="js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <title>Sabaody Resort</title>
  <style>
    .navbar a:hover {
      color: #D6DBDF;
    }

    .navbar-nav {
      font-family: poppins;
      font-size: 1.5em;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .navbar-nav a {
      color: black;
      margin-right: 20px;
    }

    .dropdown-menu a:hover{
      color: white;
      background-color: #D6DBDF;
    }

    .header {
      background-image: url('../images/bg2.jpg');
      background-size: cover;
      background-position: center;
      background-attachment: fixed; 
      height: 1000px;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      position: relative;
      color: white;
    }

    .header-title {
      font-size: 5em;
      margin: 0;
      margin-top: 500px;
    }

    .header-text {
      font-size: 1.5em;
      margin-top: 20px;
    }

    .about{
      font-family: lucida calligraphy;
    }

    .about p{
      font-size: 5em;
      font-family: aparajita;
    }
    .about h4{
      font-family: georgia;
    }

    .nav-custom .nav-item {
        border-radius: 10px;
    }

    .nav-custom .nav-link {
        color: black;
        background-color: #e9ecef;
        border: 1px solid black;
        border-radius: 10px;
        padding: 10px 15px;
        margin-bottom: 5px;
        transition: transform 0.3s ease;
        font-family: poppins;
        font-size: 2em;
    }

    .nav-custom .nav-link.active {
        color: black;
        background-color: white;
        border-color: black;
        transform: scale(1.1); /* Enlarge active tab */
    }

    .nav-custom .nav-link:hover {
        background-color: #e9ecef;
        color: #333;
        transform: scale(1.05);
        border-color: black; /* Zoom in on hover */
    }

    .nav-custom .nav-link:focus {
        outline: none;
        box-shadow: none;
    }

    .services{
      font-family: lucida calligraphy;
    }

    .services p{
      font-size: 5em;
      font-family: aparajita;
    }

    .service .card{
      transition: all 0.3s ease;
    }

    .service .card:hover{
      transform: scale(1.1);
    }

    .room{
      font-family: lucida calligraphy;
    }

    .room p{
      font-size: 5em;
      font-family: aparajita;
    }

    .overlay-description {
      position: absolute;
      bottom: 0;
      left: 0;
      background-color: white;
      color: black;
      padding: 20px;
      width: 50%;
      margin-left: 318px;
    }

    .text-warning{
      margin-left: 20px;
      font-size: 1.5em;
    }

    .footer {
      background-color: black;
      width: 100%;
      text-align: left;
      font-family: sans-serif;
      font-weight: bold;
      font-size: 16px;
      padding: 50px;
      margin-top: 50px;
    }

    .footer .footer-left,
    .footer .footer-center,
    .footer .footer-right {
      display: inline-block;
      vertical-align: top;
    }


    /* footer left*/

    .footer .footer-left {
      width: 33%;
      padding-right: 15px;
    }

    .footer .about {
      line-height: 20px;
      color: #ffffff;
      font-size: 13px;
      font-weight: normal;
      margin: 0;
    }

    .footer .about span {
      display: block;
      color: #ffffff;
      font-size: 14px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .footer .icons {
      margin-top: 25px;
    }

    .footer .icons a {
      display: inline-block;
      width: 35px;
      height: 35px;
      cursor: pointer;
      background-color: #33383b;
      border-radius: 2px;
      font-size: 20px;
      color: #ffffff;
      text-align: center;
      line-height: 35px;
      margin-right: 3px;
      margin-bottom: 5px;
      transition: all 0.3s ease;  
    }

    .footer .icons a:hover{

      transform: scale(1.2);
    }

    /* footer center*/

    .footer .footer-center {
      width: 30%;
    }

    .footer .footer-center i {
      color: white;
      font-size: 25px;
      width: 38px;
      height: 38px;
      text-align: center;
      line-height: 42px;
      margin: 10px 15px;
      vertical-align: middle;
    }

    .footer .footer-center p {
      display: inline-block;
      color: #ffffff;
      vertical-align: middle;
      margin: 0;
    }

    .footer .footer-center p span {
      display: block;
      font-weight: normal;
      font-size: 14px;
      line-height: 2;
    }

    .footer .footer-center p a {
      color: #0099ff;
      text-decoration: none;
    }


    /* footer right*/

    .footer .footer-right {
      width: 35%;
    }

    .footer .menu {
      color: #818181;
      margin: 20px 0 12px;
      padding: 0;
    }

    .footer .menu a {
      display: inline-block;
      line-height: 1.8;
      text-decoration: none;
      color: inherit;
    }

    .footer .menu a:hover {
      color: white;
    }

    .footer .name {
      color: #0099ff;
      font-size: 15px;
      font-weight: normal;
      margin: 0;
    }

    @media (max-width: 767px) {
      .footer {
        font-size: 14px;
      }
      .footer .footer-left,
      .footer .footer-center,
      .footer .footer-right {
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: center;
      }
      .footer .footer-center i {
        margin-left: 0;
      }
    }

    .reading-mode {
      background-color: rgba(255, 255, 204, 0.5) !important;
    }

  </style>
</head>
<body id="content">
<div class="container-fluid" id="home">
    <div class="row">
        <div class="col-3">
        </div>
        <div class="col-6 d-flex justify-content-center align-items-center">
            <img src="images/logo1.png" height="110">
        </div>
        <div class="col-3 d-flex justify-content-center align-items-center">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="readingModeSwitch">
                <label class="form-check-label" for="readingModeSwitch">Reading Mode</label>
            </div>
        </div>
    </div>
</div>
<hr>
<nav class="navbar navbar-expand-lg">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto d-flex justify-content-center">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                   aria-expanded="false">Language</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="index.php">English</a></li>
                    <li><a class="dropdown-item" href="#" onclick="changeLanguage('spanish')">Spanish</a></li>
                    <li><a class="dropdown-item" href="#" onclick="changeLanguage('filipino')">Filipino</a></li>
                    <li><a class="dropdown-item" href="#" onclick="changeLanguage('german')">German</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about" id="nav-about">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#services" id="nav-services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/rooms/single-room" id="nav-room">Room</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact" id="nav-contact">contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/report" id="nav-report">report</a>
            </li>
        </ul>
    </div>
</nav>

<div class="header">
    <div class="container-fluid">
        <h1 class="header-title" id="header-title">
            SABAODY RESORT
        </h1>
        <p class="header-text" style="color: #F2F3F4;" id="header-text">Where Waves Meet Wellness</p>
    </div>
</div>


<div class="container-fluid p-5">
    <div class="about" id="about">
        <div class="title text-center">
            <h1 id="about-title">About Us</h1>
        </div>
        <div class="text">
            <p class="text-center" id="about-phrase">A best place to enjoy your life</p>
            <h4 id="about-text">Experience the epitome of luxury and relaxation at our resort, where every moment is a celebration of
                life's finest pleasures. Nestled in paradise, our haven offers exquisite accommodations, world-class
                amenities, and unparalleled hospitality, ensuring an unforgettable escape. From indulgent spa treatments
                to thrilling outdoor adventures, every desire is catered to, promising a truly immersive and rejuvenating
                experience. Immerse yourself in the beauty of nature, savor gourmet cuisine, and create lasting memories
                with loved ones against a backdrop of breathtaking sunsets and pristine beaches.</h4>
        </div>
    </div>
    <br><br>

    <div class="row g-5">
        <div class="col-md-3">
            <ul class="nav nav-tabs flex-column nav-custom text-center">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#pool" id="about-pool">Pool</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#sea" id="about-sea">Sea</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#view" id="about-view">View</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#lobby" id="about-lobby">Lobby</a>
                </li>
            </ul>
        </div>

        <div class="col-md-9">
            <div class="tab-content">
                <div id="pool" class="tab-pane show active">
                    <div class="card mb-3 border-0">
                        <img src="images/pool.jpg" class="img-fluid rounded-start" alt="pool">
                    </div>
                </div>
                <div id="sea" class="tab-pane">
                    <div class="card mb-3 border-0">
                        <img src="images/sea.jpg" class="img-fluid rounded-start" alt="sea">
                    </div>
                </div>
                <div id="view" class="tab-pane">
                    <div class="card mb-3 border-0">
                        <img src="images/view.jpg" class="img-fluid rounded-start" alt="view">
                    </div>
                </div>
                <div id="lobby" class="tab-pane">
                    <div class="card mb-3 border-0">
                        <img src="images/lobby.jpg" class="img-fluid rounded-start" alt="lobby">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid p-5" style="background: linear-gradient(to bottom, #F2F4F4, #424949);">
    <div class="services" id="services">
        <div class="title text-center">
            <h1 id="service-title">Services</h1>
        </div>
        <div class="text">
            <p class="text-center" id="service-text">Make yor stay memorable</p>
        </div>
    </div>
    <div class="service">
        <div class="row g-5">
            <div class="col-3">
                <div class="card">
                    <div class="card-icon text-center p-2">
                        <i class="fa-solid fa-person-swimming" style="font-size: 5em;"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center" id="service1-title">Recreational Activities</h5>
                        <p class="card-text" id="service1-text">From water sports such as snorkeling, kayaking, and paddleboarding to
                            land-based activities like tennis, cycling tours, and hiking trails, our resort offers a range
                            of experiences for every enthusiast.</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card mt-5">
                    <div class="card-icon text-center p-2">
                        <i class="fa-solid fa-music" style="font-size: 5em;"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center" id="service2-title">Entertainment and Events</h5>
                        <p class="card-text" id="service2-text">Enjoy enchanting evenings filled with vibrant live music, captivating dance performances, and lively themed parties that celebrate the local culture, ensuring an array of unforgettable moments during your stay.</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-icon text-center p-2">
                        <i class="fa-solid fa-handshake-angle" style="font-size: 5em;"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center" id="service3-title">Customer Support</h5>
                        <p class="card-text" id="service3-text">Rest assured, our dedicated team ensures round-the-clock assistance is readily available, standing by to promptly address any queries or provide help whenever needed during your stay.</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card mt-5">
                    <div class="card-icon text-center p-2">
                        <i class="fa-solid fa-wifi" style="font-size: 5em;"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center" id="service4-title">Wi-Fi Access</h5>
                        <p class="card-text" id="service4-text">Enjoy seamless connectivity throughout our premises with complimentary Wi-Fi access. Stay connected hassle-free, whether you're relaxing in your room, lounging by the pool, or sitting to our lobby.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br>

<div class="container mt-5">
    <div class="room">
        <div class="title text-center">
            <h1 id="explore-title">Explore</h1>
        </div>
        <div class="text">
            <p class="text-center" id="explore-text">Rooms We Offer</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card position-relative border-0">
                <img src="https://images.wsj.net/im-671420?width=700&height=934" class="card-img" alt="...">
                <div class="overlay-description">
                    <h2 class="card-title">Family Room</h2>
                    <p class="card-text text-muted">500 sqm | Max. 10 Guest</p>
                    <hr>
                    <p class="card-text">
                        <span>From</span>
                        <span class="text-warning">&#8369; 10,000.00 / night</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row g-5">
                <div class="col-12">
                    <div class="card position-relative border-0">
                        <img src="images/single-room.png" class="card-img" alt="...">
                        <div class="overlay-description">
                            <h2 class="card-title">Family Room</h2>
                            <p class="card-text text-muted">500 sqm | Max. 10 Guest</p>
                            <hr>
                            <p class="card-text">
                                <span>From</span>
                                <span class="text-warning">&#8369; 10,000.00 / night</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card position-relative border-0">
                        <img src="images/double-room.png" class="card-img" alt="...">
                        <div class="overlay-description">
                            <h2 class="card-title">Family Room</h2>
                            <p class="card-text text-muted">500 sqm | Max. 10 Guest</p>
                            <hr>
                            <p class="card-text">
                                <span>From</span>
                                <span class="text-warning">&#8369; 10,000.00 / night</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer" id="contact">
    <div class="footer-left col-md-4 col-sm-6">
        <h3 class="title text-center text-white"> SABAODY RESORT</h3>
        <p class="about">
            "Sabaody Resort offers a serene sanctuary where guests can unwind and rejuvenate amidst breathtaking
            surroundings. Experience the perfect blend of luxury and tranquility, where every moment is crafted for
            relaxation and indulgence. Immerse yourself in the beauty of our resort, where lush landscapes, luxurious
            accommodations, and personalized service create an unforgettable getaway."
        </p>
        <div class="icons">
            <a href="https://www.facebook.com/"><i class="fa-brands fa-square-facebook"
                                                    style="color: #1877F2;"></i></a>
            <a href="https://www.instagram.com/"><i class="fa-brands fa-square-instagram"
                                                     style="color: #B83987;"></i></a>
            <a href="https://www.linkedin.com/login"><i class="fa-brands fa-linkedin"
                                                        style="color: white;"></i></a>
            <a href="https://www.tiktok.com/"><i class="fa-brands fa-tiktok"
                                                  style="color: #99A2D1;"></i></a>
            <a href="https://twitter.com/?lang=en"><i class="fa-brands fa-square-x-twitter"
                                                        style="color: black;"></i></a>
        </div>
    </div>
    <div class="footer-center col-md-4 col-sm-6">
        <div>
            <i class="fa-solid fa-location-dot"></i>
            <p class="text-muted">Greed Island</p>
        </div>
        <div>
            <i class="fa-solid fa-phone"></i>
            <p class="text-muted">(+63) 0922 000 000</p>
        </div>
        <div>
            <i class="fa-solid fa-envelope"></i>
            <p class="text-muted">sabaody@resort.com</p>
        </div>
    </div>
    <div class="footer-right col-md-4 col-sm-6">
        <span>
            <img src="images/logo1.png" width="500">
        </span>
        <p class="menu text-center">
            <a href="#home"> Home</a> |
            <a href="#about"> About Us</a> |
            <a href="#services"> Services</a> |
            <a href=""> Rooms</a> |
            <a href=""> Report</a> |
        </p>
        <p class="name text-muted text-center"> &copy; Sabaody Resort • All Rights Reserved 2023</p>
    </div>
</footer>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const readingModeSwitch = document.getElementById('readingModeSwitch');
    const content = document.getElementById('content');

    function toggleReadingMode() {
      if (readingModeSwitch.checked) {
        content.classList.add('reading-mode');
      } else {
        content.classList.remove('reading-mode');
      }
    }

    readingModeSwitch.addEventListener('change', toggleReadingMode);

    toggleReadingMode();
  });

  function changeLanguage(language) {
    const nav1TitleElement = document.getElementById('navbarDropdown');
    const nav2TitleElement = document.getElementById('nav-about');
    const nav3TitleElement = document.getElementById('nav-services');
    const nav4TitleElement = document.getElementById('nav-room');
    const nav5TitleElement = document.getElementById('nav-contact');
    const nav6TitleElement = document.getElementById('nav-report');
    const headerTitleElement = document.getElementById('header-title');
    const headerTextElement = document.getElementById('header-text');
    const aboutTitleElement = document.getElementById('about-title');
    const aboutPhraseElement = document.getElementById('about-phrase');
    const aboutTextElement = document.getElementById('about-text');
    const about1TitleElement = document.getElementById('about-pool');
    const about2TitleElement = document.getElementById('about-sea');
    const about3TitleElement = document.getElementById('about-view');
    const about4TitleElement = document.getElementById('about-lobby');
    const serviceTitleElement = document.getElementById('service-title');
    const serviceTextElement = document.getElementById('service-text');
    const service1TitleElement = document.getElementById('service1-title');
    const service1TextElement = document.getElementById('service1-text');
    const service2TitleElement = document.getElementById('service2-title');
    const service2TextElement = document.getElementById('service2-text');
    const service3TitleElement = document.getElementById('service3-title');
    const service3TextElement = document.getElementById('service3-text');
    const service4TitleElement = document.getElementById('service4-title');
    const service4TextElement = document.getElementById('service4-text');
    const exploreTitleElement = document.getElementById('explore-title');
    const exploreTextElement = document.getElementById('explore-text');

    switch (language) {
      case 'spanish':
        nav1TitleElement.innerText = 'IDIOMA';
        nav2TitleElement.innerText = 'SOBRE NOSOTROS';
        nav3TitleElement.innerText = 'SERVICIOS';
        nav4TitleElement.innerText = 'HABITACIÓN';
        nav5TitleElement.innerText = 'CONTACTO';
        nav6TitleElement.innerText = 'INFORME';
        headerTitleElement.innerText = 'Sabaody Resort';
        headerTextElement.innerText = 'Donde las olas encuentran el bienestar';
        aboutTitleElement.innerText = 'SOBRE NOSOTROS';
        aboutPhraseElement.innerText = 'Un lugar perfecto para disfrutar de la vida';
        aboutTextElement.innerText = 'Experimenta el epítome del lujo y la relajación en nuestro resort, donde cada momento es una celebración de los placeres más finos de la vida. Ubicado en el paraíso, nuestro refugio ofrece alojamientos exquisitos, comodidades de clase mundial y hospitalidad incomparable, asegurando un escape inolvidable. Desde tratamientos de spa indulgentes hasta emocionantes aventuras al aire libre, cada deseo es atendido, prometiendo una experiencia verdaderamente inmersiva y rejuvenecedora. Sumérgete en la belleza de la naturaleza, saborea la cocina gourmet y crea recuerdos duraderos con seres queridos en un escenario de impresionantes puestas de sol y playas prístinas.';
        about1TitleElement.innerText = 'Piscina';
        about2TitleElement.innerText = 'Mar';
        about3TitleElement.innerText = 'Vista';
        about4TitleElement.innerText = 'Vestíbulo';
        serviceTitleElement.innerText = 'Servicios';
        serviceTextElement.innerText = 'Haz que tu estancia sea memorable';
        service1TitleElement.innerText = 'Actividades Recreativas';
        service1TextElement.innerText = 'Desde deportes acuáticos como snorkel, kayak y paddleboarding hasta actividades terrestres como tenis, tours en bicicleta y senderismo, nuestro resort ofrece una variedad de experiencias para cada entusiasta.';
        service2TitleElement.innerText = 'Entretenimiento y Eventos';
        service2TextElement.innerText = 'Disfruta de noches encantadoras llenas de música en vivo vibrante, cautivadoras presentaciones de baile y animadas fiestas temáticas que celebran la cultura local, asegurando una variedad de momentos inolvidables durante tu estancia.';
        service3TitleElement.innerText = 'Atención al Cliente';
        service3TextElement.innerText = 'Descansa tranquilo, nuestro equipo dedicado garantiza asistencia las 24 horas del día, disponible de inmediato para atender cualquier consulta o proporcionar ayuda siempre que sea necesario durante tu estancia.';
        service4TitleElement.innerText = 'Acceso a Wi-Fi';
        service4TextElement.innerText = 'Disfruta de una conectividad perfecta en todas nuestras instalaciones con acceso Wi-Fi gratuito. Mantente conectado sin problemas, ya sea que estés relajándote en tu habitación, descansando junto a la piscina o sentado en nuestro vestíbulo.';
        exploreTitleElement.innerText = 'Explora';
        exploreTextElement.innerText = 'Tipos de Habitaciones que Ofrecemos';
        break;
      case 'filipino':
        nav1TitleElement.innerText = 'Wika';
        nav2TitleElement.innerText = 'Tungkol sa Amin';
        nav3TitleElement.innerText = 'Mga Serbisyo';
        nav4TitleElement.innerText = 'Kwarto';
        nav5TitleElement.innerText = 'Kontak';
        nav6TitleElement.innerText = 'Ulat';
        headerTitleElement.innerText = 'Sabaody Resort';
        headerTextElement.innerText = 'Kung Saan Nagkakasalubong ang mga Alon at Pampalusog';
        aboutTitleElement.innerText = 'Tungkol sa Amin';
        aboutPhraseElement.innerText = 'Isang pinakamagandang lugar upang tamasahin ang buhay';
        aboutTextElement.innerText = 'Maranasan ang kahulugan ng luho at pahinga sa aming resort, kung saan bawat sandali ay isang pagdiriwang ng pinakamahusay na kasiyahan ng buhay. Matatagpuan sa paraiso, ang aming tahanan ay nag-aalok ng mga eksklusibong tulugan, mga pasilidad ng mundo at klase ng ospitalidad, na nag-aalok ng isang di-malilimutang pagtakas. Mula sa mga indulhenteng paggamot sa spa hanggang sa nakaaaliw na mga pakikipagsapalaran sa labas, bawat nais ay pinagsisilbihan, na nangangako ng isang tunay na immersive at refreshing na karanasan. Magsanay sa kagandahan ng kalikasan, tamasahin ang gurmet na kusina, at lumikha ng mga pangmatagalang alaala kasama ang mga mahal sa buhay sa harap ng nakamamanghang mga paglubog ng araw at malinis na mga dalampasigan.';
        about1TitleElement.innerText = 'Piscina';
        about2TitleElement.innerText = 'Dagat';
        about3TitleElement.innerText = 'Tanawin';
        about4TitleElement.innerText = 'Lobby';
        serviceTitleElement.innerText = 'Mga Serbisyo';
        serviceTextElement.innerText = 'Gawing memorable ang iyong pananatili';
        service1TitleElement.innerText = 'Libangan at Aktibidades';
        service1TextElement.innerText = 'Mula sa mga water sports tulad ng snorkeling, kayaking, at paddleboarding hanggang sa mga aktibidades sa lupa tulad ng tenis, mga cycling tour, at mga hiking trail, ang aming resort ay nag-aalok ng ibat ibang mga karanasan para sa bawat manlilibang.';
        service2TitleElement.innerText = 'Paglibang at mga Pangyayari';
        service2TextElement.innerText = 'Tangkilikin ang mga kahanga-hangang gabi na puno ng buhay na musika sa buhay, nakaaakit na mga sayaw, at masiglang mga tema na mga partido na nagdiriwang ng lokal na kultura, na nagtitiyak ng ibat ibang mga hindi malilimutang sandali habang ikaw ay nagtitiyaga.';
        service3TitleElement.innerText = 'Suporta sa mga Customer';
        service3TextElement.innerText = 'Tiyakin na ang aming dedicadong koponan ay nagbibigay ng asistensya sa buong araw na magagamit agad, handang tumugon agad sa anumang mga tanong o magbigay ng tulong kung kailangan sa panahon ng iyong pananatili.';
        service4TitleElement.innerText = 'Paggamit ng Wi-Fi';
        service4TextElement.innerText = 'Tumanggap ng walang abala na konektividad sa aming mga pasilidad na may libreng access sa Wi-Fi. Manatiling konektado nang walang problema, kung ikaw ay nagpapahinga sa iyong silid, nag-aaliw sa tabi ng pool, o nakaupo sa aming lobby.';
        exploreTitleElement.innerText = 'Tuklasin';
        exploreTextElement.innerText = 'Mga Uri ng Kuwartong Inaalok Namin';
        break;
     case 'german':
        nav1TitleElement.innerText = 'Sprache';
        nav2TitleElement.innerText = 'Über uns';
        nav3TitleElement.innerText = 'Dienstleistungen';
        nav4TitleElement.innerText = 'Zimmer';
        nav5TitleElement.innerText = 'Kontakt';
        nav6TitleElement.innerText = 'Bericht';
        headerTitleElement.innerText = 'Sabaody Resort';
        headerTextElement.innerText = 'Wo sich Wellen und Wellness treffen';
        aboutTitleElement.innerText = 'Über uns';
        aboutPhraseElement.innerText = 'Ein bester Ort, um das Leben zu genießen';
        aboutTextElement.innerText = 'Erleben Sie das Epizentrum von Luxus und Entspannung in unserem Resort, wo jeder Moment eine Feier der feinsten Freuden des Lebens ist. Eingebettet im Paradies, bietet unser Refugium exquisite Unterkünfte, erstklassige Annehmlichkeiten und unvergleichliche Gastfreundschaft und garantiert Ihnen einen unvergesslichen Aufenthalt. Von verwöhnenden Spa-Behandlungen bis hin zu aufregenden Outdoor-Abenteuern wird jeder Wunsch erfüllt und verspricht ein wirklich eintauchendes und belebendes Erlebnis. Tauchen Sie ein in die Schönheit der Natur, genießen Sie Gourmetküche und schaffen Sie bleibende Erinnerungen mit Ihren Liebsten vor dem atemberaubenden Sonnenuntergang und den makellosen Stränden.';
        about1TitleElement.innerText = 'Pool';
        about2TitleElement.innerText = 'Meer';
        about3TitleElement.innerText = 'Aussicht';
        about4TitleElement.innerText = 'Lobby';
        serviceTitleElement.innerText = 'Dienstleistungen';
        serviceTextElement.innerText = 'Machen Sie Ihren Aufenthalt unvergesslich';
        service1TitleElement.innerText = 'Freizeitaktivitäten';
        service1TextElement.innerText = 'Von Wassersportarten wie Schnorcheln, Kajakfahren und Stand-Up-Paddleboarden bis hin zu landgestützten Aktivitäten wie Tennis, Radtouren und Wanderwegen bietet unser Resort eine Vielzahl von Erlebnissen für jeden Enthusiasten.';
        service2TitleElement.innerText = 'Unterhaltung und Veranstaltungen';
        service2TextElement.innerText = 'Genießen Sie zauberhafte Abende mit lebendiger Live-Musik, fesselnden Tanzaufführungen und lebhaften Themenpartys, die die lokale Kultur feiern und eine Vielzahl unvergesslicher Momente während Ihres Aufenthalts garantieren.';
        service3TitleElement.innerText = 'Kundensupport';
        service3TextElement.innerText = 'Seien Sie versichert, unser engagiertes Team sorgt dafür, dass rund um die Uhr Unterstützung verfügbar ist und steht bereit, um jede Anfrage prompt zu beantworten oder Hilfe zu leisten, wenn Sie sie während Ihres Aufenthalts benötigen.';
        service4TitleElement.innerText = 'WLAN-Zugang';
        service4TextElement.innerText = 'Genießen Sie nahtlose Konnektivität in unserem gesamten Gelände mit kostenlosem WLAN-Zugang. Bleiben Sie problemlos verbunden, ob Sie sich in Ihrem Zimmer entspannen, am Pool faulenzen oder in unserer Lobby sitzen.';
        exploreTitleElement.innerText = 'Erkunden';
        exploreTextElement.innerText = 'Die Zimmer, die wir anbieten';
        break;
      default:
        break;
    }
  }
</script>

</body>
</html>
