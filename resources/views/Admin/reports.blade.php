<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/logo.png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script defer src="js/bootstrap.bundle.min.js"></script>
  <title>Sabaody Resort</title>
</head>
<body>
        <!-- sidebar -->
        <div class="sidebar">
            <h3 class="text-center">
              <a href="/admin/dashboard">Dashboard</a>
            </h3>
            <h6 class="text-center small"><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Sign Out</a></h6>
            <hr>
            <ul class="list-unstyled ps-0">
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#room-collapse" aria-expanded="false"><i class="fa-solid fa-house-chimney"></i>
                     Room
                    </button>
                    <div class="collapse" id="room-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="/admin/add-rooms"><i class="fa-solid fa-house-chimney-medical"></i> add room</a></li>
                            <li><a href="/admin/view-rooms"><i class="fa-solid fa-house-circle-check"></i> view room</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#staff-collapse" aria-expanded="false"><i class="fa-solid fa-users"></i>
                     employee
                    </button>
                    <div class="collapse" id="staff-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="/admin/add-employees"><i class="fa-solid fa-user-plus"></i> add employee</a></li>
                            <li><a href="/admin/view-employees"><i class="fa-solid fa-users-viewfinder"></i> view employee</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#history-collapse" aria-expanded="false"><i class="fa-solid fa-clock-rotate-left"></i>
                     history
                    </button>
                    <div class="collapse show" id="history-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="/admin/successful"><i class="fa-solid fa-circle-check icons"></i> successful</a></li>
                            <li><a href="/admin/declined"><i class="fa-solid fa-circle-xmark icons"></i> decline</a></li>
                            <li><a href="/admin/reports"><i class="fa-solid fa-circle-exclamation icons"></i> Reports</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- content -->
<div class="content text-center p-5">
    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title pt-1">Room Number</h3>
                    <p class="card-title pt-1 text-start">Item: </p>
                    <p class="card-title pt-1 text-start">Issues: description   </p>
                </div>
                <div class="card-bottom">
                    <span><i class="fa-solid fa-hammer h4 text-primary"></i></span>
                    <span><i class="fa-solid fa-square-xmark h4 text-danger"></i></span>
                </div>
            </div>
        </div>
        <!-- add more -->
    </div>
</div>


</body>
</html>