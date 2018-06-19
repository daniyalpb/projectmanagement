@extends('include.master')
@section('content')
  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
        <h3 class="box-title">Bank Contact Details</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
            
        

 <div class="box-body">
  
          <div class="row">  
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                
           <form class="form-horizontal" name="bank-contact" id="bank-contact"  method="post">
           {{csrf_field()}}
     
                   <div class="form-group row">
                    <div class="col-md-6">
                        <label  for="m_Bank_Id" class="col-sm-4 col-form-label">Select&nbsp;Bank:</label>
                        <div class="col-sm-6">
                            <select type="text" class="form-control" id="ddlbank" name="ddlbank" >
                                <option  value="">Select Bank</option>
                                @foreach ($bank as $val)
                                <option value="{{$val->Bank_Id}}">{{$val->Bank_Name}}</option>
                                @endforeach
                           </select>
                       
                        </div>
                  </div>
                </div>  

                 <div class="form-group row">
                    <div class="col-md-6">
                    <label for="Product_Id" class="col-sm-4 col-form-label">Select  Product:</label>
                    <div class="col-sm-6">                     
                     <select multiple="" class="form-control ddlprivetlifeco" id="sel2" name="ddlproduct">
                         @foreach($product as $val)
                           <option value="{{$val->Product_Id}}">{{$val->Product_Name}}</option>
                         @endforeach                          
                     </select>                                      
                   </div>
                 </div>
               </div>

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
         	<th><input type="checkbox"  id="checkAll" name=""></th>
             
                <th>Bank&nbsp;Name</th>
                <th>Product&nbsp;Name</th>
                <th>Co Ordinator Name</th>
                <th>Co&nbsp;Ordinator&nbsp;Contact</th>
                <th>Co&nbsp;Ordinator&nbsp;Email</th>
                <th>Sales&nbsp;Manager&nbsp;Name</th>
                <th>Sales&nbsp;Manage&nbsp;Contact</th>
                <th>Sales&nbsp;Manage&nbsp;Email</th>
                <th>Other&nbsp;Head&nbsp;Name</th>
                <th>Other&nbsp;Head&nbsp;Contact</th>
                <th>Other&nbsp;Head&nbsp;Email</th>
                </tr>
            </thead>
            <tbody>
            	 @foreach ($bank as $val)
            	<tr class="showbank" style="display: none;">
            	<td><input type="checkbox"  id="txtbank" name="txtbank" value="{{$val->Bank_Id}}"></td>           
            	<td>{{$val->Bank_Name}}</td>
              <td></td>
            	<td><input type="text" name="Co_Ordinator_Name" id="Co_Ordinator_Name"></td>
            	<td><input type="text" name="Co_Ordinator_ContactNo" id="Co_Ordinator_ContactNo"></td>
            	<td><input type="text" name="Co_Ordinator_Email" id="Co_Ordinator_Email"></td>
            	<td><input type="text" name="Sales_Manager_Name" id="Sales_Manager_Name"></td>
            	<td><input type="text" name="Sales_Manager_ContactNo" id="Sales_Manager_ContactNo"></td>
            	<td><input type="text" name="Sales_Manager_Email" id="Sales_Manager_Email"></td>
            	<td><input type="text" name="Other_Head_Name" id="Other_Head_Name"></td>
            	<td><input type="text" name="Other_Head_ContactNo" id="Other_Head_ContactNo"></td>
            	<td><input type="text" name="Other_Head_Email" id="Other_Head_Email"></td>
            	</tr>
            	 @endforeach
            	<center>
             <a name="btnsubmit"  id="btnsubmit" class="btn btn-primary">Submit</a>
         </center>

 
            </tbody>
            
    </table>
</div>
</div>
</div>
</form>
</div>
</div>
</div>

</div>
</div>
<!-- <script type="text/javascript">
  <script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script> -->

    <script type="text/javascript">
      $(document).ready(function(){
        $('.showbank').css("display", "");
      });

      
     $("#ddlbank" ).change(function(){

          var ddlval=$("#ddlbank").val();          
          $('#example > tbody  > tr').each(function() {
            if($(this).find('input[id=txtbank]').val()==ddlval){
               $(this).css("display", "");
            }else{
              $(this).css("display", "none");
            }
          });          
    });
      
    </script>
@endsection
