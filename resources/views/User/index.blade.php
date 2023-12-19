<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/logo.png">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <script defer src="js/bootstrap.bundle.min.js"></script>
  <title>Sabaody Resort</title>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="{{ asset('images/logo1.png') }}" height="60">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#about" >About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/rooms/single-room">Room</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/report">Report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/team">Team</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="header">
  <div class="container-fluid">
    <h1 class="header-title">
      SABAODY RESORT
    </h1>
    <p class="header-text" style="color: #F2F3F4;">Where Waves Meet Wellness</p>
  </div>
</div>

<div class="container mt-5" id="about">
  <h2  class="text-center">ABOUT</h2>
  <p>"Sabaody Resort offers a serene sanctuary where guests can unwind and rejuvenate amidst breathtaking surroundings. Experience the perfect blend of luxury and tranquility, where every moment is crafted for relaxation and indulgence. Immerse yourself in the beauty of our resort, where lush landscapes, luxurious accommodations, and personalized service create an unforgettable getaway."</p>
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi magni maiores, repudiandae quod fuga sed, earum dolorem laudantium quidem natus quas? Vitae laborum voluptas reprehenderit sed repudiandae similique in distinctio? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam esse cupiditate quas veritatis fugit minima recusandae ad? Blanditiis quidem voluptates dolorem minima commodi sit officiis totam, culpa perferendis, ipsa quasi? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero neque soluta, voluptates, nulla totam libero maiores dicta ducimus harum accusamus, expedita dolorum nostrum. Debitis minima consequatur sed modi exercitationem. Laboriosam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt necessitatibus maiores voluptas rem veritatis voluptates commodi aut quo voluptatum aliquam. Repudiandae dignissimos blanditiis ipsam voluptatibus ratione cum corrupti porro minima!</p>

  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="tab" href="#home">Pool</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu1">Sea</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu2">View</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu3">Lobby</a>
    </li>
  </ul>

  <div class="tab-content mt-3">
    <div id="home" class="tab-pane show active">
      <div class="card mb-3 border-0">
        <div class="row g-2">
          <div class="col-md-8">
            <img src="{{asset('images/pool.jpg')}}" class="img-fluid rounded-start" alt="pool">
          </div>
          <div class="col-md-4">
            <div class="card-body">
              <h5 class="card-title">POOL RESORT</h5>
              <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem, quo incidunt cupiditate doloremque ut, dolor tempora libero harum reprehenderit unde alias possimus enim vitae ea? Pariatur cumque soluta nesciunt modi?</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="menu1" class="tab-pane">
      <div class="card mb-3 border-0">
        <div class="row g-2">
          <div class="col-md-8">
            <img src="{{asset('images/sea.jpg')}}" class="img-fluid rounded-start" alt="sea">
          </div>
          <div class="col-md-4">
            <div class="card-body">
              <h5 class="card-title">SEA RESORT</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam quod iusto natus, dolores unde voluptas quo, eaque nam repellat magnam nihil, sed eligendi non quibusdam deserunt. Dolorem, excepturi delectus!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="menu2" class="tab-pane">
      <div class="card mb-3 border-0">
        <div class="row g-2">
          <div class="col-md-8">
            <img src="{{asset('images/view.jpg')}}" class="img-fluid rounded-start" alt="view">
          </div>
          <div class="col-md-4">
            <div class="card-body">
              <h5 class="card-title">VIEW RESPORT</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, quasi illo. Reiciendis mollitia quis tempore officia! Ad, veniam? Reiciendis facilis ex laborum molestias tempora nihil tenetur earum eos eaque sit!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="menu3" class="tab-pane">
      <div class="card mb-3 border-0">
        <div class="row g-2">
          <div class="col-md-8">
            <img src="{{asset('images/lobby.jpg')}}" class="img-fluid rounded-start" alt="lobby">
          </div>
          <div class="col-md-4">
            <div class="card-body">
              <h5 class="card-title">LOBBY RESORT</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quidem architecto ipsum ex, error, quisquam fuga hic debitis animi, accusantium nesciunt dolor fugiat. Quisquam eligendi quo ducimus, impedit temporibus quidem?</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br>

