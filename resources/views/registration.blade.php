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
         <center><h3 class="box-title">Registration</h3></center> 
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        <div class="box-body">
      <!-- <center><h3 style="color: #0099FF;">State Master</h3></center><hr> -->
          <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-9 col-sm-offset-2">

          <form name="registration" id="registration">
           {{ csrf_field() }} 

           <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label"><b>Name:</b></label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="name" name="name"  placeholder="Name"  onkeypress="return AllowAlphabet(event);" required>
                  <label class="control-label" for="inputError"><span id="err_name" class="error_class"></span></label>
                </div>
              </div><br><br> 

               <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label"><b>Email:</b></label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="email" name="email"  placeholder="Email" oninput="mail('email')" required>
                  <!-- <span id="email_id" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</span> -->
                  <label class="control-label" for="inputError"><span id="err_email" class="error_class"></span></label>
                </div>
              </div><br><br>

              <div class="form-group row">
                <label for="mobile" class="col-sm-2 col-form-label"><b>Mobile:</b></label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="mobile" name="mobile"  placeholder="Mobile" minlength="10" maxlength="10" 
                 onkeypress="return fnAllowNumeric(event);"  required>
                  <label class="control-label" for="inputError"><span id="err_mobile" class="error_class"></span></label>
                </div>
              </div><br>

               <div class="form-group row">
                <label for="Break_Type" class="col-sm-2 col-form-label"><b>Password:</b></label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="password" name="password"  placeholder="Password" required>
                  <label class="control-label" for="inputError"><span id="err_password" class="error_class"></span></label>
                </div>
              </div><br>


        <!--     @if(Session::has('error-msg'))
              <div class="alert alert-danger"> 
                  {!! session('error-msg') !!}
              </div>
            @endif
            @if(Session::has('success-msg'))
              <div class="alert alert-success"> 
                  {!! session('success-msg') !!}
              </div>
            @endif
 -->

               <div class="col-sm-12">
                <div class="col-md-12 success_class" id="success_response">        
                 </div>
                <center>
              <input type="button" name="submit" id="submit" value="Submit" class="btn btn-primary">
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
    //alert('oke');
    $(".error_class").empty();
     $(".success_class").empty();
     var formdata = new FormData($("#registration")[0]);
    $.ajax({  
           type: "POST",  
           url: "{{URL::to('registration-form')}}",
            //data : $('#project_m').serialize(),
            data : formdata,
           processData: false,
             contentType : false,
             success: function(msg){
                   var response = JSON.parse(msg);
                    if(response.status == "success"){
                      $("#success_response").html(response.messege);
          window.location = response.redirectUrl;

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
@endsection