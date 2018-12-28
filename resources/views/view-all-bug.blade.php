@extends('include.master')
@section('content')
  <div class="content">
  <div class="box box-default">
  <div class="box-header with-border">
  <center><h3 class="box-title"> View All Bug</h3></center> 
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
   <th>Project_Name</th> 
   <th>TaskName</th> 
    <th>Team</th>
    <th>CreateDate</th>
    <th>Reporter</th>
                    <th>Assignee</th>
                    <th>Issues</th> 
                    <th>Description</th>   
                      
                    <th>Environment</th>                            
                  </tr>
                </thead>
                <tbody>
                  @foreach($allbug as $val)
                  <tr>
                     <!-- <td>{{ $no++ }}</td> -->
                     <td>{{$val->Project_Name}}</td>
                     <td>{{$val->TaskName}}</td>
                     <td>{{$val->Team}}</td>
                     <td>{{$val->CreateDate}}</td>
                     <td>{{$val->Reporter}}</td>
                     <td>{{$val->Assignee}}</td>
                     @if($val->Issues=='Done')
                     <td style='color:#1def1d;'>{{$val->Issues}}</td>
                      @elseif($val->Issues=='Done') 
                    <td style='color:yellow; text-decoration:underline;'>{{$val->Issues}}</td>
                     @elseif($val->Issues=='Open'||$val->Issues=='open') 
                    <td style='color:#ec415f; text-decoration:underline;'>{{$val->Issues}}</td>
                     @elseif($val->Issues=='Relesed') 
                    <td style='color:red; text-decoration:underline;'>{{$val->Issues}}</td>
                      @elseif($val->Issues=='closed'||$val->Issues=='Closed') 
                    <td style='color:red; text-decoration:underline;'>{{$val->Issues}}</td>
                     @elseif($val->Issues=='Inprogress') 
                    <td style='color:blue; text-decoration:underline;'>{{$val->Issues}}</td>
                     @else
                     <td>{{$val->Issues}}</td>
                     @endif
                    <td>{{$val->Description}}</td>
                     <td>{{$val->Environment}}</td>
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


