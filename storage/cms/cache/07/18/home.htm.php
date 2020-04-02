<?php 
use Elaman\Dobro\Models\Post;
use Elaman\Dobro\Models\PostCategory;
class Cms5e84f8ef4219f556422996_ea6a7ed99d424df6113439b28a5b51c7Class extends Cms\Classes\PageCode
{
      public function onStart(){
       $this['posts'] = Post::orderBy('created_at', 'desc')->paginate(2);
       $this['categories'] = PostCategory::get();
   }
}
