<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/logo.png">
  <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
  <script defer src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
  <title>Sabaody Resort</title>
</head>
<body>
 <!-- sidebar -->
 <div class="sidebar">
    <h3 class="text-center">
      <a href="/admin/dashboard">Dashboard</a>
    </h3>
    <h6 class="text-center small"><a href="/logout"><i class="fa-solid fa-right-from-bracket"></i> Sign Out</a></h6>
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
                    <li><a href="/admin/view-employee"><i class="fa-solid fa-users-viewfinder"></i> view employee</a></li>
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

<div class="container content">
    <h1>VIEW EMPLOYEE!</h1>
    <table class="table table-bordered text-center border-dark">
        <thead>
        <tr style="background-color: #F2F4F4;">
            <th>ID</th>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
            <th>Birthday</th>
            <th>Role</th>
        </tr>
    @if($employee)
        
        <tr>
          <td>{{ $employee->id }}</td>
          <td>{{ $employee->username }}</td>
          <td>{{ $employee->name }}</td>
          <td>{{ $employee->email }}</td>
          <td>{{ $employee->birthday }}</td>
          <td>{{ $employee->role }}</td>
        </tr>
        @endif
                  
        </thead>
    </table>
</div>

</body>
</html>