<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <script defer src="js/bootstrap.bundle.min.js"></script>
  <title>Sabaody Resort</title>
  <style>
    .navbar a:hover {
      color: #D6DBDF;
    }

    .navbar-nav {
      font-family: poppins;
      font-size: 1.5em;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .navbar-nav a {
      color: black;
      margin-right: 20px;
    }

    .dropdown-menu a:hover{
      color: white;
      background-color: #D6DBDF;
    }

    .header {
      background-image: url('../images/bg2.jpg');
      background-size: cover;
      background-position: center;
      background-attachment: fixed; 
      height: 1000px;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      position: relative;
      color: white;
    }

    .header-title {
      font-size: 5em;
      margin: 0;
      margin-top: 500px;
    }

    .header-text {
      font-size: 1.5em;
      margin-top: 20px;
    }

    .about{
      font-family: lucida calligraphy;
    }

    .about p{
      font-size: 5em;
      font-family: aparajita;
    }
    .about h4{
      font-family: georgia;
    }

    .nav-custom .nav-item {
        border-radius: 10px;
    }

    .nav-custom .nav-link {
        color: black;
        background-color: #e9ecef;
        border: 1px solid black;
        border-radius: 10px;
        padding: 10px 15px;
        margin-bottom: 5px;
        transition: transform 0.3s ease;
        font-family: poppins;
        font-size: 2em;
    }

    .nav-custom .nav-link.active {
        color: black;
        background-color: white;
        border-color: black;
        transform: scale(1.1); /* Enlarge active tab */
    }

    .nav-custom .nav-link:hover {
        background-color: #e9ecef;
        color: #333;
        transform: scale(1.05);
        border-color: black; /* Zoom in on hover */
    }

    .nav-custom .nav-link:focus {
        outline: none;
        box-shadow: none;
    }

    .services{
      font-family: lucida calligraphy;
    }

    .services p{
      font-size: 5em;
      font-family: aparajita;
    }

    .service .card{
      transition: all 0.3s ease;
    }

    .service .card:hover{
      transform: scale(1.1);
    }

    .room{
      font-family: lucida calligraphy;
    }

    .room p{
      font-size: 5em;
      font-family: aparajita;
    }

    .overlay-description {
      position: absolute;
      bottom: 0;
      left: 0;
      background-color: white;
      color: black;
      padding: 20px;
      width: 50%;
      margin-left: 318px;
    }

    .text-warning{
      margin-left: 20px;
      font-size: 1.5em;
    }

    .footer {
      background-color: black;
      width: 100%;
      text-align: left;
      font-family: sans-serif;
      font-weight: bold;
      font-size: 16px;
      padding: 50px;
      margin-top: 50px;
    }

    .footer .footer-left,
    .footer .footer-center,
    .footer .footer-right {
      display: inline-block;
      vertical-align: top;
    }


    /* footer left*/

    .footer .footer-left {
      width: 33%;
      padding-right: 15px;
    }

    .footer .about {
      line-height: 20px;
      color: #ffffff;
      font-size: 13px;
      font-weight: normal;
      margin: 0;
    }

    .footer .about span {
      display: block;
      color: #ffffff;
      font-size: 14px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .footer .icons {
      margin-top: 25px;
    }

    .footer .icons a {
      display: inline-block;
      width: 35px;
      height: 35px;
      cursor: pointer;
      background-color: #33383b;
      border-radius: 2px;
      font-size: 20px;
      color: #ffffff;
      text-align: center;
      line-height: 35px;
      margin-right: 3px;
      margin-bottom: 5px;
      transition: all 0.3s ease;  
    }

    .footer .icons a:hover{

      transform: scale(1.2);
    }

    /* footer center*/

    .footer .footer-center {
      width: 30%;
    }

    .footer .footer-center i {
      color: white;
      font-size: 25px;
      width: 38px;
      height: 38px;
      text-align: center;
      line-height: 42px;
      margin: 10px 15px;
      vertical-align: middle;
    }

    .footer .footer-center p {
      display: inline-block;
      color: #ffffff;
      vertical-align: middle;
      margin: 0;
    }

    .footer .footer-center p span {
      display: block;
      font-weight: normal;
      font-size: 14px;
      line-height: 2;
    }

    .footer .footer-center p a {
      color: #0099ff;
      text-decoration: none;
    }


    /* footer right*/

    .footer .footer-right {
      width: 35%;
    }

    .footer .menu {
      color: #818181;
      margin: 20px 0 12px;
      padding: 0;
    }

    .footer .menu a {
      display: inline-block;
      line-height: 1.8;
      text-decoration: none;
      color: inherit;
    }

    .footer .menu a:hover {
      color: white;
    }

    .footer .name {
      color: #0099ff;
      font-size: 15px;
      font-weight: normal;
      margin: 0;
    }

    @media (max-width: 767px) {
      .footer {
        font-size: 14px;
      }
      .footer .footer-left,
      .footer .footer-center,
      .footer .footer-right {
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: center;
      }
      .footer .footer-center i {
        margin-left: 0;
      }
    }

    .reading-mode {
      background-color: rgba(255, 255, 204, 0.5) !important;
    }

  </style>
</head>
<body>
<div class="container-fluid" id="home">
    <div class="row">
        <div class="col-3">
        </div>
        <div class="col-6 d-flex justify-content-center align-items-center">
            <img src="images/logo1.png" height="110">
        </div>
    </div>
</div>
<hr>
<nav class="navbar navbar-expand-lg">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto d-flex justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="index.php" id="nav-services">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="room.php" id="nav-room">Room</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact" id="nav-contact">contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="report.php" id="nav-report">report</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-5 p-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-5 p-5">Report Form</h1>
                @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                  {{ session('success') }}
                </div>
                @endif
                <form action="/report" method="POST">
                  @csrf
                    <div class="mb-3">
                        <label for="reporterName" class="form-label">Enter CODE:</label>
                        <input type="text" name="code" class="form-control" id="reporterName" value="{{old('code')}}" placeholder="Enter code">
                        @error('code')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <input name="item" class="form-check-input" type="radio"  name="severityRadio" id="lowSeverity" value="Bed">
                            <label class="form-check-label" for="lowSeverity">BED</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="item" class="form-check-input" type="radio"  name="severityRadio" id="highSeverity" value="Cabinet">
                            <label class="form-check-label" for="highSeverity">CABINET</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="item" class="form-check-input" type="radio"  name="severityRadio" id="mediumSeverity" value="TV">
                            <label class="form-check-label" for="mediumSeverity">TV</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="item" class="form-check-input" type="radio"  name="severityRadio" id="highSeverity" value="Cr">
                            <label class="form-check-label" for="highSeverity">CR</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="item" class="form-check-input" type="radio"  name="severityRadio" id="highSeverity" value="Ref">
                            <label class="form-check-label" for="highSeverity">REF</label>
                        </div>
                        @error('item')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <textarea  name="description" class="form-control"  id="reportDescription" placeholder="Describe the issue" >{{ old('description')}}</textarea>
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

