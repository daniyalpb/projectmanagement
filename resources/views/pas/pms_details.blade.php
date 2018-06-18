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

           
<div class="table-responsive">
  
   <table id="example" class="table table-bordered table-striped">
     <thead>
         <tr>
              <th>ID</th>
                <th>Employee ID</th>
               
                <th>Created On</th>
            </tr>

            </thead>
            <tbody>
              @foreach($query as $val)
              <tr>
                <td>{{$val->ap_id}}</td>
                <td><a href="#" onclick="get_emp_details(' {{$val->ap_id}}');" > {{$val->emp_id}}  </a></td>
                 
                <td>{{$val->create_on}}</td>
              </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
 
</div>
</div>


<div id="myModal_id" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" style="width: 80%">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Show PAS</h4>
      </div>
      <div class="modal-body">
       
        <table class="table table-bordered table-striped">
          <thead>
               <tr>
                  <th>PAS - 2018</th>
                  <th>Weightage (A)</th>
                  <th>Points out of 100 (B)</th>
                  <th>Self Score (A X B)</th>
                  <th>Manager's Rating</th>
                </tr>
          </thead>
          <tbody id="append_tbale">
          </tbody>
        </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

                 

  
  <script type="text/javascript">


  
     function get_emp_details(id){
         $('#append_tbale').empty();
         $.get("{{url('pas-data')}}",{ap_id:id}).done(function(data){ 
         $('#myModal_id').modal();arr=Array();
         $(data).each(function(index,val){   
           arr.push('<tr> <td width="60%"> <p><h4>'+val.title+'</h4></p>'+val.description+'<p> </p>  </td><td width="8%"><input type="text" id="num_text" name="weightage[0]" onkeypress="return Numeric(event)" value="'+val.weightage+'" > </td><td width="8%" ><input type="text" id="num_text" name="points[0]" onkeypress="return Numeric(event)" value="'+val.points+'"  > </td><td width="8%"><input type="text" id="num_text" name="score[0]" onkeypress="return Numeric(event)" value="'+val.Score+'"> </td><td width="8%"> <select class="form-control" id="rating" name="rating[0]" > <option selected value="0" >Rating</option> <option value="1" '+canDrinkAlcohol(val.rating,1)+'  >1</option> <option value="2" '+canDrinkAlcohol(val.rating,2)+'>2</option> <option value="3" '+canDrinkAlcohol(val.rating,3)+'>3</option> <option value="4" '+canDrinkAlcohol(val.rating,4)+'>4</option> <option value="5" '+canDrinkAlcohol(val.rating,5)+'>5</option> </select> </td></tr>');
         });      
         $('#append_tbale').append(arr);
         }).fail(function(s,status,error){
         });
     }
     function canDrinkAlcohol(selected,val) {return (selected==val) ? "selected" : "";}
  </script>
 
@endsection
<style type="text/css">
   #num_text {width:100%; padding:5px;border-radius:5px; border:1px solid #ccc;}
</style>