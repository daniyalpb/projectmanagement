@extends('include.master')
@section('content')
  <div class="content">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <center><h3 style="color: #0099FF;">User Rights Managment</h3></center>
        </div><br><br>
       <!-- **Header section end -->




      <form class="form-horizontal" name="app_version_master" id="app_version_master"  method="post">
           {{csrf_field()}}

              <div class="form-group">

                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                  <label for="myInput" class="col-lg-4 control-label">User&nbsp;Name:</label>
                </div>
               
                <div class="col-sm-2">
                 <input type="text" placeholder="User Name" id="search" name="search" style="margin-left: -40%;" onkeyup="filter()">
                </div>



              
                   <div class="col-sm-2">
                  <label for="select" class="col-lg-4 control-label">User&nbsp;Name:</label>
                </div>
                <div class="col-sm-2">
                  <select  class="form-control" id="select" name="select" style="margin-left: -40%;">
                  <option disabled selected  value="">Select One</option>
                     @foreach ($selects as $select)
                       <option value="{{ $select->userid}}">{{ $select->username}}</option>
                     @endforeach
                  </select>
                </div>


             <br><br>
          </div>
            <center>
                <input type="submit" name="Button1" value="Submit" id="Button1" class="btn btn-primary">
              </center><br><br>

          </form>
      </div>
  </div>




  @endsection

  <script type="text/javascript">
    function filter() {
    var keyword = document.getElementById("search").value;
    var select = document.getElementById("select");
    for (var i = 0; i < select.length; i++) {
        var txt = select.options[i].text;
        if (txt.substring(0, keyword.length).toLowerCase() !== keyword.toLowerCase() && keyword.trim() !== "") {
            select.options[i].style.display = 'none';
        } else {
            select.options[i].style.display = 'list-item';
        }
    }
}
  </script>
