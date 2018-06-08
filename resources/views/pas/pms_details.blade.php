@extends('include.master')

@section('content')

  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Performance Appraisal System - 2018</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>


        <div class="box-body">
       <div class="row">
        <div class="col-xs-12">
            
              <form action="{{url('asp-insert')}}" method="post" id="pas_from_id">{{csrf_field()}}            
            <div class="box">
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover" id="append_id">

              <thead>
                <tr>
                  <th>PAS - 2018</th>
                  <th>Weightage (A)</th>
                  <th>Points out of 100 (B)</th>
                  <th>Self Score (A X B)</th>
                  <th>Manager's Rating</th>
                </tr>
             </thead>

           <tbody  id="append_alltext">
           <!--  <tr><td width="60%">
             <p> <h4>Job Knowledge</h4> </p>
             Awareness of various producsts Timely update in ERP - Sales discipline.
            </td>
            <td width="8%"><input type="text"  id="num_text" name="weightage[0]" value="10" onkeypress="return Numeric(event)" readonly > </td>
            <td width="8%" ><input type="text"  id="num_text" name="points[0]" onkeypress="return Numeric(event)" > </td>
            <td width="8%"><input type="text" id="num_text" name="score[0]"  onkeypress="return Numeric(event)"> </td>
              <td><select  class="form-control" id="rating" name="rating[0]" >
                          <option   selected  value="0" >Rating</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option></select>
              </td></tr>


            <tr><td width="60%">
             <p> <h4>Business Acumen</h4> </p>
             Understands impact of our services on  prospects & customers Decides in best interest of the company.
            </td>
            <td width="8%"><input type="text"  id="num_text" name="weightage[0]" onkeypress="return Numeric(event)" value="10" readonly> </td>
            <td width="8%" ><input type="text"  id="num_text" name="points[0]" onkeypress="return Numeric(event)" > </td>
            <td width="8%"><input type="text" id="num_text" name="score[0]"  onkeypress="return Numeric(event)"> </td>
              <td >
                  <select  class="form-control" id="rating" name="rating[0]" >
                          <option   selected  value="0" >Rating</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option></select>
              </td>
            </tr>


           
            <tr>
            <td width="60%">
             <p> <h4>Customer Orientation</h4> </p>
                  Demonstrates a sense of urgency around meeting customer needs  
                  Responds quickly & appropriately  
                  Takes ownership/accountability of issues . 
            </td>
            <td width="8%"><input type="text"  id="num_text" name="weightage[0]" onkeypress="return Numeric(event)"  value="10" readonly> </td>
            <td width="8%" ><input type="text"  id="num_text" name="points[0]" onkeypress="return Numeric(event)" > </td>
            <td width="8%"><input type="text" id="num_text" name="score[0]"  onkeypress="return Numeric(event)"> </td>
              <td >
                  <select  class="form-control" id="rating" name="rating[0]" >
                          <option   selected  value="0" >Rating</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option> </select>
                          </td>
            </tr>
    
         <tr>
            <td width="60%">
             <p> <h4>Business</h4> </p>
              
            </td>
            <td width="8%"><input type="text"  id="num_text" name="weightage[0]" onkeypress="return Numeric(event)"  value="70" readonly> </td>
            <td width="8%" ><input type="text"  id="num_text" name="points[0]" onkeypress="return Numeric(event)" > </td>
            <td width="8%"><input type="text" id="num_text" name="score[0]"  onkeypress="return Numeric(event)"> </td>
              <td >
                  <select  class="form-control" id="rating" name="rating[0]" >
                          <option   selected  value="0" >Rating</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                  </select>
              </td>
            </tr> -->



      </tbody>
           

            </table>
            </div>
             <center>
               
            
             
               <button class="btn btn-primary textfiledpasbtn">Submit</button>
             </center>
            </div>
             
            </form>
           </div>
         </div>
     </div>
  </div>
</div>
 
 <script type="text/javascript">

var Job_Knowledge='<p><h4>Job Knowledge</h4></p>Awareness of various producsts Timely update in ERP - Sales discipline.';
var Business_Acumen='<p><h4>Business Acumen</h4></p>Understands impact of our services on  prospects & customers Decides in best interest of the company.';
var Customer_Orientation='<p><h4>Customer Orientation</h4></p> Demonstrates a sense of urgency around meeting customer needs  Responds quickly & appropriately  Takes ownership/accountability of issues  .';
var People_Handling='<p> <h4>People Handling</h4></p>Resolving conflict with positivity  Ability to work in Team (Cross geography / Cross Functional)   .';
var Productivity_Decision_Making='<p><h4>Productivity & Decision Making</h4></p> Sees bigger picture, Takes initiatives, Proactive & Accountable Focusses on overall team productivity.';
var Team_Management='<p><h4>Team Management </h4></p>Encourages information sharing, constructive criticism and cooperation    Respects his subordinates, Nurtures & Develops non performers  .';
var Business='<p> </p> .';


var inputtyp='<td width="8%"><input class="text_style1" type="text"  name="weightage[]" onkeypress="return Numeric(event)"  value="10" readonly> </td><td width="8%"><input class="text_style1" type="text"  name="points[]" onkeypress="return Numeric(event)" > </td><td width="8%"><input class="text_style1" type="text"  name="score[]" onkeypress="return Numeric(event)" readonly> </td><td width="8%"><select  class="form-control text_style1" id="rating" name="rating[0]" > <option   selected  value="0" >Rating</option><option value="1">1</option> <option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></td>';
 id=3;
 var arr;
  if(id==1){
     arr=Array(Job_Knowledge,Business_Acumen,Customer_Orientation,Business);
  }else if(id==2){
      arr=Array(Job_Knowledge,Business_Acumen,People_Handling,Customer_Orientation,Business);
  }else if(id==3){
    arr=Array(Productivity_Decision_Making,Business_Acumen,Team_Management,Customer_Orientation,Business);
  }

 var append_arr=Array();
 for(i=0;i<arr.length;i++){
      //console.log();
     append_arr.push('<tr>'+'<td width="60%">'+arr[i]+inputtyp+'</tr>');
      
 }

 $('#append_alltext').append(append_arr);




 function nancheck(rows) {
    rows=parseInt(rows);
    return a= isNaN(rows)==true ? 0 : rows;}
var total_value=0;

    $(document).on("input", "#append_id input",function(e){
  var $tr = $(this).closest('tr'); 
  Sum_Insured_Table_other($tr);
}).trigger('input'); 
 function Sum_Insured_Table_other($tr){
   var tot=1 ;  
   $('td input', $tr).each(function(index,c) { 
            
    // if($(this).val()!=0){
    //   tot += Number(nancheck($(this).val())) || 0; 
    // } 
       //$('td:nth-last-child(2)', $tr).text(tot);
     // $('input:text:eq(2)', $tr).val(tot);
  
        if(index<2){ 
          tot *= Number(nancheck($(this).val())); 
         
        }
          $('input:text:eq(2)', $tr).val(tot);
       
        
      //  x='<input class="text_style1" type="text" name="score[]" onkeypress="return Numeric(event)" readonly="" value='+tot+'>';
        //$('td:nth-last-child(2)', $tr).html(x);
 

  });     }
 </script>
 
 
 
@endsection
<style type="text/css">
.text_style1 {width:100%; padding:5px;border-radius:5px; border:1px solid #ccc;}

</style>