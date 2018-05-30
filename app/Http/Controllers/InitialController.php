<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
 
use Session;
use api_url;
use Illuminate\Support\Facades\URL;
class InitialController extends Controller
{
            public function user_right_group_menu(){

                return    $this->recurtionfn(Session::get('groupid'),0);

               }


              
                public function   recurtionfn($usergroup,$parent_id=0){  
                     
                      $menu='';
                      $sql='';
                     if($parent_id==0){
                      $sql=\DB::table('view_user_right_group')->select('menu_id','id','name','menu_group_id','url_link','parent_id','lvl')->where('menu_group_id','=',$usergroup)->where('parent_id','=',0)->orderBy('menu_id', 'asc')->get();
                     }else{
                    $sql=\DB::table('view_user_right_group')->select('menu_id','id','name','menu_group_id','url_link','parent_id','lvl')->where('menu_group_id','=',$usergroup)->where('parent_id','=',$parent_id)->orderBy('menu_id', 'asc')->get();
                     }


                    // foreach ($sql as $key => $value) {

                    //   if($value->url_link!="#"){
                    //       $menu.='<li><label class="tree-toggle nav-header"><a href="'.URL('/')."/".$value->url_link.'"><span class="sp-nav"> </span>&nbsp;&nbsp; '.$value->name.'</a></label>';
                    //   }else{
                    //        $menu.='<li  class="level1"><label class="tree-toggle nav-header"><a href="javascript:void(0)"><span class="caret"></span>&nbsp;&nbsp; '.$value->name.'</a></label>';
                    //   }

                    //    $menu.='<ul class="nav nav-list tree">'.$this->recurtionfn($usergroup,$value->id).'</ul>';
                       
                    //    $menu.='</li>';
                        
                    // }

 foreach ($sql as $key => $value) {

                      if($value->url_link!="#"){
                          $menu.='<li>  <a href="'.URL('/')."/".$value->url_link.'"> <i class="fa fa-circle-o"></i> '.$value->name.'</a>';
                      }else{
                           $menu.='<li  class="treeview"> <a href="javascript:void(0)"><i class="fa fa-circle-o"></i> <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span> '.$value->name.'</a> ';
                      }

                       $menu.='<ul class="treeview-menu">'.$this->recurtionfn($usergroup,$value->id).'</ul>';
                       
                       $menu.='</li>';
                        
                    }




                    return $menu;


                           
               }

}
