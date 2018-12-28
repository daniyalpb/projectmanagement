@extends('include.master')
@section('content')
<style>
.error_class{
  color:red;
}
.success_class{
  color:green;
}
</style>
 <div class="content">
    <div class="box box-default">
        <div class="box-header with-border">
         <center><h3 class="box-title">Create Issue</h3></center> 
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        <div class="box-body">
      <!-- <center><h3 style="color: #0099FF;">State Master</h3></center><hr> -->
          <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-6 col-sm-offset-2">
          <form name="project_masterq" id="project_masterq" method="post">
           {{ csrf_field() }}                       

                    
        <div class="form-group row">
            <label class="col-sm-3 col-form-label"><b>Project Name:</b></label> 
         <div class="col-md-8">
          <select class="selectpicker select-opt form-control" id="project_id" name="project_name"  required>
              <option selected disabled value="">Select Project</option>
              @foreach($data as $val)
              <option value="{{$val->project_name}}">{{$val->project_name}}</option>
            @endforeach
           </select>
            <label class="control-label" for="inputError"><span id="err_project_id" class="error_class"></span></label>
          </div>
        </div><br>


               
        <div class="form-group row">
            <label class="col-sm-3 col-form-label"><b>Issue Type:</b></label> 
         <div class="col-md-8">
          <select class="selectpicker select-opt form-control" id="issue_id" name="issue_id"  required>
              <option selected disabled value="">Isseu Type</option>
              @foreach($data as $val)
              <option value="{{$val->issuetype}}">{{$val->issuetype}}</option>
            @endforeach
           </select>
            <label class="control-label" for="inputError"><span id="err_project_id" class="error_class"></span></label>
          </div>
        </div><br>



               <div class="form-group row">
                <label for="Break_Type" class="col-sm-3 col-form-label"><b>Summary</b></label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="summary" name="summary"  placeholder="Summary" style="min-width: 50px; height: 50px;" required></input>
                   <label class="control-label" for="inputError"><span id="err_description" class="error_class"></span></label>
                </div>
              </div><br>

           <div class="form-group row">
                <label for="Break_Type" class="col-sm-3 col-form-label"><b>Reporter</b></label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="reporter" name="reporter"  placeholder="Reporter"  required></input>
                   <label class="control-label" for="inputError"><span id="err_description" class="error_class"></span></label>
                </div>
              </div><br>



                  <div class="form-group row">
                        <label for="date_of_joining" class="col-sm-3 col-form-label"> Addition Date:</label>
                        <div class="col-md-8">
                          <input type="text" class="form-control datepicker_id" id="date_of_joining" name="date_of_joining"  placeholder="Addition Date"  required>
                          <label class="control-label" for="inputError"><span id="err_date_of_joining" class="error_class"></span></label>
                        </div>
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

           <div class="col-md-12">
             <div class="col-md-12 success_class" id="success_response"> 

              </div>
               <center>
              <input type="button" name="submit" id="submit" value="Create " class="btn btn-primary">
            </center>
            </div>
            <br>
              </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>


<script type="text/javascript">
  $('#submit').click(function(){
    
   
    $(".error_class").empty();
    $(".success_class").empty();
     var formdata = new FormData($("#project_masterq")[0]);
    $.ajax({  
           type: "POST",  
           url: "{{URL::to('create-issue-form')}}",
            //data : $('#project_m').serialize(),
            data : formdata,
           processData: false,
             contentType : false,
             success: function(msg){
                 //  var response = JSON.parse(msg);
            alert('Data Updated Successfully ');

          // console.log(msg);
              //location.reload();
            }
        }); 
  });
</script>
@endsection