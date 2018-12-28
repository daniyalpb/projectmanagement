@extends('include.master')
@section('content')
  <div class="content">
    <div class="box box-default">
        <div class="box-header with-border">
         <center><h3 class="box-title">Tag Activity</h3></center> 
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
                     <th>Name</th> 
                    <th>Taged To</th> 
                    <th> Taged On</th>
                    <th>Completed</th>
                    <th>TaggedDate</th>
                    
                  </tr>
                </thead>
                <tbody>
            @foreach($data as $val)
         
                       <td>{{$val->emp_name}}</td>
                     <td>{{$val->TagedTo}}</td>
                      <td>{{$val->TagedOn}}</td>
                      <td>{{$val->Completed}}</td>
                      <td>{{$val->TaggedDate}}</td>
                      
                 
                  
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
  <script>
  $(document).ready(function() {
  $('#example').DataTable();
  } );


  


  </script>
  @endsection