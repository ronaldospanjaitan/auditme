
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="{{ URL::asset('assets/vendor/bootstrap/css/fontFamilyKarla.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('assets/vendor/bootstrap/css/materialdesignicons.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/customLogin.css')}}">
</head>
<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Be Part of us!</h1>
            @yield('register')
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block" >
          <img src="{{ URL::asset('assets/img/register.jpg')}}" alt="login image" class="login-img" style="height:700px">
        </div>
      </div>
    </div>
  </main>
  <script src="{{ URL::asset('assets/js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ URL::asset('assets/js/popper.js') }}"></script>
  <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>
