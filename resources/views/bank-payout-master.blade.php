@extends('include.master')
@section('content')
  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
      <h3 class="box-title">Bank Pay Out</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        

 <div class="box-body">
  <!-- <center><h3 style="color: #0099FF;">Break Master</h3></center><hr> -->
          <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-6 col-sm-offset-2">
            <form class="form-horizontal" name="break_master" id="break_master"  method="post">
           {{csrf_field()}}





            <div class="col-md-6">
                   <div class="form-group row">
                        <label for="Bank_Id" class="col-sm-5 col-form-label">Select&nbsp;Bank:</label>
                        <div class="col-sm-10">
                          <select type="text" class="form-control" id="Bank_Id" name="Bank_Id">
                          	 <option disabled selected value="">Select One</option>
                          	 @foreach($bank as $bank)
                       <option value="{{$bank->Bank_Id}}">{{$bank->Bank_Name}}</option>
                       @endforeach 
                          </select>
                        </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="Product_Id" class="col-sm-5 col-form-label">Select&nbsp;Product:</label>
                    <div class="col-sm-10">
                     <select type="text" class="form-control" id="Product_Id" name="Product_Id">
                     	 <option disabled selected value="">Select One</option>
                          	 @foreach($select as $select)
                       <option value="{{$select->Product_Id}}">{{$select->Product_Name}}</option>
                       @endforeach 
                     </select>
                   </div>
                 </div>
                 </div>




                 <center><h4>PayOut Detail</h4></center><hr>

                 <div class="table-responsive">
  
   <table id="table" class="table table-bordered table-striped">
    <thead>
           <tr>
                <th>Sr No.</th>
                <th>From</th>
                <th>To</th>
                <th>Payout %</th>
            </tr>

            </thead>
            
      <tbody>
            <td>1</td>
            <td><input type="text" name="Payoutfrom1"  id="Payoutfrom1" class="form-control"></td>
            <td><input type="text" name="Payoutto1" id="Payoutto1" class="form-control"></td>
            <td><input type="text" name="Payoutper1" id="Payoutper1" class="form-control"></td>
             
      </tbody>

      <tbody>
            <td>2</td>
            <td><input type="text" name="Payoutfrom2" id="Payoutfrom2" class="form-control"></td>
            <td><input type="text" name="Payoutto2" id="Payoutto2" class="form-control"></td>
            <td><input type="text" name="Payoutper2" id="Payoutper2" class="form-control"></td>
            
      </tbody>

      <tbody>
            <td>3</td>
            <td><input type="text" name="Payoutfrom3" id="Payoutfrom3" class="form-control"></td>
            <td><input type="text" name="Payoutto3" id="Payoutto3" class="form-control"></td>
            <td><input type="text" name="Payoutper3" id="Payoutper3" class="form-control"></td>
             
      </tbody>

      <tbody>
            <td>4</td>
            <td><input type="text" name="Payoutfrom4" id="Payoutfrom4" class="form-control"></td>
            <td><input type="text" name="Payoutto4" id="Payoutto4" class="form-control"></td>
            <td><input type="text" name="Payoutper4" id="Payoutper4" class="form-control"></td>
             
      </tbody>

      <tbody>
            <td>5</td>
            <td><input type="text" name="Payoutfrom5" id="Payoutfrom5" class="form-control"></td>
            <td><input type="text" name="Payoutto5" id="Payoutto5" class="form-control"></td>
            <td><input type="text" name="Payoutper5" id="Payoutper5" class="form-control"></td>
             
      </tbody>
    </table>
  </div>




              <div class="col-md-6">
                   <div class="form-group row">
                        <label for="Processing_Per" class="col-sm-5 col-form-label">Processing(%):</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Processing_Per" name="Processing_Per">
                      </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="Flat_Per" class="col-sm-5 col-form-label">Flat&nbsp;Payout(%):</label>
                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="Flat_Per" name="Flat_Per">
               
                   </div>
                 </div>
                 </div>


                   <center><div class="col-sm-12">
                   <button type="submit" id="sub" class="btn btn-primary">Submit</button>
            <button type="reset" value="Reset">Reset</button>
          </div></center>



        
        </form>
      </div>
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
                <th>Sr.No.</th>
                <th>Bank Name</th>
                <th>Product Name</th>
                <th>Edit</th>
            </tr> 	

            </thead>
            <tbody>
            	 @foreach($smsdata as $val)          
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{$val->Bank_Name}}</td>
            <td>{{$val->Product_Name}}</td>
<td><a class="btn btn-primary" href="edit-bank-payout-master/{{ $val->Id }}" class="btn btn -success">Edit</a></td>
                 </tr>
             @endforeach        
           </tbody>
         </table>
       </div>
     </div>
   </div>
 </div>
</div>

 

<script>

$(document).ready(function() {
    $('#example').DataTable();

});
</script>

<!-- 
<script type="text/javascript">
     $(document).on('click','#modal',function(e){
         
          var ID=$(this).attr('href');

  var saveData = $.ajax({
      type: 'get',
      url: "{{url('bank-payout-master-update')}}",
      data: {'ID':ID},
    
      success: function(resultData) {  




       }
});


    })
</script> -->
     
@endsection
