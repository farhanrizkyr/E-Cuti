<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Aplikasi Cuti - Login</title>
  <link href="{{asset('master')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="{{asset('master')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="{{asset('master')}}/css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <form method="post" action="/login" class="user">
                  	@csrf
                    <div class="form-group">
                      <input type="text" name="username" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Username">
                        @error('username')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                          @error('password')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember
                          Me</label>
                      </div>
                    </div>
                    <div class="form-group">
                    <button class="btn btn-primary">Login</button>
                    </div>
                   
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="register.html">Create an Account!</a>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="{{asset('master')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('master')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('master')}}/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="{{asset('master')}}/js/ruang-admin.min.js"></script>
</body>

</html>