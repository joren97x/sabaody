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
  <h6 class="text-center small"><a href="/logout"><i class="fa-solid fa-right-from-bracket"></i> Sign Out</a></h6>
  <hr>
  <ul class="list-unstyled ps-0">
    <li class="mb-1">
      <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#room-collapse" aria-expanded="false"><i class="fa-solid fa-house-chimney"></i>
           Room
          </button> 
          <div class="collapse show" id="room-collapse">
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

    <!-- content -->
<div class="content p-5">
  <h1 class="text-center">ADD ROOM</h1>
    <!-- card -->
    <div class="card">
      <div class="card-body">
        <form method="post" action="/admin/store-room" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <input type="text" placeholder="Room name" class="form-control custom-file-input" id="photoInput" name="name" aria-describedby="photoHelp">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            <div class="row">
              <div class="col-8">
                <input type="file" class="form-control custom-file-input" id="photoInput" name="image" aria-describedby="photoHelp">
                @error('image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="col-4">
                <input type="text" class="form-control" id="roomNumberInput" name="room_number" placeholder="Room Number">
                @error('room_number')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-6">
                <input type="text" name="price" class="form-control" id="priceInput" placeholder="Price">
                @error('price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="col-2">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="category" id="singleRoom" value="single-room">
                  <label class="form-check-label" for="singleRoom">
                    Single Room
                  </label>
                </div>
              </div>
              <div class="col-2">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="category" id="doubleRoom" value="double-room">
                  <label class="form-check-label" for="doubleRoom">
                    Double Room
                  </label>
                </div>
              </div>
              <div class="col-2">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="category" id="doubleRoom" value="family-room">
                  <label class="form-check-label" for="doubleRoom">
                    Family Room
                  </label>
                </div>

              </div>
              @error('category')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
          </div>

          <div class="form-group">
            <textarea class="form-control" id="descriptionInput" rows="3" placeholder="Enter a description" name="description"></textarea>
            @error('description')
            <p class="text-danger">{{ $message }}</p>
        @enderror
          </div>
          <div class="row">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="bed_type" id="kingsize" value="king-size">
                <label class="form-check-label" for="kingsize">
                  King size
                </label>
              </div>
            </div>
            <div class="col-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="bed_type" id="queensize" value="queen-size">
                <label class="form-check-label" for="queensize">
                  Queen size
                </label>
              </div>
            </div>
            <div class="col-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="bed_type" id="fullsize" value="full-size">
                <label class="form-check-label" for="fullsize">
                  Full size
                </label>
              </div>
          </div>
          @error('bed_type')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <input type="text" name="occupancy" class="form-control" id="priceInput" placeholder="Occupancy">
        @error('occupancy')
        <p class="text-danger">{{ $message }}</p>
    @enderror
          <button type="submit" class="btn btn-primary float-end" style="color: black; font-family: arial; width: 200px;">Submit</button>
          </form>
        </div>
      </div>
</div>

