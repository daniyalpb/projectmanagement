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
      <div class="row">
        <div class="Absolute-Center is-Responsive">
          <div id="logo-container"></div>
          <!-- <div class="col-sm-6 col-sm-offset-2"> -->
            <form class="form-horizontal" name="break_master" id="break_master"  method="post">
              {{csrf_field()}}



            <div class="col-md-6">
                   <div class="form-group row">
                        <label for="txtfdate" class="col-sm-3 col-form-label">From&nbsp;Date:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control datepicker_id" id="txtfdate" name="txtfdate" value="<?php echo date('Y-m-01');?>">                
                        </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="txttdate" class="col-sm-3 col-form-label">To&nbsp;Date:</label>
                    <div class="col-sm-6">
                     <input type="text" class="form-control datepicker_id" id="txttdate" name="txttdate" value="<?php echo date('Y-m-t');?>">                     
                   </div>
                 </div>
                 </div>

             
                 <div class="col-md-6">
                   <div class="form-group row">
                        <label for="Bank_Id" class="col-sm-3 col-form-label">Dashboard:</label>
                        <div class="col-sm-6">
                          <select type="text" class="form-control" id="Bank_Id" name="Bank_Id">
                          	 <option disabled selected value="">Select One</option>
	                           <option value="T">Team Wise</option>
	                           <option value="P">Product Wise</option>
	                           <option value="L">Location Wise</option>
	                           <option value="B">Bank Wise</option>
	                           <option value="BD">Billing Data</option>
	                           <option value="TA">Target/Achievement </option>
	                           <option value="CF">ERP Calling Field Visit</option>
	                           <option value="EP">Expected Pipeline</option>
	                           <option value="PR">Productivity Report</option>
	                           <option value="GR">Graphical Report</option>                        	
                          </select>
                        </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="Product_Id" class="col-sm-3 col-form-label">Company:</label>
                    <div class="col-sm-6">
                     <select type="text" class="form-control" id="Product_Id" name="Product_Id">
                     	 <option disabled selected value="">Select One</option>
                     	 @foreach($company as $val)
                     	 <option value="{{$val->Company_Id}}">{{$val->Company_Name}}</option>
                     	 @endforeach
                          	  
                     </select>
                   </div>
                 </div>
                 </div>

              <center>
                <!-- <input type="submit" name="Button1" value="GenerateReport" id="Button1" class="btn btn-primary"> -->
                 <center>
               <div class="col-sm-12">
              <a class="btn btn-primary" id="btnshowlead">GenerateReport</a>
              </div>
            </center>
              </center>
              </form>
          </div>
        </div>
    </div>

    <!-- Table -->
     
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
         <div class="box-body">           
        <div class="table-responsive" id="divhistory">  
          </div>
        </div> 
        </div>
        



  </div>
</div>

<script type="text/javascript">
	$("#btnshowlead").click(function(){ 
var fdate=$('#txtfdate').val();
var tdate=$('#txttdate').val();
  $.ajax({  
         type: "GET",  
         url:'dashboard-report/'+fdate+'/'+tdate,
         success: function(reportlead)
         {
           alert(reportlead);
           var data = JSON.parse(reportlead);
           var str ="<table id='example'class='table table-bordered table-striped'><thead><tr><th>Manager</th><th>Prev. number of files</th><th>Current number of files</th><th>Prev.Login Amount</th><th>Current Login Amount</th><th>Prev.Sanction Amount</th><th>Current Sanction Amount</th><th>Current Loan Amt Disbursed</th><th>No Of Customer</th></tr></thead><tbody>";
       for (var i = 0; i < data.length; i++) 
       {
         str = str + "<tr><td><a>"+data[i].emp_name+""+data[i].id+"</a></td><td><a>"+data[i].Prev_No_Of_Files+""+data[i].id+"</a></td><td><a>"+data[i].No_Of_files+""+data[i].id+"</a></td><td><a>"+data[i].Prev_Login_Amt+""+data[i].id+"</a></td><td><a>"+data[i].LoginAmt+""+data[i].id+"</a></td><td><a>"+data[i].Prev_SanctionAmt+""+data[i].id+"</a></td><td><a>"+data[i].SanctionAmt+""+data[i].id+"</a></td><td><a>"+data[i].DisurbsAmt+""+data[i].id+"</a></td><td><a>"+data[i].no_of_cust+""+data[i].id+"</a></td></tr>";
                  }
         str = str + "</tbody></table>";  
           $('#divhistory').html(str);
           $('#example').DataTable();
         }  
      });
 });
</script>

  <script>
  $(document).ready(function() {
  $('#example').DataTable();
  } );
  </script>




     
@endsection            