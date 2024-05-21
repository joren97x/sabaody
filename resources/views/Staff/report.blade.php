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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
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
                    <li><a href="/staff/view-room/all-rooms"><i class="fa-solid fa-house-circle-check"></i> view room</a></li>
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
<div class="content text-center p-5">
    <div class="row">
        @foreach ($reports as $report)
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title pt-1"> {{$report->room_number}} </h3>
                    <p class="card-title pt-1 text-start">Item: {{$report->item}} </p>
                    <p class="card-title pt-1 text-start">Issues: {{$report->description}} </p>
                    <p class="card-title pt-1 text-start">Status: {{$report->status}} </p>
                </div>
                <div class="card-bottom">
                    
                    <form action="/staff/fix-report/{{$report->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <button class="btn" type="submit"><i class="bi bi-hammer text-primary"></i></button>
                    </form>
                    <form action="/staff/delete-report/{{$report->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn"><i class="bi bi-x-circle-fill text-danger"></i></button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        @if(count($reports) == 0) 
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title pt-1"> No reports found. </h3>
                </div>
                <div class="card-bottom">
                    
                    
                </div>
            </div>
        </div>
        @endif
        <!-- add more -->
    </div>
</div>

</body>
</html>