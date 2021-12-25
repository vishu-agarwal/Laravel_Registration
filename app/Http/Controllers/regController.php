<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class regController extends Controller
{
    public function reg()
    {
        return view("reg");
    }
    //Get Data
    public function dispData()
    {
        $data = DB::table('tblRegister')->get();
       // return $data;
        return view('Display',['data'=> $data]);
    }
     //Insert Data
     public function insertData(Request $req)
     {
         DB::table('tblRegister')->insert([
             
             'name' => $req->input('name'),           
             
             'gender' => $req->input('gender'),
             'email' => $req->input('email'),
             'phone' => $req->input('phone'),
             'password' => $req->input('password')
         ]);
         return redirect('/display');
     }
     
     
     //Edit Data
     public function editData($id)
     {
         $rec = DB::table('tblRegister')->where('rid',$id)->first();
         return view('Edit',compact('rec'));
     }
     public function updateData(Request $req)
     {
         $data = DB::table('tblRegister')
             ->where('rid',$req->hrid)
             ->update([
             
             'name' => $req->input('name'),           
            
             'gender' => $req->input('gender'),
             'email' => $req->input('email'),
             'phone' => $req->input('phone'),
             'password' => $req->input('password')
             ]);  
             return redirect('/display');
     }
      //Delete Data
      public function deleteData($id)
      {
          DB::table('tblRegister')->where('rid',$id)->delete();
          return redirect('/display');
      }
 
}
