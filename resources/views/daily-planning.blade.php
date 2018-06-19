@extends('include.master')
@section('content')
  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Daily Planning</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        

 <div class="box-body">
  <!-- <center><h3 style="color: #0099FF;">Daily Planning</h3></center><hr> -->
          <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
              <!-- a -->
           <form class="form-horizontal" name="daily_planning" id="daily_planning"  method="post">
              {{csrf_field()}}
          

            <div class="col-md-12">
                   <div class="form-group row">
                        <label for="Plan_Date" class="col-sm-2 col-form-label" style="margin-left: 17%;">Select&nbsp;Date:</label>
                        <div class="col-sm-3">
                          <input type="date" class="form-control" id="Plan_Date" name="Plan_Date" placeholder="Enter a Employee Code" value="<?php echo date('Y-m-d');?>">
                        </div>
                      </div>
                    </div>



                    <div class="col-md-12">
                   <div class="form-group row">
                   	<label for="StartTime" class="col-sm-2 col-form-label" style="margin-left: 17%;">Start Time:</label>
                        <div class="col-sm-3">
                        	<select type="text" class="form-control" id="StartTime" name="StartTime">
                		<option value="-1">Select</option>
	                    <option value="09:00:00">09:00:00</option>
	                    <option value="09:15:00">09:15:00</option>
	                    <option value="09:30:00">09:30:00</option>
	                    <option value="09:45:00">09:45:00</option>
	                    <option value="10:00:00">10:00:00</option>
	                    <option value="10:15:00">10:15:00</option>
	                    <option value="10:30:00">10:30:00</option>
	                    <option value="10:45:00">10:45:00</option>
	                    <option value="11:00:00">11:00:00</option>
	                    <option value="11:15:00">11:15:00</option>
	                    <option value="11:30:00">11:30:00</option>
	                    <option value="11:45:00">11:45:00</option>
	                    <option value="12:00:00">12:00:00</option>
	                    <option value="12:15:00">12:15:00</option>
	                    <option value="12:30:00">12:30:00</option>
	                    <option value="12:45:00">12:45:00</option>
	                    <option value="13:00:00">13:00:00</option>
	                    <option value="13:15:00">13:15:00</option>
	                    <option value="13:30:00">13:30:00</option>
	                    <option value="13:45:00">13:45:00</option>
	                    <option value="14:00:00">14:00:00</option>
	                    <option value="14:15:00">14:15:00</option>
	                    <option value="14:30:00">14:30:00</option>
	                    <option value="14:45:00">14:45:00</option>
	                    <option value="15:00:00">15:00:00</option>
	                    <option value="15:15:00">15:15:00</option>
	                    <option value="15:30:00">15:30:00</option>
	                    <option value="15:45:00">15:45:00</option>
	                    <option value="16:00:00">16:00:00</option>
	                    <option value="16:15:00">16:15:00</option>
	                    <option value="16:30:00">16:30:00</option>
	                    <option value="16:45:00">16:45:00</option>
	                    <option value="17:00:00">17:00:00</option>
	                    <option value="17:15:00">17:15:00</option>
	                    <option value="17:30:00">17:30:00</option>
	                    <option value="17:45:00">17:45:00</option>
	                    <option value="18:00:00">18:00:00</option>
	                    <option value="18:15:00">18:15:00</option>
	                    <option value="18:30:00">18:30:00</option>
	                    <option value="18:45:00">18:45:00</option>
	                    <option value="19:00:00">19:00:00</option>
	                    <option value="19:15:00">19:15:00</option>
	                    <option value="19:30:00">19:30:00</option>
	                    <option value="19:45:00">19:45:00</option>
	                    <option value="20:00:00">20:00:00</option>
	                    <option value="20:15:00">20:15:00</option>
	                    <option value="20:30:00">20:30:00</option>
	                    <option value="20:45:00">20:45:00</option>
	                    <option value="21:00:00">21:00:00</option>
                	</select>
                </div>
                      </div>
                    </div>



                       <div class="col-md-12">
                   <div class="form-group row">
                        <label for="EndTime" class="col-sm-2 col-form-label" style="margin-left: 17%";>End&nbsp;Time:</label>
                        <div class="col-sm-3">
                          <select type="text" class="form-control" id="EndTime" name="EndTime">
                          <option value="-1">Select</option>
	                    <option value="09:00:00">09:00:00</option>
	                    <option value="09:15:00">09:15:00</option>
	                    <option value="09:30:00">09:30:00</option>
	                    <option value="09:45:00">09:45:00</option>
	                    <option value="10:00:00">10:00:00</option>
	                    <option value="10:15:00">10:15:00</option>
	                    <option value="10:30:00">10:30:00</option>
	                    <option value="10:45:00">10:45:00</option>
	                    <option value="11:00:00">11:00:00</option>
	                    <option value="11:15:00">11:15:00</option>
	                    <option value="11:30:00">11:30:00</option>
	                    <option value="11:45:00">11:45:00</option>
	                    <option value="12:00:00">12:00:00</option>
	                    <option value="12:15:00">12:15:00</option>
	                    <option value="12:30:00">12:30:00</option>
	                    <option value="12:45:00">12:45:00</option>
	                    <option value="13:00:00">13:00:00</option>
	                    <option value="13:15:00">13:15:00</option>
	                    <option value="13:30:00">13:30:00</option>
	                    <option value="13:45:00">13:45:00</option>
	                    <option value="14:00:00">14:00:00</option>
	                    <option value="14:15:00">14:15:00</option>
	                    <option value="14:30:00">14:30:00</option>
	                    <option value="14:45:00">14:45:00</option>
	                    <option value="15:00:00">15:00:00</option>
	                    <option value="15:15:00">15:15:00</option>
	                    <option value="15:30:00">15:30:00</option>
	                    <option value="15:45:00">15:45:00</option>
	                    <option value="16:00:00">16:00:00</option>
	                    <option value="16:15:00">16:15:00</option>
	                    <option value="16:30:00">16:30:00</option>
	                    <option value="16:45:00">16:45:00</option>
	                    <option value="17:00:00">17:00:00</option>
	                    <option value="17:15:00">17:15:00</option>
	                    <option value="17:30:00">17:30:00</option>
	                    <option value="17:45:00">17:45:00</option>
	                    <option value="18:00:00">18:00:00</option>
	                    <option value="18:15:00">18:15:00</option>
	                    <option value="18:30:00">18:30:00</option>
	                    <option value="18:45:00">18:45:00</option>
	                    <option value="19:00:00">19:00:00</option>
	                    <option value="19:15:00">19:15:00</option>
	                    <option value="19:30:00">19:30:00</option>
	                    <option value="19:45:00">19:45:00</option>
	                    <option value="20:00:00">20:00:00</option>
	                    <option value="20:15:00">20:15:00</option>
	                    <option value="20:30:00">20:30:00</option>
	                    <option value="20:45:00">20:45:00</option>
	                    <option value="21:00:00">21:00:00</option>
                	</select>
                        </div>
                      </div>
                    </div>



                     <div class="col-md-12">
                     	<div class="form-group row">
                        <label for="User_Remark" class="col-sm-2 col-form-label" style="margin-left: 17%;">Remark:</label>
                        <div class="col-sm-5">
                          <textarea type="text" class="form-control" id="User_Remark" name="User_Remark" placeholder="Remark"></textarea>
                        </div>
                      </div>
                    </div>




                     <div class="col-md-12">
                     	<div class="form-group row">
                        <label for="User_Achieve" class="col-sm-2 col-form-label" style="margin-left: 17%;">Achievement:</label>
                        <div class="col-sm-5">
                          <textarea type="text" class="form-control" id="User_Achieve" name="User_Achieve" placeholder="Achievement"></textarea>
                        </div>
                      </div>
                    </div>



