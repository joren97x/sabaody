<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/logo.png">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <title>Sabaody Resort</title>
</head>
<body class="vh-100">

<section class="vh-50 p-5 mt-5">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card-form text-black" style="border: none;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                <form action="/book" class="mx-1 mx-md-4" method="post">
                                    @csrf
                                <div class="d-flex flex-row align-items-center mb-4">
                                    <div class="form-outline flex-fill mb-0">
                                        <label>Room Number</label>
                                        <input type="text" name="room_number" value="{{$room->room_number}}" class="form-control">
                                    </div>
                                    </div>
                                	<div class="d-flex flex-row align-items-center mb-4">
                                        <div class="form-outline flex-fill mb-0">
                                        	<label>Name</label>
                                            <input type="text" name="name" id="" class="form-control" >
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <div class="form-outline flex-fill mb-0">
                                            <label>Email</label>
                                            <input type="text" name="email" id="" class="form-control" >
                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                      <div class="row">
                                        <div class="col-6">
                                        <div class="form-outline flex-fill mb-0">
                                            <label>Check-in</label>
                                            <input type="date" name="check_in" id="" class="form_control" >
                                            @error('check_in')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>
                                        <div class="col-6">
                                        <div class="form-outline flex-fill mb-0">
                                            <label>Check-out</label>
                                            <input type="date" name="check_out" id="" class="form-control" >
                                            @error('check_out')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        </div>
                                        </div>
                                        @if(session()->has('errorCheckin'))
                                        <div class="alert alert-danger" role="alert">
                                            {{session('errorCheckin')}}
                                          </div>
                                        @endif

                                      </div>
                                    </div>
                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary" style="width: 100%;" name="submit" value="Submit">Next</button>
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




	<script defer src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script>
        // Check for error message in the page's JavaScript section
        var errorMessage = @json(session('error'));
        if (errorMessage) {
            alert(errorMessage);
            alert("errorr");
            // You can customize how you want to display the error message
        }

    </script>
</body>
</html>