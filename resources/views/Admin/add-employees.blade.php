<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/logo.png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/all.min.css">
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
              <div class="collapse show" id="staff-collapse">
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
              <div class="collapse" id="history-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                      <li><a href="/admin/successful"><i class="fa-solid fa-circle-check icons"></i> successful</a></li>
                      <li><a href="/admin/declined"><i class="fa-solid fa-circle-xmark icons"></i> decline</a></li>
                      <li><a href="/admin/reports"><i class="fa-solid fa-circle-exclamation icons"></i> Reports</a></li>
                  </ul>
              </div>
          </li>
      </ul>
  </div>

<div class="content p-5">
  <button type="button" class="btn btn-secondary float-end text-dark" data-bs-toggle="modal" data-bs-target="#myModal">
    <i class="bi bi-plus-circle"></i> 
        Create
  </button>
</div>

<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="registrationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Create Account</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="add_staff.php" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label>Name :</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label>Surname :</label>
                <input type="text" class="form-control" id="sname" name="sname" placeholder="Enter Surname" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="mb-3">
                <label>Email :</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label>Birthday :</label>
                <input type="date" class="form-control" id="bdate" name="bdate" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <label>Username :</label>
                <input type="username" class="form-control" id="username" name="username" placeholder="Enter Username" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <label>Password :</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
              </div>
            </div>
          </div>
            <button type="submit" class="btn btn-primary" name="submit" value="submit" style="width: 100%; color: black; font-family: arial;">Register</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="content p-2 mt-5">
    <table class="table table-bordered text-center border-dark">
        <thead>
        <tr style="background-color: #F2F4F4;">
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
       
                  
        </thead>
    </table>
</div>

</body>
</html>