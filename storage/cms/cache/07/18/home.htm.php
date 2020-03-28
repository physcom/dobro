<?php 
use Elaman\Dobro\Models\Post;
use Elaman\Dobro\Models\PostCategory;
class Cms5e7f15a6900c1586931628_8b799d1e166ae03b6dd48f280359e505Class extends Cms\Classes\PageCode
{
      public function onStart(){
       $this['posts'] = Post::orderBy('created_at', 'desc')->paginate(2);
       $this['categories'] = PostCategory::get();
   }
}
