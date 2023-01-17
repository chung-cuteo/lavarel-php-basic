<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Phone;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\Comment;

class Dbcontroller extends Controller
{
    public function index(User $users, Phone $phones, Post $posts, Comment $comments)
    {
        // $userID = $users->find(1);
        // $phoneID = $phones->find(1);

        // $phone = $userID->phone;
        // $user =  $phoneID->user;
        // dd($user);

        $port_id_1 = $posts->find(1);

        // $comments = $port_id_1->comments;
        $port_id_1->category = 'the thao update';
        $port_id_1->save();

        $comment_post = $comments->find(1)->post;

        dd($comment_post);

        return view('db.index');
    }
}
