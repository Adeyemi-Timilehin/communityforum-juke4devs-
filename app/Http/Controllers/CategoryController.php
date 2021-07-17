<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DevsModel;

class CategoryController extends Controller
{
    public function index(Request $request ,DevsModel $devmodel){
       $category = $request->input('category');
       $id=$devmodel-> insertCat(['category_name'=>$category]);
    //    dd($id);
       if($id){
        
        return redirect('home');
       }
    }
    public function show(DevsModel $devmodel){
        // $categ=$devmodel->getCat();
        $details='this is new';
        // dd($id);
        return redirect('post.index',['det'=>$details]);
    
  
}
}