<!-- <a id="GridView1_lblEdit_4" href="javascript:__doPostBack('GridView1$ctl06$lblEdit','' )"    data-toggle="modal" data-target="#myModal">Edit</a> -->
                    <center><div class="col-sm-12">
                   <button type="submit" id="sub" class="btn btn-primary">Submit</button>
            <button type="reset" value="Reset">Reset</button>
          </div></center>
        </form>
      </div>
    </div>
  </div>
</div>






   	<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

         <div class="box-body">

          <div class="container">
          	<div class="table-responsive">
          		<table id="example" class="table table-bordered table-striped">
        <thead>
         <tr>
            <th>Sr No</th>
            <th>ID</th>
            <th>Plan Date</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>User Remark	</th>
            <th>Achievement	</th>
           
            <th>Edit</th>
          </tr> 
      </thead>

        <tbody>
           @foreach($smsdata as $val)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{$val->Id}}</td>
            <td>{{$val->Plan_Date}}</td>
            <td>{{$val->StartTime}}</td>
            <td>{{$val->EndTime}}</td>
            <td>{{$val->User_Remark}}</td>
            <td>{{$val->User_Achieve}}</td>         
            <td><a id="GridView1_lblEdit_4" onclick="demo('{{$val->Id}}','{{$val->Plan_Date}}','{{$val->StartTime}}','{{$val->EndTime}}','{{$val->User_Remark}}','{{$val->User_Achieve}}')"  data-toggle="modal" data-target="#myModal">Edit</a></td>
        
 
        </tr>
          @endforeach
        </tbody>
      </table>
     </div>
  </div>
 
