@extends('include.master')
@section('content')
  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Designation Master</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        

 <div class="box-body">
  <!-- <center><h3 style="color: #0099FF;">Designation Master</h3></center><hr> -->
          <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-6 col-sm-offset-2">
           <form id="demo_form" name="demo_form" method="POST" action="{{url('update_designation_master')}}"> 
                {{csrf_field()}} 
          

                   <div class="form-group row">
                     <input type="hidden" name="Designation_Id"  id="Designation_Id" class="">
                        <label for="Designation" class="col-sm-5 col-form-label">Designation:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="Designation" name="Designation"  value="" placeholder="Enter a Designation"  required>
                        </div>
                      </div>




                     

                      <center>
                        <input type="submit" name="Button1" value="Submit" id="Button1" class="btn btn-primary">
                        <input type="Reset" value="Reset" class="btn btn">
                      </center>

                      
        
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
<div class="table-responsive">
  
   <table id="example" class="table table-bordered table-striped">
    <thead>
    <tr>
				<th>Select</th>
        <th>Desg ID</th>
				<th>designation</th>
      </tr>
            </thead>
            <tbody>

             @foreach($smsdata as $val)
           <tr>
            <td><button type="button" onclick="demo('{{$val->Designation}}','{{$val->Designation_Id}}')" class="btn btn-link">Select</button></td>
            
            <td>{{$val->Designation_Id}}</td>
            <td>{{$val->Designation}}</td>
          </tr>
			  @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
  function demo(Designation,Designation_Id){
    //alert(Designation_Id);
    // document.getElementById("fba_id").value.empty();
     document.getElementById('Designation').value="";
     document.getElementById('Designation_Id').value="";
    document.getElementById("Designation").value += Designation;
    document.getElementById("Designation_Id").value += Designation_Id;

   // $('#fba_id').append(Designation);

  }
</script>


<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection






