<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset("images/logo.png")}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <script defer src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
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
                  <li class="list-group-item">Rate: <button class="btn" onclick="changeStatus(1)" data-bs-toggle="modal" data-bs-target="#ratemodal{{$room->id}}"><i class="bi bi-hand-thumbs-up-fill text-primary"></i></button> <button class="btn" onclick="changeStatus(0)" data-bs-toggle="modal" data-bs-target="#ratemodal{{$room->id}}"><i class="bi bi-hand-thumbs-down-fill text-primary"></i></button> </li>
                </ul>
                <a href="/book/{{$room->id}}" >
                <button {{$room->status == 0 ? 'disabled' : ''}} class="btn btn-primary mt-3">
                Book Now
                </button>
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
              </a>
              </div>
            </div>
          </div>
          <div class="modal fade" id="ratemodal{{$room->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                      <input type="hidden" name="status" id="status">
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
      document.getElementById('status').value = status
    }
  </script>

</body>
</html>

