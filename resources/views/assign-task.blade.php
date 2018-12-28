@extends('include.master')
@section('content')
  <div class="content">
    <div class="box box-default">
        <div class="box-header with-border">
         <center><h3 class="box-title">Assign Task</h3></center> 
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

         <div class="box-body ">
   <!-- <center><h3 style="color: #0099FF;">Employee list</h3></center><hr> -->
         <div class="table-responsive">
                 <table class="table table-bordered" id="example">
                <thead>
                  <tr>
                   <!--  <th>Sr.No</th>  -->
                     <th>ID</th> 
                    <th>Employee Code</th> 
                    <th>Employee Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Desination</th> 
                    <th>Is Active</th>                                 
                  </tr>
                </thead>
                <tbody>
            @foreach($data as $val)
         
      <td><a  href="#" onclick="AssignTaskFn ('{{$val->id}}','{{$val->email}}','{{$val->emp_id}}')"->{{$val->id}}</a>
 </td> 
                     <td>{{$val->emp_id}}</td>
                     <td>{{$val->emp_name}}</td>
                     <td>{{$val->mobile}}</td>
                     <td>{{$val->email}}</td>
                     <td>{{$val->address}}</td>
                     <td>{{$val->desination}}</td>
                     <td>{{$val->is_active}}</td>

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



  <div class="modal fade" id="Assign-Task-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
  <div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Create Issue</h5>


  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
 </button>
 </div>
 <div class="modal-body" style="height:500px">
 <form class="form-horizontal" method="post"  id="TicketRequest_Id_from" > {{ csrf_field() }}
 <input type="hidden" name="emp_id" id="emp_id" >
 <div class="form-group">
 <label for="inputEmail" class="control-label col-xs-2"> Tag</label>
  <div class="col-xs-10">
  <select name="emp_id_count"   class="form-control"  id="emp_id_count">
  <option value="0">select</option>
  @foreach($data as $val)
  <option value="{{$val->emp_id}}">{{$val->emp_name}}</option>
  @endforeach
  </select>
</div>

<br>

<br>


<br>


  <div class="col-md-12 ">
  <div class="col-md-12 ">
 <div class="form-group" style="margin-left:15%">
 <input class="form-control" name="ModuleName" id="ModuleName"  required="yes" placeholder="Task Name"  >

 </div>
 </div>

</div>


    <div class="col-md-12 ">
  <div class="col-md-12 ">
 <div class="form-group" style="margin-left:15%">
<input class="form-control" name="TaskName" id="TaskName"  required="yes" placeholder="Task Name"  >

 </div>
 </div>

</div>


<div class="col-md-12 ">
 <div class="col-md-12 ">
 <div class="form-group" style="margin-left:15%" >
  <input type="text" class="form-control datepicker_id" id="CreateDate" name="CreateDate"  placeholder="Due Date"  required>
  <label class="control-label" for="inputError"><span id="err_date_of_joining" class="error_class"></span></label>
  </div>
  </div>
  </div>




<div class="col-md-12 ">
 <div class="col-md-12 ">
 <div class="form-group" style="margin-left:15%" >
 <select name="Issues"  class="form-control"  id="project_id">
  <option value="Priority" >Priority</option>
   <option value="Minor">Major</option>
   <option value="Major">Minor</option>
 </select>
  </div>
  </div> 
</div>



<div class="col-md-12 ">
 <div class="col-md-12 ">
 <div class="form-group" style="margin-left:15%" >
 <select name="IssueType"  class="form-control"  id="project_id">
  <option value="Priority" >Issue Type</option>
   <option value="Minor">Bug</option>
 </select>
  </div>
  </div> 
</div>




  <label for="inputEmail" class="control-label col-xs-8" id="totalcount"></label>
  <br>
  </div> 




                
</form>
  </div>
  <div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary" id="Save_Task_Details">Save changes</button>
  </div>
  </div>
  </div>
  </div>

  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.12.2/semantic.min.css" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.12.2/semantic.min.js"></script>

  <script type="text/javascript">
  function AssignTaskFn(id,emp_id,emp_name){  
   $('#id').val(id);


    
   $('#emp_id').val(emp_id);
   $('#emp_name').val(emp_name);
  
   $('#Assign-Task-Modal').modal('show');}
  $(document).on('click','#Save_Task_Details',function(e){  e.preventDefault();
 //ceckemail=checkEmails();
  // if($('#emp_id').val()==0){
  // alert("Please select user");
  // }
  // else if(ceckemail!=0){
  // alert("Please add email");
  // }
  // else{
  // $.post("{{url('ticket-request-save')}}",$('#TicketRequest_Id_from').serialize())
  //  .done(function(data){ 
  //   console.log(data);
    
  //   if(data==0){



    alert('Task has been successfully assigned to '+$("#emp_id_count").children("option").filter(":selected").text()); 
     window.location.href = "{{url('assign-task')}}";
   //}
   // }else{
   //  console.log("error");
   //  }
   // }).fail(function(xhr, status, error) {
   //  alert('Something went wrong');  
   // });



   
  

 });

function checkEmail(email) {
//var regExp = /(^[a-z0-9]([a-zA-Z0-9_\.\-]*)@([a-z_\.]*)([.][a-z]{3})$)|(^[a-z]([a-zA-Z0-9\-]*)@([a-z_\.]*)(\.[a-z]{3})(\.[a-z]{2})*$)/i;

 regExp =/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm;
return regExp.test(email);
}

  function checkEmails(){
  var emails = document.getElementById("email").value;
  var emailArray = emails.split(",");
  var invEmails = "";
  var tru=1;
  for(i = 0; i <= (emailArray.length - 1); i++){
    if(checkEmail(emailArray[i])){
      //Do what ever with the email.
        tru=0;
    }else{
      invEmails += emailArray[i] + "\n";
      tru=1;
    }
  }
  if(invEmails != ""){
    //alert("Invalid emails:\n" + invEmails);
  }

  return true;
}
</script>

  <script>
  $(document).ready(function() {
  $('#example').DataTable();
  } );
  </script>

  <script type="text/javascript">
    $('#emp_id_count').change(function(){
        var id = $(this).val();
        $.ajax({
            url : 'get-count-value/{id}',
            type : 'get',
            data : { id:id },
            success : function(msg){
              alert(msg);
              //$('#totalcount').text(" This Employee is Already "+msg[0].total+"        task is Assigned");
            }
        })
    });
  </script>



@endsection