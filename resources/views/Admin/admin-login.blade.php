<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/logo.png">
  <link rel="stylesheet" href="admin/css/bootstrap.min.css">
  <link rel="stylesheet" href="admin/css/custom.css">
  <title>Sabaody Resort</title>
</head>
<body class="vh-100">
    <!-- login form -->
<section class="vh-50 p-5 mt-5">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card-form text-black" style="border: none;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                <p class="animated-text text-center h1 mx-1 mx-md-4 mt-4">Welcome Back!</p>
                <form action="/login" class="mx-1 mx-md-4" method="post">
                    @csrf
                <div class="d-flex flex-row align-items-center mb-4">
                  <div class="form-outline flex-fill mb-0">
                    <label class="form-label animated-text">Email</label>
                    <input type="text" name="email" id="email" class="form-control" >
                    @error('email')
                        <p class="text-danger">{{$message}}</p> 
                    @enderror
                  </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label animated-text">Password</label>
                    <input type="password" name="password" id="password" class="form-control" >
                    @error('password')
                        <p class="text-danger">{{$message}}</p> 
                    @enderror
                  </div>
                </div>
                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <input type="text" value="admin" name="role">
                  <button type="submit" class="btn btn-primary" style="width: 100%;">Login</button>
                </div>
                <div>
                </div>
                </form>
              </div>
                <div class="col-md-10 col-lg-6 col-xl-3 d-flex align-items-center order-1 order-lg-2">
                  <a href="index.php"><img src="{{asset('images/logo.png')}}" class="img-fluid" alt="logo"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <script defer src="js/bootstrap.bundle.min.js"></script>

</body>
</html>