</div> 


</div>
</div>



<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md" style="size:100px">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">


         <center><h3 style="color: #0099FF;">Edit Daily Planning</h3></center>
          <hr>


  
<!--           <form id="demo_form" name="demo_form" method="POST" action="{{url('update_daily')}}"> --> 
	<form>
                {{csrf_field()}} 

            



            <div class="col-md-12">
                   <div class="form-group row">
                        <label for="Pop_Id" class="col-sm-2 col-form-label" style="margin-left: 17%;">Id</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="Pop_Id" name="Pop_Id" placeholder="Enter a Employee Code" value="<?php echo date('Y-m-d');?>">
                        </div>
                      </div>
                    </div>



                    <div class="col-md-12">
                   <div class="form-group row">
                        <label for="Pop_Plan_Date" class="col-sm-2 col-form-label" style="margin-left: 17%;">Select&nbsp;Date:</label>
                        <div class="col-sm-4">
                          <input type="date" class="form-control" id="Pop_Plan_Date" name="Pop_Plan_Date" placeholder="Enter a Employee Code" value="<?php echo date('Y-m-d');?>">
                        </div>
                      </div>
                    </div>


                      <div class="col-md-12">
                   <div class="form-group row">
                        <label for="Pop_StartTime" class="col-sm-2 col-form-label" style="margin-left: 17%;">Start Time:</label>
                        <div class="col-sm-4">
                          <select type="text" class="form-control" id="Pop_StartTime" name="Pop_StartTime">
                		<option value="-1">Select</option>
	                    <option value="09:00:00">09:00:00</option>
	                    <option value="09:15:00">09:15:00</option>
	                    <option value="09:30:00">09:30:00</option>
	                    <option value="09:45:00">09:45:00</option>
	                    <option value="10:00:00">10:00:00</option>
	                    <option value="10:15:00">10:15:00</option>
	                    <option value="10:30:00">10:30:00</option>
	                    <option value="10:45:00">10:45:00</option>
	                    <option value="11:00:00">11:00:00</option>
	                    <option value="11:15:00">11:15:00</option>
	                    <option value="11:30:00">11:30:00</option>
	                    <option value="11:45:00">11:45:00</option>
	                    <option value="12:00:00">12:00:00</option>
	                    <option value="12:15:00">12:15:00</option>
	                    <option value="12:30:00">12:30:00</option>
	                    <option value="12:45:00">12:45:00</option>
	                    <option value="13:00:00">13:00:00</option>
	                    <option value="13:15:00">13:15:00</option>
	                    <option value="13:30:00">13:30:00</option>
	                    <option value="13:45:00">13:45:00</option>
	                    <option value="14:00:00">14:00:00</option>
	                    <option value="14:15:00">14:15:00</option>
	                    <option value="14:30:00">14:30:00</option>
	                    <option value="14:45:00">14:45:00</option>
	                    <option value="15:00:00">15:00:00</option>
	                    <option value="15:15:00">15:15:00</option>
	                    <option value="15:30:00">15:30:00</option>
	                    <option value="15:45:00">15:45:00</option>
	                    <option value="16:00:00">16:00:00</option>
	                    <option value="16:15:00">16:15:00</option>
	                    <option value="16:30:00">16:30:00</option>
	                    <option value="16:45:00">16:45:00</option>
	                    <option value="17:00:00">17:00:00</option>
	                    <option value="17:15:00">17:15:00</option>
	                    <option value="17:30:00">17:30:00</option>
	                    <option value="17:45:00">17:45:00</option>
	                    <option value="18:00:00">18:00:00</option>
	                    <option value="18:15:00">18:15:00</option>
	                    <option value="18:30:00">18:30:00</option>
	                    <option value="18:45:00">18:45:00</option>
	                    <option value="19:00:00">19:00:00</option>
	                    <option value="19:15:00">19:15:00</option>
	                    <option value="19:30:00">19:30:00</option>
	                    <option value="19:45:00">19:45:00</option>
	                    <option value="20:00:00">20:00:00</option>
	                    <option value="20:15:00">20:15:00</option>
	                    <option value="20:30:00">20:30:00</option>
	                    <option value="20:45:00">20:45:00</option>
	                    <option value="21:00:00">21:00:00</option>
                	</select>
                </div>
                      </div>
                    </div>



                       <div class="col-md-12">
                   <div class="form-group row">
                        <label for="Pop_EndTime" class="col-sm-2 col-form-label" style="margin-left: 17%";>End&nbsp;Time:</label>
                        <div class="col-sm-4">
                          <select type="text" class="form-control" id="Pop_EndTime" name="Pop_EndTime">
                          <option value="-1">Select</option>
	                    <option value="09:00:00">09:00:00</option>
	                    <option value="09:15:00">09:15:00</option>
	                    <option value="09:30:00">09:30:00</option>
	                    <option value="09:45:00">09:45:00</option>
	                    <option value="10:00:00">10:00:00</option>
	                    <option value="10:15:00">10:15:00</option>
	                    <option value="10:30:00">10:30:00</option>
	                    <option value="10:45:00">10:45:00</option>
	                    <option value="11:00:00">11:00:00</option>
	                    <option value="11:15:00">11:15:00</option>
	                    <option value="11:30:00">11:30:00</option>
	                    <option value="11:45:00">11:45:00</option>
	                    <option value="12:00:00">12:00:00</option>
	                    <option value="12:15:00">12:15:00</option>
	                    <option value="12:30:00">12:30:00</option>
	                    <option value="12:45:00">12:45:00</option>
	                    <option value="13:00:00">13:00:00</option>
	                    <option value="13:15:00">13:15:00</option>
	                    <option value="13:30:00">13:30:00</option>
	                    <option value="13:45:00">13:45:00</option>
	                    <option value="14:00:00">14:00:00</option>
	                    <option value="14:15:00">14:15:00</option>
	                    <option value="14:30:00">14:30:00</option>
	                    <option value="14:45:00">14:45:00</option>
	                    <option value="15:00:00">15:00:00</option>
	                    <option value="15:15:00">15:15:00</option>
	                    <option value="15:30:00">15:30:00</option>
	                    <option value="15:45:00">15:45:00</option>
	                    <option value="16:00:00">16:00:00</option>
	                    <option value="16:15:00">16:15:00</option>
	                    <option value="16:30:00">16:30:00</option>
	                    <option value="16:45:00">16:45:00</option>
	                    <option value="17:00:00">17:00:00</option>
	                    <option value="17:15:00">17:15:00</option>
	                    <option value="17:30:00">17:30:00</option>
	                    <option value="17:45:00">17:45:00</option>
	                    <option value="18:00:00">18:00:00</option>
	                    <option value="18:15:00">18:15:00</option>
	                    <option value="18:30:00">18:30:00</option>
	                    <option value="18:45:00">18:45:00</option>
	                    <option value="19:00:00">19:00:00</option>
	                    <option value="19:15:00">19:15:00</option>
	                    <option value="19:30:00">19:30:00</option>
	                    <option value="19:45:00">19:45:00</option>
	                    <option value="20:00:00">20:00:00</option>
	                    <option value="20:15:00">20:15:00</option>
	                    <option value="20:30:00">20:30:00</option>
	                    <option value="20:45:00">20:45:00</option>
	                    <option value="21:00:00">21:00:00</option>
                	</select>
                        </div>
                      </div>
                    </div>



                     <div class="col-md-12">
                   <div class="form-group row">
                        <label for="Pop_User_Remark" class="col-sm-2 col-form-label" style="margin-left: 17%;">Remark:</label>
                        <div class="col-sm-5">
                          <textarea type="text" class="form-control" id="Pop_User_Remark" name="Pop_User_Remark" placeholder="Remark"></textarea>
                        </div>
                      </div>
                    </div>




                     <div class="col-md-12">
                   <div class="form-group row">
                        <label for="Pop_User_Achieve" class="col-sm-2 col-form-label" style="margin-left: 17%;">Achievement:</label>
                        <div class="col-sm-5">
                          <textarea type="text" class="form-control" id="Pop_User_Achieve" name="Pop_User_Achieve" placeholder="Achievement"></textarea>
                        </div>
                      </div>
                    </div>



