<header class="main-header">
    <!-- Logo -->

    <!-- 
    <img src='{{url("../images/jira.png")}}'>
 -->      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- <span class="logo-mini"><b>A</b></span> -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b> </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


      <div class="navbar-custom-menu">
     

        <ul class="nav navbar-nav" style="margin-left:-23%">



          <!-- User Account: style can be found in dropdown.less -->



<!-- 

            <li class="dropdown user user-menu">
            <img src="../images/download.png">
           <ul class="dropdown-menu">
               <li class="user-footer"> 
                                             
              <img src="../images/download.png" />

                </li>



             </ul>
          </li>
 -->


          <li class="dropdown user user-menu">
            <a href="{{url('release-details')}}">Relese</a>
           <ul class="dropdown-menu">
               <li class="user-footer"> 
               <a href="{{url('release-details')}}" class="btn btn-default btn-flat">Realese</a>
                </li>



             </ul>
          </li>


       
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu" >
               <a href="{{url('google-line-chart')}}" >Dashboard</a>

             <ul class="dropdown-menu">
               <li class="user-footer"> 
                <a href="{{url('google-line-chart')}}" class="btn btn-default btn-flat">Dashboard</a>
                </li>

             </ul>
</li>





<li class="dropdown user user-menu" >
               <a href="{{url('project-master')}}" >Projects</a>

             <ul class="dropdown-menu">
               <li class="user-footer"> 
                               <a href="{{url('project-master')}}" class="btn btn-default btn-flat">Projects</a>
                </li>

             </ul>
</li>



 <li class="dropdown user user-menu" >
               <a href="{{url('bug-activity-view')}}" >Issue</a>

             <ul class="dropdown-menu">
               <li class="user-footer"> 
           <a href="{{url('bug-activity-view')}}" class="btn btn-default btn-flat">Issue</a>
                </li>

             </ul>
</li>











 <li class="dropdown user user-menu" >
               <a href="{{url('bug-activity')}}" >Create</a>

             <ul class="dropdown-menu">
               <li class="user-footer"> 
                               <a href="{{url('bug-activity')}}" class="btn btn-default btn-flat">Create Issue</a>

                               
             </li>
             </ul>
              </li>

 <li class="dropdown user user-menu">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Session::get('name')}}<b class="caret"></b></a>
             <ul class="dropdown-menu">
             <li class="user-footer"> 
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Session::get('name')}}<b></b></a>
              <a href="{{url('logout')}}" >Manage Setting</a>
              <a href="{{url('logout')}}" >View Profile</a>
              <a href="{{url('logout')}}" >Log out</a>
               <a href="{{url('openissues')}}" >Issues Navigator</a>
              


                </li>
              </ul>
     </li>



<!--         <li class="dropdown user user-menu">
            <img src="../images/downloadavi.png">
           <ul class="dropdown-menu">
            <li class="user-footer"> 
                                             
              <img src="../images/downloadavi.png" />

                </li>



             </ul>
          </li>


 -->






          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>




        <div class="topnav">
 
  <div class="search-container">
    <form action="">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
      </div>

    </nav>
  </header>

  <style type="text/css">
   img {
    vertical-align: middle;
    width: 16%;
    margin-left:80%;
    margin-top: 10px;
}


@media (min-width: 768px){
 .navbar-nav>li {
    float: left;
    margin-left: -6px;
}}

  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 10px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: left;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

/*@media (min-width: 768px){
.navbar-nav>li {
    float: left;
    margin-left: -17px;
}
}*/
</style>