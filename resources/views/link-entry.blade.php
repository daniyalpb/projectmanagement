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
  <center><h3 style="color: #0099FF;">Message Link Details</h3></center><hr>
          <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-6 col-sm-offset-2">
          <form class="form-horizontal" name="profession_master" id="profession_master"  method="post">
           {{csrf_field()}}
          

                   <div class="form-group row">
                        <label for="link" class="col-sm-3 col-form-label">Enter&nbsp;Link&nbsp;Name:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="link" name="link"  value="" placeholder="Enter a Link Name"  required>
                        </div>
                      </div>



                      <div class="form-group row">
                        <label for="MsgBody" class="col-sm-3 col-form-label">Enter&nbsp;Message&nbsp;Body:</label>
                        <div class="col-sm-8">
                          <textarea type="text" class="form-control" id="MsgBody" name="MsgBody"  value="" placeholder="Enter a Message Body"  required></textarea>
                        </div>
                      </div>


                       <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">Enter&nbsp;Title:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="title" name="title"  value="" placeholder="Enter a Title"  required>
                        </div>
                      </div>



                    
                        <center>
                <input type="submit" name="Button1" value="Submit" id="Button1" class="btn btn-primary">
              </center>
            </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>




         <script type="text/javascript">
     window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 1000);
</script>


@endsection


