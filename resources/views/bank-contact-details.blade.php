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
  <!-- <center><h3 style="color: #0099FF;">City Master</h3></center><hr> -->
          <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <!-- <div class="col-sm-6 col-sm-offset-2"> -->
           <form class="form-horizontal" name="bank-contact" id="bank-contact"  method="post">
           {{csrf_field()}}
     
                   <div class="form-group row">
                    <div class="col-md-6">
                        <label  for="m_Bank_Id" class="col-sm-4 col-form-label">Select&nbsp;Bank:</label>
                        <div class="col-sm-6">
                        
                     <!--      <select type="checkbox" name="" class="form-control" id="Bank_Id" name="Bank_Id">
                             <option selected disabled value="0">Select One</option>   
                               <div class="dropdown-menu">                        
                                 @foreach($users as $user)
                                  <option value="{{$user->Bank_Id}}">{{$user->Bank_Name}}</option>
                                  @endforeach  
                               </div>
                          </select> -->



                          <button type="button" class="btn btn-default btn-sm dropdown-toggle form-control" value="" data-toggle="dropdown"><span>Select Bank Name</span> <span class="caret"></span></button>
                            <ul class="dropdown-menu" style="width:280px;height:400px;overflow: scroll;">
                               @foreach($users as $user)
                              <li value="{{$user->Bank_Id}}"><a href="#" class="small" data-value="option1" tabIndex="-1" ><input type="checkbox"/>{{$user->Bank_Name}}</a></li>
                              @endforeach  
                            </ul>
                       
                        </div>
                  </div>
                </div>  

                 <div class="form-group row">
                    <div class="col-md-6">
                    <label for="Product_Id" class="col-sm-4 col-form-label">Select&nbsp;Product:</label>
                    <div class="col-sm-6">
                     <select type="text" class="form-control" id="Product_id" name="Product_id" >
                     	 <option  value="">Select One</option>
                        @foreach($select as $select)
                       <option value="{{$select->Product_Id}}">{{$select->Product_Name}}</option>
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
            	@foreach($smsdata as $val)
            	<tr>
            	<td><input type="checkbox"  id="checkAll" name=""></td>
           
            	<td>{{$val->Bank_Name}}</td>
              <td>{{$val->Product_Name}}</td>
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
             <input type="submit" name="Button1" value="Submit" id="Button1" class="btn btn-primary">
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

    <script type="text/javascript">
      $(document).ready(function(){
        $("#checkAll").click(function () {
          $("INPUT[id^='checkAll']").not(this).prop('checked', this.checked);
          // $('input:checkbox').not(this).prop('checked', this.checked);
          // len=$(".check_list:checkbox:checked").length;
          // $('#msg_check').text(len+"/");
        });
      });
    </script>


<!-- <script type="text/javascript">
  $('#LeadType').on('change',function(){
  var LeadType=$('#LeadType').find(":selected").val();
  if ( LeadType == 'WB')
  {
  $("#active").hide();
  $("#active_no").hide();
  $("#create").show();
  $("#credite_no").show();
  }
  else{
 $("#active").show();
 $("#active_no").show();
  $("#create").hide();
  $("#credite_no").hide();
  }
  });
</script>

<script type="text/javascript">
  $(function() {
     $(".multiselect").multiselect();
});
 jQuery.fn.multiselect = function() {
    $(this).each(function() {
        var checkboxes = $(this).find("input:checkbox");
        checkboxes.each(function() {
            var checkbox = $(this);
            // Highlight pre-selected checkboxes
            if (checkbox.prop("checked"))
                checkbox.parent().addClass("multiselect-on");
 
            // Highlight checkboxes that the user selects
            checkbox.click(function() {
                if (checkbox.prop("checked"))
                    checkbox.parent().addClass("multiselect-on");
                else
                    checkbox.parent().removeClass("multiselect-on");
            });
        });
    });
};
</script> -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );

$( '.dropdown-menu a' ).on( 'click', function( event ) {

   var $target = $( event.currentTarget ),
       val = $target.attr( 'data-value' ),
       $inp = $target.find( 'input' ),
       idx;

   if ( ( idx = options.indexOf( val ) ) > -1 ) {
      options.splice( idx, 1 );
      setTimeout( function() { $inp.prop( 'checked', false ) }, 0);
   } else {
      options.push( val );
      setTimeout( function() { $inp.prop( 'checked', true ) }, 0);
   }

   $( event.target ).blur();
      
   console.log( options );
   return false;
});
</script>
      @endsection
