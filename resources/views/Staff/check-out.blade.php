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
<div class="content text-center p-5">
    <div class="row">
        @foreach ($reservations as $reservation)
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title pt-1">{{ $reservation->room_number }}</h3>
                        <ul class="list-group text-start">
                            <li class="list-group-item">Name: {{ $reservation->name }} </li>
                            <li class="list-group-item">Email: {{ $reservation->email }}</li>
                            <li class="list-group-item">Check In: {{ $reservation->check_in }}</li>
                            <li class="list-group-item">Check Out: {{ $reservation->check_out }}</li>
                        </ul>
                    </div>
                    <div class="card-bottom">
                        <button class="btn btn-sm" onclick="setCheckoutReservationModal({{$reservation}})" data-bs-toggle="modal" data-bs-target="#checkoutmodal"><i class="bi bi-x-circle-fill text-danger"></i></button>
                   </div> 
                </div>
            </div>
        @endforeach
        @if (count($reservations) == 0)
        <div class="col-3">
          <div class="card">
                  <h3 class="card-title pt-1">No pending reservations found.</h3>
          </div>
      </div>
        @endif
        <!-- add more -->
    </div>
</div>
<div class="modal fade" id="checkoutmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Proceed to checkout</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title pt-1 text-center" id="modal_roomnumber">  </h3>
                    <ul class="list-group text-start">
                        <li class="list-group-item">Name: <span id="modal_name"></span> </li>
                        <li class="list-group-item">Email: <span id="modal_email"></span> </li>
                        <li class="list-group-item">Check In: <span id="modal_checkin"></span> </li>
                        <li class="list-group-item">Check Out: <span id="modal_checkout"></span> </li>
                    </ul>
                </div>
            </div>
          Proceed to checkout?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action="/staff/check-out-reservation" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" value="" id="modal_reservationid" name="reservation">
            <button type="submit" class="btn btn-primary">Go</button>
      </form>
          
        </div>
      </div>
    </div>
  </div>

<script>
      function setCheckoutReservationModal(reservation) {
        document.getElementById('modal_roomnumber').innerHTML = reservation.room_number
        document.getElementById('modal_name').innerHTML = reservation.name
        document.getElementById('modal_email').innerHTML = reservation.email
        document.getElementById('modal_checkin').innerHTML = reservation.check_in
        document.getElementById('modal_checkout').innerHTML = reservation.check_out
        document.getElementById('modal_reservationid').value = reservation.id
    }
</script>

</body>
</html>