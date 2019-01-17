@extends('include.master')
@section('content')
)
 @if(Session::has('message'))
<div class="alert alert-success alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<p class="alert alert-success">{{ Session::get('message') }}</p>
</div>
@endif
<div class="container-fluid white-bg">
<div class="col-md-12"><h3 class="mrg-btm"></h3></div>
<div class="col-md-12">



<div id="fh5co-hero">
<div class="container">
    <div class="row">
    <img src="{{URL::to('../images/404.png')}}" class="img-responsive error-img pull-center" style="width: 80%" >
    <br>
        <div class="col-md-12">
            <div class="error-template">
<!--                 <h1>
                    Oops!</h1>
                <h2>
                    404 Not Found</h2> -->
               <!--  <div class="error-details">
                    Sorry, an error has occured, Requested page not found!
                </div> -->
                <div class="error-actions ">
                    <a href="{{URL::to('/home')}}" style="margin-left:40%" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-home"></span>
                        Take Me Home </a>
                </div>
            </div>
        </div>
    </div>
</div>


<style type="text/css">
    img {
    vertical-align: middle;
    width: 16%;
    margin-left: 6%;
    margin-top: 1px;
}
</style>
@endsection
