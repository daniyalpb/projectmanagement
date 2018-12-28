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
         <center><h3 class="box-title">Menu List</h3></center> 
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
          <form name="menu_list" id="menu_list" method="post">
           {{ csrf_field() }}                       

                    
        <div class="form-group row">
            <label class="col-sm-3 col-form-label"><b>Parent Menu:</b></label>
         <div class="col-md-9">
          <select class="selectpicker select-opt form-control" id="parent_id" name="parent_id"  required>
              <option selected disabled>Select One</option>
              @foreach($data as $val)
              <option value="{{$val->id}}">{{$val->name}}</option>
              @endforeach              
           </select>
            <label class="control-label" for="inputError"><span id="err_parent_id" class="error_class"></span></label>
          </div>
        </div><br><br>


        <div class="form-group row">
                <label for="Break_Type" class="col-sm-3 col-form-label"><b>Menu Name:</b></label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="menu_name" name="menu_name"  placeholder="Menu Name" required>
                   <label class="control-label" for="inputError"><span id="err_menu_name" class="error_class"></span></label>
                </div>
              </div><br><br> 

               <div class="form-group row">
                <label for="Break_Type" class="col-sm-3 col-form-label"><b>Level:</b></label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="level_name" name="level_name"  placeholder="Level"  required>
                   <label class="control-label" for="inputError"><span id="err_level_name" class="error_class"></span></label>
                </div>
              </div><br><br>

              <div class="form-group row">
                <label for="Break_Type" class="col-sm-3 col-form-label"><b>Sequence:</b></label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="sequence" name="sequence"  placeholder="Sequence"  required>
                   <label class="control-label" for="inputError"><span id="err_sequence" class="error_class"></span></label>
                </div>
              </div><br><br>

              <div class="form-group row">
                <label for="Break_Type" class="col-sm-3 col-form-label"><b>URL LINK:</b></label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="url_link" name="url_link"  placeholder="URL LINK" required>
                   <label class="control-label" for="inputError"><span id="err_url_link" class="error_class"></span></label>
                </div>
              </div><br><br>




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
              <input type="button" name="submit" id="submit" value="Submit Task" class="btn btn-primary">
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
    alert('oke');
    $(".error_class").empty();
    $(".success_class").empty();
     var formdata = new FormData($("#menu_list")[0]);
    $.ajax({  
           type: "POST",  
           url: "{{URL::to('menu-list-form')}}",
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