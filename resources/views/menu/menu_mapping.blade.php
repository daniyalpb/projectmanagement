@extends('include.master')
@section('content')
  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Menu List</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

         <div class="box-body">

 


            <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-6 col-sm-offset-2">
                   <form class="form-horizontal"   method="post" action="{{url('grouprights-add')}}">  {{csrf_field()}}
                     
           

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Menu Group</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="menu_group_id" name="menu_group_id"  value="2"   required>
                        </div>
                      </div>





                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Menu Mapping</label>
                        <div class="col-sm-10">
                           <ul  style="overflow: hidden; width: auto; height: 95%;" id="Decor">
                               <?php  echo $menu; ?>  
                            </ul>
                        </div>
                      </div>

                     
 
          
                     



 
                    <div class="form-group"> <center>
                        <input type="submit" name="Button1" value="Submit" id="Button1" class="btn btn-primary">
                        <input type="Reset" name="Button2" value="Reset" id="Button2" class="btn btn-primary">
                      </center>
                  </div>
                  </form>        
                </div>  
              </div>    
            </div>  <!-- End center -->


           

        </div>
  </div>
</div>
 
 
  <script type="text/javascript">

 



   $(function () {   
            $('.icon_1').prepend('<span class="icon plus"></span>');
            $('#Decor li').on('click', function (e) {
                e.stopPropagation();
                $(this).children('ul').slideToggle('slow', function () {
                    if ($(e.target).is("span")) {
                        $(e.target)
                            .toggleClass('minus', $(this).is(':visible'));                        
                    }
                    else {
                        $(e.target).children('span')
                            .toggleClass('minus', $(this).is(':visible'));                        
                    }
                });
            });

            $('#Decor a').not('[href="#"]').attr('target', '_blank');
        });
 
</script>
 <script type='text/javascript'>
$(document).ready(function() {
$('.tree-toggle').click(function () {
$(this).parent().children('ul.tree').toggle(200);
});
$(function(){
$('.tree-toggle').parent().children('ul.tree').toggle(200);
})   
});
</script> 
@endsection

<style type="text/css">
 

#Decor, #Decor ul {
  list-style-type: none;
  margin-left:15px;
  margin-bottom:5px;
  padding-left:20px;
    cursor:pointer;
}

.icon { 
  background: 
        transparent 
        url('../images/plus-minus.png' )
        no-repeat left top; 
  display:block; 
    height:12px;
    width:12px; 
  float:left;
    cursor:pointer;
}

.plus { 
    background-position: left top; 
    margin-top:3px;
}

.minus { 
    background-position: left -10px;
    margin-top:3px;
}
</style>
