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
            <div class="collapse " id="room-collapse">
            	<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="/staff/pending"><i class="fa-solid fa-book"></i> pending</a></li>
                    <li><a href="/staff/reserved"><i class="fa-solid fa-book-bookmark"></i> reserved</a></li>
                    <li><a href="/staff/check-out"><i class="fa-solid fa-book-open"></i> check out</a></li>
                    <li><a href="/staff/view-room"><i class="fa-solid fa-house-circle-check"></i> view room</a></li>
                </ul>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#history-collapse" aria-expanded="false"><i class="fa-solid fa-clock-rotate-left"></i>
             history
            </button>
            <div class="collapse show" id="history-collapse">
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
<div class="content p-5">
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Room Number</th>
                <th>Name</th>
                <th>Email</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
                <tr>
                    <th>{{ $reservation->id }}</th>
                    <th>{{ $reservation->room_number }}</th>
                    <th>{{ $reservation->name }}</th>
                    <th>{{ $reservation->email }}</th>
                    <th>{{ $reservation->check_in }}</th>
                    <th>{{ $reservation->check_out }}</th>
                    <th>
                        <button class="btn">
                            <i class="bi bi-trash text-danger"></i>
                        </button>
                    </th>
                </tr>
            @endforeach
            @if (count($reservations) == 0)
                <tr>
                    <td colspan="7">No data found.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>

</body>
</html>