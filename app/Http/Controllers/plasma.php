<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class plasma extends Controller
{
    public function plasma(request $request)
    {
        // $this->validate($request, [
        //     'name'  => 'required',
        //     'age' => 'required',
        //     'phone' => 'required|digits:10'
        // ]);
        // dd("hello");
        $name    =  $request ->  input("f_name");
        $state    =  $request ->  input("state");
        $city    =  $request ->  input("city");
        $hospital      =  $request ->  input("hospital");
        $gender      =  $request ->  input("opt_gender");
        $age   =  $request ->  input("age");
        $phone     =  $request ->  input("phone");
        $ward      =  $request ->  input("ward");
        $group   =  $request ->  input("opt_group");
        $plasma   =  $request ->  input("opt_plasma");

        $sql1 = DB::Insert("insert into plasma (name, state, city, hospital, gender, age, phone, hospital_ward, blood_group, need_plasma) values( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", [$name, $state, $city, $hospital, $gender, $age, $phone,  $ward, $group, $plasma ]);
    // dd("$sql1");
if($sql1==true){
    return view ("thankyou");
}
    }
    
}
