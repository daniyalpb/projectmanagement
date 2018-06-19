@extends('include.master')
@section('content')
  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Source Master</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        

 <div class="box-body">
  
          <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-6 col-sm-offset-2">
           <form class="form-horizontal" name="source_master" id="source_master"  method="post">
           {{csrf_field()}}
          

                   <div class="form-group row">
                        <label for="p_source_name" class="col-sm-3 col-form-label">Source&nbsp;Name:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="p_source_name" name="p_source_name"  value="" placeholder="Enter a Source Name"  required>
                        </div>
                      </div>




                       <div class="form-group row" id="IsActive">
                        <label for="p_is_Active" class="col-sm-3 col-form-label">Is&nbsp;Active:</label>
                        <div class="col-sm-8">
                         <label><input type="checkbox"    id="p_is_Active" name="p_is_Active" value="Yes" style="zoom:1.5;"></label>
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
<div class="table-responsive">
  
   <table id="example" class="table table-bordered table-striped">
    <thead>
     <tr>
			<th>Sr.No</th>
      <th>Source id</th>
       <th>Source Name</th>
      <th>Is Active</th>
        <th>Edit</th>
     

		</tr>
  </thead>
  <tbody>

       @foreach($smsdata as $val)
     <tr>
            <td>{{ $no++ }}</td>
            <td>{{$val->source_id}}</td>
            <td>{{$val->source_name}}</td>
            <td>{{$val->Is_Active}}</td>
           <td><i class="fa fa-edit" id="GridView1_lblEdit_4" href="javascript:__doPostBack('GridView1$ctl06$lblEdit','' )"  onclick="demo('{{$val->source_id}}','{{$val->source_name}}','{{$val->Is_Active}}')" data-toggle="modal" data-target="#myModal"></i></td>
          </tr>

        @endforeach
      </tbody>
    </table>
  </div>
</div>
</form>
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


         <center><h3 style="color: #0099FF;">Edit Source Master</h3></center>
          <hr>


  
          <form id="demo_form" name="demo_form" method="POST" action="{{url('update_source_master')}}"> 
                {{csrf_field()}} 
          

                   <div class="form-group row">
                        <label for="source_id" class="col-sm-2 col-form-label">Source&nbsp;Id:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="source_id" name="source_id"  value="" placeholder="Enter a Bank Name">
                        </div>
                      </div>


                      <div class="form-group row">
                        <label for="source_name" class="col-sm-2 col-form-label">Sourec&nbsp;Name:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="source_name" name="source_name"  value="" placeholder="Enter a Bank Name">
                        </div>
                      </div>


                       <div class="form-group row">
                        <label for="Is_Active" class="col-sm-2 col-form-label">Is&nbsp;Active:</label>
                        <div class="col-sm-10">
                         <label><input type="checkbox"  id="Is_Active" name="Is_Active"   style="zoom:1.5;"></label>
                        </div>
                      </div>


                     




             <center>
              <button type="submit" name="Button" id="Button" class="btn btn-primary">Update</button>

                      
        
        </form>
        


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>







<!-- <script type="text/javascript">
$('.Is_Active').attr('checked', true);
$('.Is_Active').attr('checked', false);

</script>
 -->


<script type="text/javascript">
  function demo(source_id,source_name,Is_Active){
    //alert(Designation_Id);
    // document.getElementById("fba_id").value.empty();
   document.getElementById('source_id').value="";
   document.getElementById('source_name').value="";
   // document.getElementById('Is_Active').value="";
   // $("#Is_Active").val(res.query[0].Is_Active);
 

    document.getElementById("source_id").value += source_id;
    document.getElementById("source_name").value += source_name;
    //document.getElementById("Is_Active").value += Is_Active;
 
    if(Is_Active!=0){
    	$("#Is_Active").attr("checked", true);
    }else{
    	$("#Is_Active").attr("checked", false);
    }
    
    // $("#Is_Active").val(res.query[0].Is_Active);
   
  }
</script>


<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>



<!-- <script type="text/javascript">
	if (res.query[0].Is_Active == '1')
   $('#IsActive').find(':checkbox[name=Is_Active][value="1"]').prop('checked', true);
  else
  $('#IsActive').find(':checkbox[name=Is_Active][value="0"]').prop('checked', true);

</script> -->
@endsection