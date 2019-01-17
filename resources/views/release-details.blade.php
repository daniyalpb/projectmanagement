@extends('include.master')
@section('content')


@if(Session::has('message'))
<div class="alert alert-success alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<p class="alert alert-success">{{ Session::get('message') }}</p>
</div>
@endif
<div class="container-fluid white-bg">
<div class="col-md-12"><h3 class="mrg-btm">Release Details</h3></div>
<div class="col-md-12">


<form method="post" id="formreleasemaster"  name="formreleasemaster" enctype="multipart/form-data" >
{{ csrf_field() }}
           
<div class="col-md-3  col-xs-12">
 <div class="form-group">
<input class="form-control" name="Versions" id="Versions"  required="yes" placeholder="Versions"  >
 </div>
 </div>




 <div class="form-group">
  <div class="col-md-3">
  <select name="Status"  class="form-control"  id="Status">
  <option value="0">Status</option>
   <option id="done"  value="UnReleased ">UnReleased</option>
  <option id="WIP"  value="Released"> Released</option>
  <option id="indev"  value=">WORK IN PROGRESS ">WORK IN PROGRESS</option>
  <option id="indev"  value="Testing">Testing</option>
  <option id="done"  value="DONE ">DONE</option>
  </select>
  </div>
  </div> 





 <div class="col-md-3  col-xs-12">
 <div class="form-group">
<input class="form-control" name="Progress" id="Progress"  required="yes" placeholder=" Progress"  >

 </div>
 </div>

  <div class="col-md-3  col-xs-12">
 <div class="form-group">
<input class="form-control" name="Description" id="Description"  required="yes" placeholder=" Description"  >

 </div>
 </div>



  <div class="col-md-3  col-xs-12">
 <div class="form-group">
  <input type="text" class="form-control datepicker_id" id="Start_Date" name="Start_Date"  placeholder="Start Date"  required>
  <label class="control-label" for="inputError"><span id="err_date_of_joining" class="error_class"></span></label>
  </div>
  </div>



 <div class="col-md-3  col-xs-12">
 <div class="form-group">
  <input type="text" class="form-control datepicker_id" id="Release_date" name="Release_date"  placeholder="Release Date"  required>
  <label class="control-label" for="inputError"><span id="err_date_of_joining" class="error_class"></span></label>
  </div>
  </div>




  <div class="col-md-3  col-xs-12">
 <div class="form-group">
<input class="form-control" name="Action" id="Action"  required="yes" placeholder=" Action"  >

 </div>
 </div>

                 
  

            @if(Session::has('error-msg'))
              <div class="alert alert-danger"> 
                  {!! session('error-msg') !!}
              </div>
            @endif
            @if(Session::has('success-msg'))
              <div class="alert alert-success"> 
                  {!! session('success-msg') !!}
              </div>
            @endif


            
               <div class="col-sm-12">

                 <div class="col-md-12 success_class fadeso" id="success_response"> 

                 </div>

              <center>
              <input type="button" name="submit" id="submit" value="Submit Task" class="btn btn-primary">
              </center>
            </div>

            <br>
          </form>
            </div>
        </div>
    </div>
</div>



<div class="content">
    <div class="box box-default">
        <div class="box-header with-border">
         <center><h3 class="box-title"> Realease Details</h3></center> 
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
       


                 <table class="table   table-bordered" style="margin-left:20%">
                <thead>
                  <tr>
                   <!--  <th>Sr.No</th>  -->
                    <th>Versions</th> 
                    <th>Status</th> 
                    <th> Progress</th>
                  
                    <th>Description</th>
                    <th>Start_Date</th>
                    <th>Release_date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
               @foreach($data as $val)
        
                     <td>{{$val->Versions}}</td>
                     <td>{{$val->Status}}</td>
                     <td>{{$val->Progress}}</td>
                   
                     <td>{{$val->Description}}</td>
                      <td>{{$val->Start_Date}}</td>
                      <td>{{$val->Release_date}}</td>
                      <td>{{$val->Action}}</td>
                 
                 
                  
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div>


 </div>





</div>
</div>










<style type="text/css">
  .content {
    min-height: 250px;
    padding: 15px;
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px;
    margin-left: 16%;
}
table.dataTable {
    clear: both;
    margin-top: 6px !important;
    margin-bottom: 6px !important;
    max-width: none !important;
}

</style>



<script type="text/javascript">
  $('#submit').click(function(){
    //alert('oke');
    $(".error_class").empty();
    $(".success_class").empty();
var formdata = new FormData($("#formreleasemaster")[0]);
    $.ajax({  
           type: "POST",  
           url: "{{URL::to('realeses-details-insert')}}",
            //data : $('#project_m').serialize(),
            data : formdata,
           processData: false,
             contentType : false,
             success: function(msg){
                   var response = JSON.parse(msg);
                    if(response.status == "success"){
                       $("#success_response").html(response.messege);
                     window.location = response.redirectUrl;
          //window.location = response.redirectUrl;
        }
        else if(response.messege == "error"){
          window.location = response.redirectUrl;
        }
        else{
          $.each(response , function(key , value){
            $("#err_" + key).text(value);
          });
        }
           //console.log(msg);
              //location.reload();
            }
        }); 
  });
</script>


  <script>
  $(document).ready(function() {
  $('#example').DataTable();
  } );
  </script>



@endsection
