<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link type="text/css" rel="stylesheet" href="{{url('css/app.css')}}">
    <link type="text/css" rel="stylesheet" href="{{url('css/Admin.min.css')}}">

  </head>
<body>


<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
     <b>Admin</b>  
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
  <!--   <p class="login-box-msg">Sign in to start your session</p> -->

    <form action="{{url('login')}}" method="post">{{csrf_field()}}
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="email" name="email" placeholder="Email" value="vivek@gmail.com">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          @if ($errors->has('email'))<label class="control-label" for="inputError" > {{ $errors->first('email') }}</label>  @endif
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password" value="">
         @if ($errors->has('password')) <label class="control-label" for="inputError">{{ $errors->first('password') }} </label> @endif
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
       <!--  <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div> -->
        <!-- /.col -->
      <h7 style="color:green ">Unabled TO  Acees your Account?</h7>
          <p> To request an accounts Please contact Your site Adminstrator.</p>
          <p>By logging in, you agree To the</p><h6 style="color:green  font-size: 12px;
    margin-left: 53%;
    margin-top: -8%;">Privacy Policy.</h6>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>

            <a href="forgot-password" target="_blank" class="btn btn-link ">forgot Password</a>
        </div>

        <div class="col-xs-4">
            <a href="http://localhost:8000/registration"  target="_blank" class="btn btn-link"> if you are not Register </a>
        </div>
         @if (Session::has('msg')) <label class="control-label" for="inputError">{{ Session::get('msg') }} </label>@endif
        <!-- /.col -->
      </div>
    </form>


    <!-- <button type="submit" href="forgot-password" class="btn btn-primary ">forgot pass</button> -->
  

   <!--  <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div> -->
 

    <!-- <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a> -->

  </div>
 
</div>
   
  
  </body>
         
 