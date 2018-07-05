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
           <form class="form-horizontal" name="source_master" id="source_master" method="post">
           {{csrf_field()}}


          

                   <div class="form-group row">
                        <label for="p_source_name" class="col-sm-4 col-form-label">Source Name:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="p_source_name" name="p_source_name"   placeholder="Source Name"  required>
                        </div>
                      </div>




                       <div class="form-group row">
                        <label for="p_is_Active" class="col-sm-4 col-form-label">Is&nbsp;Active:</label>
                        <div class="col-sm-8">
                         <input type="checkbox" id="p_is_Active" name="p_is_Active" value="Yes" style="zoom:1.5;">
                        </div>
                      </div>

                 <!--  <center>
              
                        <button type="submit" id="sub" class="btn btn-primary">Submit</button> -->
                    <!-- <button type="submit" id="sub" class="btn btn-primary">Submit</button> -->
                     <!--  <input type="submit" name="sub" value="submit" id="sub" class="btn btn-primary"> -->
                      <!-- <input type="Reset" value="Reset" class="btn btn">
            
                  </center>
 -->

              <center>
                
                   <button type="submit" id="sub" class="btn btn-primary">Submit</button>
                   <input type="Reset" value="reset" class="btn btn">
               
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
            <td><i class="fa fa-edit" id="GridView1_lblEdit_4" href="javascript:__doPostBack('GridView1$ctl06$lblEdit','' )" onclick="demo('{{$val->source_id}}','{{$val->source_name}}','{{$val->Is_Active}}')" data-toggle="modal" data-target="#myModal"></i></td>
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


         <center><h3 style="color: #0099FF;">Edit Source Master</h3></center>
          <hr>


  
          <form id="demo_form" name="demo_form" method="POST" action="{{url('update-source-master')}}"> 

                {{csrf_field()}} 
          

                   <div class="form-group row">
                        <label for="source_id" class="col-sm-2 col-form-label">Source&nbsp;Id:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="source_id" name="source_id"  value="" placeholder="Enter a Bank Name">
                        </div>
                      </div>


                      <div class="form-group row">
                        <label for="source_name" class="col-sm-2 col-form-label">Sourec&nbsp;Name:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="source_name" name="source_name"  value="" placeholder="Enter a Bank Name">
                        </div>
                      </div>


                       <div class="form-group row">
                        <label for="Is_Active" class="col-sm-2 col-form-label">Is&nbsp;Active:</label>
                        <div class="col-sm-8">
                         <label><input type="checkbox"  id="Is_Active" name="Is_Active"   style="zoom:1.5;"></label>
                        </div>
                      </div>


                     




            <center>
                    <div class="col-sm-12">
                      <button type="submit" id="submit"  name="submit"  class="btn btn-primary">Submit</button>
                    </div>
                </center>
                      
        
        </form>
        


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
        

<script type="text/javascript">
  function demo(source_id,source_name,Is_Active){
  
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

      $(document).ready(function() {
    $('#example').DataTable();
} );
</script>




<!-- <script type="text/javascript">
      $(function (){
        $('form').on('submit', function (e) {
          e.preventDefault();
          $.ajax({
            type: 'post',
            url: 'update-source-master',
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
    </script> -->
@endsection