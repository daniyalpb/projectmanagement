 @extends('include.master')
@section('content')
  <div class="content">
    <div class="box box-default">
        <div class="box-header with-border">
         <center><h3 class="box-title">Associate list</h3></center> 
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
         <div class="box-body">
<div class="table-responsive">  
   <table id="example" class="table table-bordered table-striped">    
     <thead>
        <tr>
            <th>Sr.No</th>
            <th>Associate&nbsp;Id</th>
            <th>Associate&nbsp;Name</th>
            <th>Contact&nbsp;No</th>
            <th>Pan</th>
            <th>Email Id</th>
            <th>Assign&nbsp;Employee</th>
            <th>City&nbsp;Name</th>
            <th>Parent&nbsp;Associate Name</th>
            <th>Is Active</th>
            <th>Remark</th>
            <th>Edit</th>
            <th>Send&nbsp;RBA&nbsp;Link - Android</th>
            <th>Send&nbsp;RBA&nbsp;Link - IOS</th>
          </tr>
        </thead>
        <tbody>
          @foreach($associate as $val)
          <tr>
            <td>{{ $no++ }}</td>
              <td>{{$val->Broker_id}}</td>
              <td>{{$val->Broker_Name}}</td>
              <td>{{$val->Contact_No}}</td>
              <td>{{$val->PAN_No}}</td>
              <td>{{$val->Email_Id}}</td>
              <td>{{$val->Emp_Name}}</td>
              <td>{{$val->City_Name}}</td>
              <td></td>
              <td>{{$val->Is_Active}}</td>
              <td>{{$val->remark}}</td>
              <td><a href="select" onclick="demo('{{$val->Broker_id}}','{{$val->Broker_Name}}','{{$val->Contact_No}}','{{$val->PAN_No}}','{{$val->Email_Id}}','{{$val->Emp_Code}}','{{$val->city_Id}}','{{$val->remark}}','{{$val->Is_Active}}')"  data-toggle="modal" data-target="#myModal">Edit</a></td>
              <td><a href="select">Send RBA Link</a></td>
              <td><a href="select">Send RBA Link</a></td>
            </tr>
        @endforeach
      </tbody>
    </table>
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


         <center><h3 style="color: #0099FF;">Edit Associate Master</h3></center>
          <hr>


   <form class="form-horizontal" name="break_master" id="break_master"  method="post" action="{{('associate-list')}}">
           {{csrf_field()}}
                 <div class="form-group row">
                    <label for="m_Broker_id" class="col-sm-3 col-form-label">Associate&nbsp;Id:</label>
                        <div class="col-sm-7">
                           <input type="text" class="form-control" id="m_Broker_id" name="m_Broker_id">
                        </div>
                  </div>

                  <div class="form-group row">
                    <label for="m_Broker_Name" class="col-sm-3 col-form-label">Associate&nbsp;Name:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="m_Broker_Name" name="m_Broker_Name">
                      </div>
                  </div>

                  <div class="form-group row">
                    <label for="m_Contact_No" class="col-sm-3 col-form-label">Contact&nbsp;No:</label>
                      <div class="col-sm-7">
                        <input type="Mobile" class="form-control" id="m_Contact_No" name="m_Contact_No"  maxlength="10" minlength="10" onkeypress="return fnAllowNumeric(event)">
                      </div>
                  </div>                  

                  <div class="form-group row">
                    <label for="m_PAN_No" class="col-sm-3 col-form-label">PAN&nbsp;No:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="m_PAN_No" name="m_PAN_No"   oninput="pancard('m_PAN_No')" maxlength="10" minlength="10">
                         <div id="pannumber" style="display:none;color: red; font-size: 10px">Oops.Please Enter Valid Pan Number.!!</div>
                      </div>
                  </div>

                  <div class="form-group row">
                    <label for="m_Email_Id" class="col-sm-3 col-form-label">Email&nbsp;Id:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="m_Email_Id" name="m_Email_Id">
                       <!--   <div id="m_Email_Id" style="display:none;color:red;font-size: 10px">Please Enter Valid Email Id.</div> -->
                     </div>
                   </div>

                  <div class="form-group row">
                    <label for="m_Emp_Code" class="col-sm-3 col-form-label">Assign&nbsp;Employee:</label>
                     <div class="col-sm-7">
                      <select  class="form-control" id="m_Emp_Code" name="m_Emp_Code">               
                        @foreach($assign as $assign)
                        <option value="{{$assign->Emp_Code}}">{{$assign->Emp_Name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="m_city_Id" class="col-sm-3 col-form-label">Select&nbsp;City:</label>
                      <div class="col-sm-7">
                        <select  class="form-control" id="m_city_Id" name="m_city_Id">
                          @foreach($city as $city)
                          @if($city->City_Id == $val->city_Id)
                          <option selected="true" value="{{$val->city_Id}}">{{$val->City_Name}}</option>@else                          
                          <option value="{{$city->City_Id}}">{{$city->City_Name}}</option>
                          @endif
                         @endforeach
                       </select>
                     </div>
                   </div>

                   <div class="form-group row">
                    <label for="m_parentBrokerId" class="col-sm-3 col-form-label">Parent&nbsp;Name:</label>
                    <div class="col-sm-7">
                      <select  class="form-control" id="m_parentBrokerId" name="m_parentBrokerId">
                        <option disabled selected  value="">Select&nbsp;Time</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="m_remark" class="col-sm-3 col-form-label">Remark:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="m_remark" name="m_remark" value="">
                      </div>
                  </div>

                  <div class="form-group row">
                    <label for="m_Is_Active" class="col-sm-3 col-form-label">Is&nbsp;Active:</label>
                      <div class="col-sm-7">
                        <label><input type="checkbox"  id="m_Is_Active" name="m_Is_Active" style="zoom:1.5;"></label>
                      </div>
                  </div>

                  <center>
                    <input type="submit" name="Button1" value="Update" id="Button1" class="btn btn-primary">
                </center>
              </form>
           </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="myFunction();">Close</button>
        </div>
      </div>
   </div>
</div>







<script type="text/javascript">
    function demo(Broker_id,Broker_Name,Contact_No,PAN_No,Email_Id,Emp_Code,city_Id,remark,Is_Active){
    document.getElementById('m_Broker_id').value="";
    document.getElementById('m_Broker_Name').value="";
    document.getElementById('m_Contact_No').value="";
    document.getElementById('m_PAN_No').value="";
    document.getElementById('m_Email_Id').value="";
    document.getElementById('m_city_Id').value="";
    document.getElementById('m_Emp_Code').value="";
    // document.getElementById('m_parentBrokerId').value="";
    document.getElementById('m_remark').value="";
    // document.getElementById('m_Is_Active').value="";
    document.getElementById("m_Broker_id").value += Broker_id;
    document.getElementById("m_Broker_Name").value += Broker_Name;
    document.getElementById("m_Contact_No").value += Contact_No;
    document.getElementById("m_PAN_No").value += PAN_No;    
    document.getElementById("m_Email_Id").value += Email_Id;
    document.getElementById("m_city_Id").value += city_Id;
    document.getElementById("m_Emp_Code").value += Emp_Code;   
    // document.getElementById('m_parentBrokerId').value += parentEmpCode;
    document.getElementById('m_remark').value += remark;
    // document.getElementById('m_Is_Active').value += Is_Active;

    if(Is_Active!=0){
      $("#m_Is_Active").attr("checked", true);
    }else{
      $("#m_Is_Active").attr("checked", false);
    }
  }
  
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
         
@endsection