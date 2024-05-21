<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset("images/logo.png")}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> -->
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <!-- <script defer src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
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
<body>
<div class="container-fluid" id="home">
    <div class="row">
        <div class="col-3">
        </div>
        <div class="col-6 d-flex justify-content-center align-items-center">
            <img src="../images/logo1.png" height="110">
        </div>
    </div>
</div>
<hr>
<nav class="navbar navbar-expand-lg">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto d-flex justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="index.php" id="nav-services">Home</a>
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


<div class="container-fluid mt-5 p-5">
<p class="text-center" style="font-size: 2em; font-family: lucida calligraphy;">Take a look and find a suitable Room for your stay.</p>
  <h3 class="title p-5">
    {{request()->is('rooms/single-room') ? 'Single Rooms': ''}}
    {{request()->is('rooms/double-room') ? 'Double Rooms': ''}}
    {{request()->is('rooms/family-room') ? 'Family Rooms': ''}}
  </h3>
    <div class="row justify-content-center">
      @foreach($rooms as $room)
        <div class="col-4 col-md-12 col-sm-12 col-lg-4 mt-3">
            <div class="card room-card">
              <img src="{{asset('images/rooms/'.$room->image)}}" style="height: 300px" alt="room image" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">{{ $room->name }}</h5>
                <p class="card-text">{{ $room->description }}</p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Max Occupancy: {{$room->occupancy}} Adult</li>
                  <li class="list-group-item">Bed Type: {{ $room->bed_type }}</li>
                  <li class="list-group-item">Price: &#8369;{{$room->price}} </li>
                  <li class="list-group-item">Rate: 
                    <button class="btn" data-bs-toggle="modal" data-bs-target="#likeRatemodal{{$room->id}}">
                      <i class="bi bi-hand-thumbs-up-fill text-primary"></i>{{$room->likes}}
                    </button>
                     <button class="btn" onclick="changeStatus('dislike')" data-bs-toggle="modal" data-bs-target="#dislikeRatemodal{{$room->id}}">
                     <i class="bi bi-hand-thumbs-down-fill text-primary"></i>{{$room->dislikes}}
                    </button>
                    </li>
                </ul>
                
                
                <a href="/book/{{$room->id}}" >
                <button {{$room->status == 0 ? 'disabled' : ''}} class="btn btn-primary mt-3">
                Book Now
                </button>
              </a>

                @foreach ($room->reviews as $review)
                    <div class="card" style="width: 100%;">
                  <div class="card-body">
                    <h5 class="card-title">{{ $review->name }}</h5> 
                    @if ($review->status)
                    <i class="bi bi-hand-thumbs-up-fill text-primary"></i> liked this place.
                    @else
                    <i class="bi bi-hand-thumbs-down-fill text-primary"></i> disliked this place.
                    @endif
                    <p class="card-text"> {{ $review->review }} </p>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
          <div class="modal fade" id="likeRatemodal{{$room->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <form action="/review/{{$room->id}}" method="POST">
                @csrf
              <div class="modal-content">
                
                  <div class="modal-body">
              <img src="{{asset('images/rooms/'.$room->image)}}" style="height: 300px" alt="room image" class="card-img-top">

                    <div class="card-header h5 border-0 bg-transparent m-2">
                        {{$room->name}}
                    </div>
                    <div class="card-body py-1">
                      
                        <div>
                      <input type="text" class="form-control" name="name" placeholder="Your name..">
                      <input type="hidden" value="1" name="status" id="status">
                          @error('name')
                      <p class="text-danger"> {{$message}} </p>
                          @enderror
                      <input type="text" name="code" placeholder="Code number" class="form-control my-2">
                      @error('code')
                      <p class="text-danger"> {{$message}} </p>
                          @enderror
                          <label for="exampleFormControlTextarea1" class="visually-hidden">
                            Comment</label
                          >
                          <textarea class="form-control form-control-sm border border-2 rounded-1" name="review" id="exampleFormControlTextarea1" style="height: 50px" placeholder="Add a comment..." minlength="3" maxlength="255"></textarea>
                          @error('review')
                          <p class="text-danger"> {{$message}} </p>
                              @enderror
                        </div>
                    </div>
                    <footer class="card-footer bg-transparent border-0 text-end">
                      
                    </footer>
                </div>
              
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary btn-sm">
                    Submit
                  </button>
                </div>
              </form>
              </div>
            </div>
          </div>
          <div class="modal fade" id="dislikeRatemodal{{$room->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <form action="/review/{{$room->id}}" method="POST">
                @csrf
              <div class="modal-content">
                
                  <div class="modal-body">
              <img src="{{asset('images/rooms/'.$room->image)}}" style="height: 300px" alt="room image" class="card-img-top">

                    <div class="card-header h5 border-0 bg-transparent m-2">
                        {{$room->name}}
                    </div>
                    <div class="card-body py-1">
                      
                        <div>
                      <input type="text" class="form-control" name="name" placeholder="Your name..">
                      <input type="hidden" name="status" value="0" id="status">
                          @error('name')
                      <p class="text-danger"> {{$message}} </p>
                          @enderror
                      <input type="text" name="code" placeholder="Code number" class="form-control my-2">
                      @error('code')
                      <p class="text-danger"> {{$message}} </p>
                          @enderror
                          <label for="exampleFormControlTextarea1" class="visually-hidden">
                            Comment</label
                          >
                          <textarea class="form-control form-control-sm border border-2 rounded-1" name="review" id="exampleFormControlTextarea1" style="height: 50px" placeholder="Add a comment..." minlength="3" maxlength="255"></textarea>
                          @error('review')
                          <p class="text-danger"> {{$message}} </p>
                              @enderror
                        </div>
                    </div>
                    <footer class="card-footer bg-transparent border-0 text-end">
                      
                    </footer>
                </div>
              
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary btn-sm">
                    Submit
                  </button>
                </div>
              </form>
              </div>
            </div>
          </div>
          @endforeach
      
          <!-- Add more room cards -->
</div>
  </div>

  
<nav>
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link text-dark" href="/rooms/single-room" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link {{request()->is('rooms/single-room') ? 'text-primary': 'text-dark'}} " href="/rooms/single-room">Single Room</a></li>
    <li class="page-item"><a class="page-link {{request()->is('rooms/double-room') ? 'text-primary': 'text-dark'}}" href="/rooms/double-room">Double Room</a></li>
    <li class="page-item"><a class="page-link {{request()->is('rooms/family-room') ? 'text-primary': 'text-dark'}}" href="/rooms/family-room">Family Room</a></li>
    <li class="page-item">
      <a class="page-link text-dark" href="/rooms/family-room" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>


  <script>
    function changeStatus(status) {
      console.log(status)
      document.getElementById('status').value = status
    }
  </script>

</body>
</html>

