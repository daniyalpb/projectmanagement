

@extends('include.master')
@section('content')
<html>
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  body {padding:20px 0px; background:#eee !important;}
 .brd {padding:20px;margin-bottom:20px;background:#fff; box-shadow:1px 1px 3px 0px #ccc;-moz-box-shadow:1px 1px 3px 0px #ccc;-webkit-box-shadow:1px 1px 3px 0px #ccc;}
  @media screen and (max-width: 768px) {
 .brd {overflow:scroll;}
  }


</style>

<title> DashBoard Piechart</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js">

 </script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
 <div class="container-fluid">
 <div class="row">
 <div class="col-md-12 col-xs-12"> <div id="rupeebossmonthwisereport" class="brd" style="height: 500px;"></div> </div>
 </div>
</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script type="text/javascript">
   google.charts.load('current', {'packages':['corechart']});
  google.charts.load('current', {'packages':['bar']});

  var fdata=Array();
  $.ajax({
  type: 'GET',
  url: "{{url('report')}}",
  success: function (msg) {
  av=JSON.parse(msg);
  var arr=new Array(['date.Month','ProjectName']);

  

  var dat=JSON.stringify(av.result);
     $.each(av.result, function(key,val) {
    arr.push([String(val.month),val.disbsAmnt]);
        });
     google.charts.setOnLoadCallback(rupeebossmonthwisereport);
     function rupeebossmonthwisereport() {
     var data = google.visualization.arrayToDataTable(arr);                        
     var option ={
   title: 'Cumulative Flow Diagram.',
    is3D: true
       };
      var chart = new google.charts.Bar(document.getElementById('rupeebossmonthwisereport'));
     chart.draw(data, google.charts.Bar.convertOptions(option));
         }
         }
        });


    </script>
  </head>
  <body>
    <div id="linechart" style="width: 900px; height: 500px"></div>
  </body>
</html>
@endsection