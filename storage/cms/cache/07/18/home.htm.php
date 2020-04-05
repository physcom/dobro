<?php 
use Elaman\Dobro\Models\Post;
use Elaman\Dobro\Models\PostCategory;
class Cms5e8966940b022710811784_da8936731b72056cf5dfac52fa434a28Class extends Cms\Classes\PageCode
{
      public function onStart(){
       $this['posts'] = Post::orderBy('created_at', 'desc')->paginate(10);
       $this['categories'] = PostCategory::get();
   }
}