<div class="container-fluid service pt-3 mb-3 p-5" style="overflow: hidden;" id="services">
    <h2 class="text-center p-2">Our Services</h2>
    <div class="row g-5 pt-5 mt-30 justify-content-center p-5">
        <div class="col-lg-4 col-sm-6 mb-30 pb-2">
            <div class="card">
                <div class="box-shadow rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;">
                <i class="fa-solid fa-person-swimming" style="font-size: 5em;"></i></div>
                <div class="card-body text-center">
                    <h3 class="card-title pt-1">Recreational Activities</h3>
                    <p class="card-text text-sm">From water sports such as snorkeling, kayaking, and paddleboarding to land-based activities like tennis, cycling tours, and hiking trails, our resort offers a range of experiences for every enthusiast.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-30 pb-2">
            <div class="card">
                <div class="box-shadow rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;">
                <i class="fa-solid fa-wifi" style="font-size: 5em;"></i></div>
                <div class="card-body text-center">
                    <h3 class="card-title pt-1">Wi-Fi Access</h3>
                    <p class="card-text text-sm">Enjoy seamless connectivity throughout our premises with complimentary Wi-Fi access. Stay connected hassle-free, whether you're relaxing in your room, lounging by the pool, or sitting to our lobby.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-30 pb-2">
            <div class="card">
                <div class="box-shadow rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;">
                <i class="fa-solid fa-music" style="font-size: 5em;"></i></div>
                <div class="card-body text-center">
                    <h3 class="card-title pt-1">Entertainment and Events</h3>
                    <p class="card-text text-sm">Enjoy enchanting evenings filled with vibrant live music, captivating dance performances, and lively themed parties that celebrate the local culture, ensuring an array of unforgettable moments during your stay.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-30 pb-2">
            <div class="card">
                <div class="box-shadow rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;">
                <i class="fa-solid fa-utensils" style="font-size: 5em;"></i></div>
                <div class="card-body text-center">
                    <h3 class="card-title pt-1">Fine Dining</h3>
                    <p class="card-text text-sm">Exquisite cuisines prepared by renowned chefs. Offering on-site restaurants, bars, cafes, and room service with diverse cuisines, including buffet options, fine dining, and casual eateries.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-30 pb-2">
            <div class="card">
                <div class="box-shadow rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;">
                <i class="fa-solid fa-handshake-angle" style="font-size: 5em;"></i></div>
                <div class="card-body text-center">
                    <h3 class="card-title pt-1">Customer Support</h3>
                    <p class="card-text text-sm">Rest assured, our dedicated team ensures round-the-clock assistance is readily available, standing by to promptly address any queries or provide help whenever needed during your stay.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
  <h2 class="text-center p-2">Rooms We Offer</h2>
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-3">
        <div class="card overlay-card">
          <img src="{{asset('images/single-room.png')}}" class="card-img-top">
          <div class="overlay">
            <div class="overlay-header">
              <h5 class="card-title float-start"><span class="badge bg-primary text-dark">&#8369; 2,500.00</span></h5>
            </div>
            <div class="overlay-body">
              <h4 class="text-center"><a href="/rooms/single-room">Single Room <i class="fa-solid fa-arrow-right"></i></a></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-3">
        <div class="card overlay-card">
          <img src="{{asset('images/double-room.png')}}" class="card-img-top">
          <div class="overlay">
            <div class="overlay-header">
              <h5 class="card-title float-start"><span class="badge bg-primary text-dark">&#8369; 5,000.00</span></h5>
            </div>
            <div class="overlay-body">
              <h4 class="text-center"><a href="/rooms/double-room">Double Room <i class="fa-solid fa-arrow-right"></i></a></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-3">
        <div class="card overlay-card">
          <img src="{{asset('images/family-room.png')}}" class="card-img-top">
          <div class="overlay">
            <div class="overlay-header">
              <h5 class="card-title float-start"><span class="badge bg-primary text-dark">&#8369; 10,000.00</span></h5>
            </div>
            <div class="overlay-body">
              <h4 class="text-center"><a href="/rooms/family-room">Family Room <i class="fa-solid fa-arrow-right"></i></a></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<footer class="footer">
  <div class="footer-left col-md-4 col-sm-6">
    <h3 class="title text-center text-white"> SABAODY RESORT</h3>
      <p class="about">
        "Sabaody Resort offers a serene sanctuary where guests can unwind and rejuvenate amidst breathtaking surroundings. Experience the perfect blend of luxury and tranquility, where every moment is crafted for relaxation and indulgence. Immerse yourself in the beauty of our resort, where lush landscapes, luxurious accommodations, and personalized service create an unforgettable getaway."
      </p>
      <div class="icons">
        <a href="https://www.facebook.com/"><i class="fa-brands fa-square-facebook" style="color: #1877F2;"></i></a>
        <a href="https://www.instagram.com/"><i class="fa-brands fa-square-instagram" style="color: #B83987;"></i></a>
        <a href="https://www.linkedin.com/login"><i class="fa-brands fa-linkedin" style="color: white;"></i></a>
        <a href="https://www.tiktok.com/"><i class="fa-brands fa-tiktok" style="color: #99A2D1;"></i></a>
        <a href="https://twitter.com/?lang=en"><i class="fa-brands fa-square-x-twitter" style="color: black;"></i></a>
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
      <img src="{{asset('images/logo1.png')}}" width="500">
    </span>
      <p class="menu text-center">
        <a href="index.php"> Home</a> |
        <a href="#about"> About</a> |
        <a href="#services"> Services</a> |
        <a href="room.php"> Rooms</a> |
        <a href="report.php"> Report</a> |
        <a href="team.php"> Team</a>
      </p>
      <p class="name text-muted text-center"> &copy; Sabaody Resort • All Rights Reserved 2023</p>
  </div>
</footer>

</body>
</html> 