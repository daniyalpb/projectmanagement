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
                    <th>Module Name</th> 
                    <th> Name</th>
                    <th>CreatedDate</th>
                    <th>Description</th>
                         
                  </tr>
                </thead>
                <tbody>
            @foreach($data as $val)
         
   
                     <td>{{$val->Id}}</td>
                     <td>{{$val->Module_Name}}</td>
                        <td>{{$val->Name}}</td>
                      <td>{{$val->CreateDate}}</td>
                     <td>{{$val->Description}}</td>
                 
                 
                  
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
  @endsection