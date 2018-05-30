<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link type="text/css" rel="stylesheet" href="{{url('css/app.css')}}">
    <link type="text/css" rel="stylesheet" href="{{url('css/Admin.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{url('css/_all-skins.css')}}">
    <link type="text/css" rel="stylesheet" href="{{url('css/style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{url('css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('fonts/font-awesome/css/font-awesome.min.css')}}">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
       <div class="wrapper">
          @include('include.header')
          @include('include.sidebars')
          <div class="content-wrapper">
          @yield('content')
          </div>
          @include('include.footer')
      </div>
     <script type="text/javascript"   src="{{url('js/adminlte.min.js')}}" async  ></script>
     <script type="text/javascript"  src="{{url('js/bootstrap.min.js')}}" async  ></script>
     <script type="text/javascript"  src="{{url('js/jquery.dataTables.min.js')}}" defer></script>
     <script type="text/javascript"  src="{{url('js/dataTables.bootstrap4.min.js')}}" defer></script>
  </body>

<!--   <script type="text/javascript">
function downloadJSAtOnload() {
var element = document.createElement("script");
element.src = "defer.js";
document.body.appendChild(element);
}
if (window.addEventListener)
window.addEventListener("load", downloadJSAtOnload, false);
else if (window.attachEvent)
window.attachEvent("onload", downloadJSAtOnload);
else window.onload = downloadJSAtOnload;
</script> -->


</html>
 