<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class PostModel extends Model
{
    use HasFactory;
    function insertPosts($data){
        $id=DB::table('post')->insertGetId($data);
        return $id;
    }
    function getPosts(){
        $id=DB::table ('post')
        ->join('category', 'category.cat_id', '=', 'post.post_category_id')
        ->join('member_user', 'member_user.member_id', '=', 'post.member_id')
        ->get();

        return $id;
    }
    function getPostId($id){
        $id=DB::table ('post')
        ->join('category', 'category.cat_id', '=', 'post.post_category_id')
        ->join('member_user', 'member_user.member_id', '=', 'post.member_id')->where('post_id','=',$id)
        ->get();

        return $id;
    }
    function insertdisc($to_insert){
        $discussion_post=DB::table('discussion')->insertOrIgnore($to_insert);
        return $discussion_post;
    }
    function getDisc($id){
        $disc=DB::table('discussion') ->join('member_user', 'member_user.member_id', '=', 'discussion.member_disc_id')->where('post_disc_id','=',$id)->get();
        return $disc;
    }

}
