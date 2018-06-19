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
  <!-- <center><h3 style="color: #0099FF;">Break Master</h3></center><hr> -->
          <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-6 col-sm-offset-2">

        <center><h3 style="color: #0099FF;">Edit Bank Pay Out</h3></center>
          <hr>


  
         <form class="form-horizontal" name="bank_payout" id="bank_payout"  method="post" action="{{url('update_bank_payout')}}">

           {{csrf_field()}}





            <input type="hidden" name="m_Id" id="m_Id" value="{{$user->Id}}">

            <div class="col-md-6">
                   <div class="form-group row">
                        <label for="m_Bank_Id" class="col-sm-5 col-form-label">Select&nbsp;Bank:</label>
                        <div class="col-sm-10">
                          <select type="text" class="form-control" id="m_Bank_Id" name="m_Bank_Id" >
                          	 <option  value="{{$user->Bank_Id}}">{{$user->Bank_Name}}</option>
                              @foreach($m_users as $m_user)
                       <option value="{{$m_user->Bank_Id}}">{{$m_user->Bank_Name}}</option>
                       @endforeach 
                          	 
                          </select>
                        </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="m_Product_Id" class="col-sm-5 col-form-label">Select&nbsp;Product:</label>
                    <div class="col-sm-10">
                     <select type="text" class="form-control" id="m_Product_Id" name="m_Product_Id" >
                     	 <option  value="{{$user->Product_Id}}">{{$user->Product_Name}}</option>
                        @foreach($m_select as $m_select)
                       <option value="{{$m_select->Product_Id}}">{{$m_select->Product_Name}}</option>
                       @endforeach 
                          	
                     </select>
                   </div>
                 </div>
                 </div>




                 <center><h3> PayOut Detail</h3></center><hr>

                 <div class="table-responsive">
  
   <table id="table2" class="table table-bordered table-striped">
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
            <td><input type="text" name="m_Payoutfrom1" id="m_Payoutfrom1" class="form-control" value="{{$user->Payoutfrom1}}"></td>
            <td><input type="text" name="m_Payoutto1" id="m_Payoutto1" class="form-control" value="{{$user->Payoutto1}}"></td>
            <td><input type="text" name="m_Payoutper1" id="m_Payoutper1" class="form-control" value="{{$user->Payoutper1}}"></td>
             
      </tbody>

      <tbody>
            <td>2</td>
            <td><input type="text" name="m_Payoutfrom2" id="m_Payoutfrom2" class="form-control" value="{{$user->Payoutfrom2}}"></td>
            <td><input type="text" name="m_Payoutto2" id="m_Payoutto2" class="form-control" value="{{$user->Payoutto2}}"></td>
            <td><input type="text" name="m_Payoutper2" id="m_Payoutper2" class="form-control" value="{{$user->Payoutper2}}"></td>
            
      </tbody>

      <tbody>
            <td>3</td>
            <td><input type="text" name="m_Payoutfrom3" id="m_Payoutfrom3" class="form-control" value="{{$user->Payoutfrom3}}"></td>
            <td><input type="text" name="m_Payoutto3" id="m_Payoutto3" class="form-control" value="{{$user->Payoutto3}}"></td>
            <td><input type="text" name="m_Payoutper3" id="m_Payoutper3" class="form-control" value="{{$user->Payoutper3}}"></td>
             
      </tbody>

      <tbody>
            <td>4</td>
            <td><input type="text" name="m_Payoutfrom4" id="m_Payoutfrom4" class="form-control" value="{{$user->Payoutfrom4}}"></td>
            <td><input type="text" name="m_Payoutto4" id="m_Payoutto4" class="form-control" value="{{$user->Payoutto4}}"></td>
            <td><input type="text" name="m_Payoutper4" id="m_Payoutper4" class="form-control" value="{{$user->Payoutper4}}"></td>
             
      </tbody> 

      <tbody>
            <td>5</td>
           <td><input type="text" name="m_Payoutfrom5" id="m_Payoutfrom5" class="form-control" value="{{$user->Payoutfrom5}}"></td>
            <td><input type="text" name="m_Payoutto5" id="m_Payoutto5" class="form-control" value="{{$user->Payoutto5}}"></td>
            <td><input type="text" name="m_Payoutper5" id="m_Payoutper5" class="form-control" value="{{$user->Payoutper5}}"></td>
             
      </tbody>
    </table>
  </div>




            <div class="col-md-6">
                   <div class="form-group row">
                        <label for="m_Processing_Per" class="col-sm-5 col-form-label">Processing(%):</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="m_Processing_Per" name="m_Processing_Per" value="{{$user->Processing_Per}}">
                      </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="m_Flat_Per" class="col-sm-5 col-form-label">Flat&nbsp;Payout(%):</label>
                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="m_Flat_Per" name="m_Flat_Per" value="{{$user->Flat_Per}}">
               
                   </div>
                 </div>
                 </div>


                   <center><div class="col-sm-12">
                   <button type="submit" id="sub" class="btn btn-primary">Update</button>
          </div></center>



        
        </form>
      </div>
    </div>
  


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
    </div>
    


<script>

$(document).ready(function() {
    $('#example').DataTable();

});
</script>


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
</script>
     
@endsection