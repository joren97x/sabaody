<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset("images/logo.png")}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <script defer src="js/bootstrap.bundle.min.js"></script>
  <title>Sabaody Resort</title>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="{{asset('images/logo1.png')}}" height="60">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="/rooms/single-room">Room</a>
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


<div class="container-fluid mt-5 p-5">
  <h3 class="title p-5">Single Rooms</h3>
    <div class="row justify-content-center">
      @foreach($rooms as $room)
        <div class="col-4 col-md-12 col-sm-12 col-lg-4 mt-3">
            <div class="card room-card">
              <img src="{{asset('images/'.$room->image)}}" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">{{ $room->name }}</h5>
                <p class="card-text">{{ $room->description }}</p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Max Occupancy: {{$room->occupancy}} Adult</li>
                  <li class="list-group-item">Bed Type: {{ $room->bed_type }}</li>
                  <li class="list-group-item">Price: &#8369;{{$room->price}} </li>
                  <li class="list-group-item">Rate: <i class="fa-regular fa-thumbs-up text-primary"></i> <i class="fa-regular fa-thumbs-down text-primary"></i></li>
                </ul>
                <a href="/book/{{$room->id}}" class="btn btn-primary mt-3" style="width: 100%;">Book Now</a>
              </div>
            </div>
          </div>
          @endforeach
      <div class="col-7 col-md-12 col-sm-12 col-lg-7 mt-3 p-5">
      <div class="card">
      <div class="card-header border-0 bg-transparent">
      <i class="fa-solid fa-circle-user h1"></i> 
        <span class="ms-3">Jay-l</span>
      </div>
      <div class="card-body py-1">
        <form>
          <div>
            <label for="exampleFormControlTextarea1" class="visually-hidden">
              Comment</label
            >
            <textarea class="form-control form-control-sm border border-2 rounded-1" id="exampleFormControlTextarea1" style="height: 50px" placeholder="Add a comment..." minlength="3" maxlength="255"></textarea>
          </div>
        </form>
      </div>
      <footer class="card-footer bg-transparent border-0 text-end">
        <button type="submit" class="btn btn-primary btn-sm">
          Submit
        </button>
      </footer>
    </div>    
    </div>
          <!-- Add more room cards -->
</div>
  </div>


<nav>
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link text-dark" href="/rooms" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link text-primary" href="/rooms/single-room">Single Room</a></li>
    <li class="page-item"><a class="page-link text-dark" href="/rooms/double-room">Double Room</a></li>
    <li class="page-item"><a class="page-link text-dark" href="/rooms/family-room">Family Room</a></li>
    <li class="page-item">
      <a class="page-link text-dark" href="room2.php" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</body>
</html>