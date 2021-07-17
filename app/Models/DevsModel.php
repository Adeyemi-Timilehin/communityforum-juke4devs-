<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class DevsModel extends Model
{
    use HasFactory;
    function insertDev($data){
        $id=DB::table('member_user')->insertGetId($data);
        return $id;
    }
   
   function getprofile($username,$pwd){
 
    
       $user=DB::table('member_user')->select('*')->where('Username','=',$username)->where('member_password','=',$pwd)->first();
       return $user->member_id ;

   }
   function getdetails($d){
       $usersdetails=DB::table('member_user')->select('*')->where('member_id','=',$d)->get();
       return $usersdetails;
   }
   function insertCat($cat){
       $catid=DB::table('category')->insertGetId($cat);
       return $catid;
   }
   function getCat(){
       $Cat=DB::table('category')->select('*')->get();
       return $Cat;
   }
  function editmember($id){
      
    $memmberdata=DB::table('member_user')->where('member_id','=',$id)->get();
    // dd($car);
    return $memmberdata;
  }
  function updateDev($id,$todata){
      $memmberupdate=DB::table('member_user')->where('member_id','=',$id)->update($todata);
      return $memmberupdate;
  }
// $details 
}
