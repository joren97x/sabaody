<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{asset('images/logo.png')}}">
  <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/all.min.css')}}">
  <script defer src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
  <title>Sabaody Resort</title>
</head>
<body>
        <!-- sidebar -->
<div class="sidebar">
    <h3 class="text-center">
      <a href="/staff/dashboard">Dashboard</a>
    </h3>
    <h6 class="text-center small"><a href="/logout"><i class="fa-solid fa-right-from-bracket"></i> Sign Out</a></h6>
    <hr>
    <ul class="list-unstyled ps-0">
    	<li class="mb-1">
    		<button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#room-collapse" aria-expanded="false"><i class="fa-solid fa-house-chimney"></i>
             Room
            </button>
            <div class="collapse show" id="room-collapse">
            	<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="/staff/pending"><i class="fa-solid fa-book"></i> pending</a></li>
                    <li><a href="/staff/reserved"><i class="fa-solid fa-book-bookmark"></i> reserved</a></li>
                    <li><a href="/staff/check-out"><i class="fa-solid fa-book-open"></i> check out</a></li>
                    <li><a href="/staff/view-room/all-rooms"><i class="fa-solid fa-house-circle-check"></i> view room</a></li>
                </ul>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#history-collapse" aria-expanded="false"><i class="fa-solid fa-clock-rotate-left"></i>
             history
            </button>
            <div class="collapse" id="history-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="/staff/successful"><i class="fa-solid fa-circle-check icons"></i> successful</a></li>
                    <li><a href="/staff/declined"><i class="fa-solid fa-circle-xmark icons"></i> declined</a></li>
                    <li><a href="/staff/reports"><i class="fa-solid fa-circle-exclamation icons"></i> reports</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>

        <!-- content -->
<div class="content row text-center p-5">
  
<nav>
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link text-dark" href="/rooms/single-room" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link {{request()->is('rooms/single-room') ? 'text-primary': 'text-dark'}} " href="/staff/view-room/all-rooms">All Room</a></li>
    <li class="page-item"><a class="page-link {{request()->is('rooms/single-room') ? 'text-primary': 'text-dark'}} " href="/staff/view-room/single-room">Single Room</a></li>
    <li class="page-item"><a class="page-link {{request()->is('rooms/double-room') ? 'text-primary': 'text-dark'}}" href="/staff/view-room/double-room">Double Room</a></li>
    <li class="page-item"><a class="page-link {{request()->is('rooms/family-room') ? 'text-primary': 'text-dark'}}" href="/staff/view-room/family-room">Family Room</a></li>
    <li class="page-item">
      <a class="page-link text-dark" href="/rooms/family-room" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
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
                    <li class="list-group-item">Status: {{$room->status ? "Available" : "Not available"}} </li>
                  </ul>
                </div>
              </div>
            </div>
            @endforeach
</div>

</body>
</html>