<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //functions to get info
    public function get_students(){
        static $students=array(0=>"Dauren",1=>"Talgat",2=>"Arsen");
        return $students;
    }
    public function get_date(){
        static $dates=array(0=>"25-05-1996",1=>"16-01-1997",2=>"15-11-1998");
        return $dates;
    }
    public function get_age(){
        static $ages=array(0=>"25",1=>"24",2=>"23");
        return $ages;
    }


    //send names using arrays
    public function display_name($id){
        $names =$this->get_students();
        return view("names",["name"=>$names[$id]]);
    }

    //send dates using with function
    public function display_date($id){
        $dates =$this->get_date();
        return view("dates")->with('date',$dates[$id]);
    }

    //send age using compact function
    public function display_age($id){
        $ages =$this->get_age();
        $age =$ages[$id];
        return view("ages",compact('age'));
    }
}
