<?php namespace Elaman\Dobro\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Illuminate\Http\Request;
use Elaman\Dobro\Models\Post;

class Posts extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController'    ];
    
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Elaman.Dobro', 'main-menu-item2');
    }

    public function upVotePost(Request $request)
    {   
        $inputs = $request->all();
    	$post = Post::findOrFail($inputs['post_id']);
    	//dd($post);
    	$post->upvote_count = $post->upvote_count + 1;
    	$post->save();

    	return response()->json("Succesfully Upvoted", 201); 
    }

    public function downVotePost(Request $request)
    {
        $inputs = $request->all();
    	$post = Post::findOrFail($inputs['post_id']);
    	$post->downvote_count = $post->downvote_count + 1;
    	$post->save();

    	return response()->json("Succesfully Downvoted", 201); 
    }

    public function increaseShareCount(Request $request)
    {
        $inputs = $request->all();
    	$post = Post::findOrFail($inputs['post_id']);
    	$post->share_count = $post->share_count + 1;
    	$post->save();

    	return response()->json("Succesfully Share Count Increased", 201); 
    }
}
