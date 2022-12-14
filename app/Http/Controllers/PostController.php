<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $allPosts = [
            ['id' => 1 , 'title' => 'laravel is cool', 'posted_by' => 'Ahmed', 'creation_date' => '2022-10-22'],
            ['id' => 2 , 'title' => 'PHP deep dive', 'posted_by' => 'Mohamed', 'creation_date' => '2022-10-15'],
        ];

        return view('posts.index', [
          'posts' => $allPosts
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show($postId)
    {
        $arr = [
            ['id' => 1 , 'category' => 'test']
        ];
        // dd($arr);

        return  view('posts.show',[
            'post' => $arr[$postId-1]
        ]);
    }

    public function store(StorePostRequest $request)
    {
        
        $data = $request->all();

       

        Post::create([
            'title' => request()->title,
            'description' => $data['description'],
            'user_id' => $data['post_creator'],
        ]); 
        return to_route('posts.index');
    }
}