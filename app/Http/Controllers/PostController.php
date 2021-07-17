<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;

use App\Models\DevsModel;

class PostController extends Controller
{
    public function index(DevsModel $devmodel){

        $details=$devmodel->getCat();
          // $details='this is new';
        //    dd($details);
        //    return redirect('post.index',['det'=>$details]);
       
        return view('post.index',['det'=>$details]);
    }
    public function post(Request $request,PostModel $model){
        $member_id = $request->session()->get('id');
        $message=['title.required'=>'Please enter the title',
        'post_pix.required'=>'The picture is required',
        'desc.required'=>'Full details of the description'];
           $validate=$request->validate([
            'title'=>'required',
            'post_pix'=>'image|file|max:5024',
            'desc'=>'required'],$message);
            $title=$request->input('title');
            $desc=$request->input('desc');
            $post_category_id=$request->input('category');
            
            $newname='';
            if($request->file('post_pix')){
                $newname=time().'.'.$request->post_pix->getClientOriginalExtension();
                $request->post_pix->move(public_path('post_image'),$newname);
                //$pixfile->move('uploads',$pixfile);
            }
            $to_insert=['post_title'=>$title,
            'post_pics'=>$newname,'post_description'=>$desc,
            'post_category_id'=>$post_category_id,'member_id'=>$member_id];
            $id=$model->insertPosts($to_insert);
           if($id){
               return redirect('/profile');
           }
    }
  
    public function discussme(Request $request,$id,PostModel $post){
       
            $discussion=$request->input('discuss');
            $post_disc_id=$id;
            $to_insert=['discussion'=>$discussion,
            'post_disc_id'=>$post_disc_id];
            $id=$post->insertdisc($to_insert);
            dd($id);
           if($id){
               return redirect('/profile');
           }
    }
 
    // public function p(){
    //     return view('p');
    // }
    public function show($id,PostModel $post){
        $postid=$post->getPostId($id);
        // $d = session('id');
        // dd($d);
        $disc=$post->getDisc(4);
        return view('post.show',['post'=>$postid,'dis'=>$disc]);
    }
    // public function p(PostModel $post){
    //     $post_id=$post->getPostId($id);
    //     $discussion=$post->getDisc($post_id);
    // }
  
    //
}
