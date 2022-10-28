<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
      //show banner table 
    //   public function bannertable(){
    //     return view('pages.bannerstable');
    // }

     public function addcompany(){
         return view('pages.addcompany');
    }
    //  public function viewbanner(){
    //      return view('pages.viewbanner');
    // }

}