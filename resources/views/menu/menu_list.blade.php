@extends('include.master')
@section('content')
  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Menu List</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

         <div class="box-body">

 


            <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-6 col-sm-offset-2">
                   <form class="form-horizontal"   method="post" action="{{url('menu-list-add')}}">  {{csrf_field()}}
                     
                 

                     <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Select Menu</label>
                        <div class="col-sm-10">
                         <select class="form-control select2" style="width: 100%;" name="menu_id">
                             <option value="0">Select Parent</option>
                            @foreach($query as $val)
                            <option value="{{$val->id}}">{{$val->name}}</option>
                            @endforeach
                          
                          </select>
                        </div>
                      </div>


                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Menu Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="name" name="name"     required>
                        </div>
                      </div>

                        <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Level</label>
                        <div class="col-sm-10">
                         <input type="text" class="form-control" id="lvl" name="lvl"     required>
                          
                        </div>
                      </div>


                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">URL LINK</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="url_link" name="url_link"     required>
                        </div>
                      </div>



 
                    <div class="form-group"> <center>
                        <input type="submit" name="Button1" value="Submit" id="Button1" class="btn btn-primary">
                        <input type="Reset" name="Button2" value="Reset" id="Button2" class="btn btn-primary">
                      </center>
                  </div>
                  </form>        
                </div>  
              </div>    
            </div>  <!-- End center -->


           

        </div>
  </div>
</div>
 
 
 
 
@endsection