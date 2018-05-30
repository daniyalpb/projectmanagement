@extends('include.master')
@section('content')
  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        

 <div class="box-body">
  <center><h3 style="color: #0099FF;">Designation Master</h3></center><hr>
          <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-6 col-sm-offset-2">
           <form id="demo_form" name="demo_form" method="POST" action="{{url('update_view_templete')}}"> 
                {{csrf_field()}} 
          

                   <div class="form-group row">
                     <input type="hidden" name="Designation_Id"  id="Designation_Id" class="">
                        <label for="Designation" class="col-sm-2 col-form-label">Designation:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Designation" name="Designation"  value="" placeholder="Enter a Designation"  required>
                        </div>
                      </div>




                     

                      <center>
                        <input type="submit" name="Button1" value="Submit" id="Button1" class="btn btn-primary">
                        <input type="submit" name="Button2" value="Reset" id="Button2" class="btn btn-primary">
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

          <div class="container">
<div class="table-responsive">
  
   <table id="example" class="table table-bordered table-striped">
    <thead>
    <tr style="background-color: #87CEFA;border: 1px ridge black;">
				        <th style="border:1px ridge black;">Select</th>
				     
				        <th style="border:1px ridge black;">Desg ID</th>
				        <th style="border:1px ridge black;">designation</th>
              </tr>
            </thead>
            <tbody>

             @foreach($smsdata as $val)
           <tr>
            <td style="border:1px ridge black;"><button type="button" onclick="demo('{{$val->Designation}}','{{$val->Designation_Id}}')" class="btn btn-link">Select</button></td>
            
            <td style="border:1px ridge black;">{{$val->Designation_Id}}</td>
            <td style="border:1px ridge black;">{{$val->Designation}}</td>
          </tr>
			  @endforeach
      </tbody>
    </table>
  </div>
</div>
  </form>
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






