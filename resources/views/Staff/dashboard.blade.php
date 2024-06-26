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
  <style>
.card {
    margin:50px 0px;
    width: 400px;
    height: auto;
    background-color: white;
    font-family: poppins;
}
</style>
</head>
<body style="overflow: hidden;">
        <!-- sidebar -->
<div class="sidebar">
    <h3 class="text-center">
      <a href="staff_dashboard.php">Dashboard</a>
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


<div class="content container d-flex align-items-center">
    <div class="card rounded-3 bg-dark text-white">
        <div id="carouselExampleIndicators" class="carousel slide p-3 " data-bs-ride="carousel">
            <div class="carousel-indicators"> 
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button> 
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="top text-center p-3 h4">
                        Pending
                    </div>
                        <p class="text-center h2 d-block"> {{$pending}} </p>
                </div>
                <div class="carousel-item">
                    <div class="top text-center p-3 h4">
                        Reserved
                    </div>
                        <p class="text-center h2 d-block"> {{$reserved}} </p>
                </div>
                <div class="carousel-item">
                    <div class="top text-center p-3 h4">
                        Check Out
                    </div>
                        <p class="text-center h2 d-block"> {{$checked_out}} </p>
                </div>
                <div class="carousel-item">
                    <div class="top text-center p-3 h4">
                        Report
                    </div>
                        <p class="text-center h2 d-block"> {{ $report }} </p>
                </div>
            </div> 
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span> 
                    <span class="visually-hidden">Previous</span> 
                </button> 
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span> 
                    <span class="visually-hidden">Next</span> 
                </button>
        </div>
    </div>
    <div class="card bg-dark text-white" style="margin-left: 50px; width: 50%;">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-row">
                    <div class="align-self-center">
                        <h2 class="h1 mb-0 me-4">{{ '₱' . number_format($monthly_sales, 2) }}
                        </h2>
                    </div>
                    <div>
                        <h4>Total Sales</h4>
                        <p class="mb-0">Monthly Sales Amount</p>
                    </div>
                </div>
                <div class="align-self-center">
                    <i class="fa-solid fa-sack-dollar fa-4x text-warning"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>