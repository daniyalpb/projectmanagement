@extends('include.master')
@section('content')
  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
           <h3 class="box-title">Message master</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        <div class="box-body">
          <div class="row"> 
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-6 col-sm-offset-2">
          <form class="form-horizontal" name="message_master" id="message_master"  method="post">
           {{csrf_field()}}
          

                   <div class="form-group row">
                        <label for="messageTitle" class="col-sm-5 col-form-label">Message&nbsp;Title:</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="messageTitle" name="messageTitle"  value="" placeholder="Title Name"  required>
                        </div>
                      </div>



                      <div class="form-group row">
                        <label for="messageBody" class="col-sm-5 col-form-label">Message&nbsp;Body:</label>
                        <div class="col-sm-7">
                          <textarea type="text" class="form-control" id="messageBody" name="messageBody" value="" placeholder="Enter a Message"  required></textarea>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="is_Active" class="col-sm-5 col-form-label">Is&nbsp;Active:</label>
                        <div class="col-sm-7">
                         <label><input type="checkbox"  id="is_Active" name="is_Active" value="Yes" style="zoom:1.5;"></label>
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
                <th>Message Id</th>
                <th>Message Title</th>
                <th>Message Body</th>
                <th>Is Active</th>
                <th>Created Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
          @foreach($smsdata as $val)
              <tr>
                <td>{{$val->message_id}}</td>
                <td>{{$val->messageTitle}}</td>
                <td>{{$val->messageBody}}</td>
                <td>{{$val->is_Active}}</td>
                <td>{{$val->Sysdate}}</td>
                <td><a href="select" data-toggle="modal" data-target="#myModal"  onclick="demo('{{$val->message_id}}','{{$val->messageTitle}}','{{$val->messageBody}}','{{$val->is_Active}}')" >Edit</a></td>
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


         <center><h3 style="color: #0077FF;">Edit Message Master</h3></center>
          <hr>


  
          <form id="demo_form" name="demo_form" method="POST" action="{{url('update_message_master')}}"> 
                {{csrf_field()}} 
          

                   <div class="form-group row">
                        <label for="m_message_id" class="col-sm-3 col-form-label">Id:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="m_message_id" name="m_message_id"  value="" placeholder="Enter a Bank Name"  required>
                        </div>
                      </div>



                   <div class="form-group row">
                        <label for="m_messageTitle" class="col-sm-3 col-form-label">Message&nbsp;Title:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="m_messageTitle" name="m_messageTitle"  value="" placeholder="Enter a Bank Name"  required>
                        </div>
                      </div>

                        <div class="form-group row">
                        <label for="m_messageBody" class="col-sm-3 col-form-label">Message&nbsp;Body:</label>
                        <div class="col-sm-9">
                          <textarea type="text" class="form-control" id="m_messageBody" name="m_messageBody"  value="" placeholder="Enter a Address"  required></textarea>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="m_is_Active" class="col-sm-3 col-form-label">Is&nbsp;Active:</label>
                        <div class="col-sm-9">
                         <label><input type="checkbox"  id="m_is_Active" name="m_is_Active"  style="zoom:1.5;"></label>
                        </div>
                      </div> 





             <center>
              <button type="submit" name="Button" id="Button" class="btn btn-primary">Update</button>
            </center>

                      
        
        </form>
        


      
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
  function demo(message_id,messageTitle,messageBody,is_Active){
    //alert(Designation_Id);
    // document.getElementById("fba_id").value.empty();
   document.getElementById('m_message_id').value="";
   document.getElementById('m_messageTitle').value="";
   document.getElementById('m_messageBody').value="";
   //document.getElementById('m_is_Active').value="";
 
   document.getElementById("m_message_id").value += message_id;
   document.getElementById("m_messageTitle").value += messageTitle;
   document.getElementById("m_messageBody").value += messageBody;
   //document.getElementById("m_is_Active").value += is_Active;



 if(is_Active!=0){
      $("#m_is_Active").attr("checked", true);
    }else{
      $("#m_is_Active").attr("checked", false);
    }



  }
    
</script>


    <script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
      @endsection
