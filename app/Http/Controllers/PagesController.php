<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return view('about');           
    }
    public function cal($a,$b){
        return('A+B = '.($a+$b)); 
    }
    public function admin(){   
        return view('admin.index');     
    }
    public function user($id){
        return('Welcome user:'.$id);
    }
    public function service(){
        $servicesList = ['design', 'develop', 'test', 'maintain'];      //list of service in array
        return view('service')->with('services',$servicesList);
    }
}
