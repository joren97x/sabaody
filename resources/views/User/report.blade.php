<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="js/bootstrap.bundle.min.js"></script>
  <title>Sabaody Resort</title>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="images/logo1.png" height="60">
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

<div class="container mt-5 p-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-5 p-5">Report Form</h1>
                <form action="/report" method="POST">
                  @csrf
                    <div class="mb-3">
                        <label for="reporterName" class="form-label">Enter CODE:</label>
                        <input type="text" name="room_number" class="form-control" id="reporterName" placeholder="Enter code">
                        @error('room_number')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <input name="item" class="form-check-input" type="radio" name="severityRadio" id="lowSeverity" value="Bed">
                            <label class="form-check-label" for="lowSeverity">BED</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="item" class="form-check-input" type="radio" name="severityRadio" id="highSeverity" value="Cabinet">
                            <label class="form-check-label" for="highSeverity">CABINET</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="item" class="form-check-input" type="radio" name="severityRadio" id="mediumSeverity" value="TV">
                            <label class="form-check-label" for="mediumSeverity">TV</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="item" class="form-check-input" type="radio" name="severityRadio" id="highSeverity" value="Cr">
                            <label class="form-check-label" for="highSeverity">CR</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="item" class="form-check-input" type="radio" name="severityRadio" id="highSeverity" value="Ref">
                            <label class="form-check-label" for="highSeverity">REF</label>
                        </div>
                        @error('item')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <textarea  name="description" class="form-control" id="reportDescription" placeholder="Describe the issue" ></textarea>
                        @error('description')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-secondary float-end">Submit Report</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>