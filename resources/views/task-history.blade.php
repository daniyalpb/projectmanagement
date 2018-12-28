@extends('include.master')
@section('content')

<div class="content">
    <div class="box box-default">
        <div class="box-header with-border">
         <center><h3 class="box-title">Task Details</h3></center> 
          <div class="box-tools pull-right">
<!--             <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
 -->          </div>
        </div>


                 <table class="table table-bordered">
                <thead>
                  <tr>
                   <!--  <th>Sr.No</th>  -->
                         <th>ID</th> 
                     <th>Project Name</th> 
                      <th>Status</th> 
                      <th>Devloper</th> 
                       <th>Edit</th> 
                   
                                                
                  </tr>
                </thead>
                <tbody>

            @foreach($user as $val)
              <tr>
              <td>{{$val->id}} </td>
              <td>{{$val->project_name}} </td>
             <td>{{$val->status}} </td> 
             <td>{{$val->devloper}}</td>
         

        
    


 <td ><a href="task-history-view/{{$val->id}}" class="btn btn-success a-btn-slide-text">
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Edit</strong></span>            
    </a></td>

         
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