<!-- <a id="GridView1_lblEdit_4" href="javascript:__doPostBack('GridView1$ctl06$lblEdit','' )"    data-toggle="modal" data-target="#myModal">Edit</a> -->
                    <center><div class="col-sm-12">
                   <button type="submit" id="submit"  name="submit"  class="btn btn-primary">Submit</button>
            <!-- <button type="reset" value="Reset">Reset</button> -->
          </div></center>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" id="btn" name="btn" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
        


 
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>


<script type="text/javascript">
  function demo( Id,Plan_Date,StartTime,EndTime,User_Remark,User_Achieve){
    //alert(Designation_Id);
    // document.getElementById("fba_id").value.empty();
   document.getElementById('Pop_Id').value="";
   document.getElementById('Pop_Plan_Date').value="";
   document.getElementById('Pop_StartTime').value="";
   document.getElementById('Pop_EndTime').value="";
   document.getElementById('Pop_User_Remark').value="";
   document.getElementById('Pop_User_Achieve').value="";
    

   document.getElementById("Pop_Id").value += Id;
   document.getElementById("Pop_Plan_Date").value += Plan_Date;
   document.getElementById("Pop_StartTime").value += StartTime;
   document.getElementById("Pop_EndTime").value += EndTime;
   document.getElementById("Pop_User_Remark").value += User_Remark;
   document.getElementById("Pop_User_Achieve").value += User_Achieve;

  }
</script>


<script type="text/javascript">
      $(function () {
      	$('form').on('submit', function (e) {
          e.preventDefault();
          $.ajax({
            type: 'post',
            url: 'update_daily',
            data: $('form').serialize(),
            success: function (msg) {
            	alert('Record updated successfully.');
	               setTimeout(function(){// wait for 5 secs(2)
			           location.reload(); // then reload the page.(3)
			      }, 500);
	           }
          });


        });

      });
    </script>

    @endsection
