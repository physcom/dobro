<?php 
use Elaman\Dobro\Models\Post;
use Elaman\Dobro\Models\PostCategory;
class Cms5e7d09f9cdd09446297879_dcd2a07d5ec0fb6e41c2312406ec6f9aClass extends Cms\Classes\PageCode
{
      public function onStart(){
       $this['posts'] = Post::orderBy('created_at', 'desc')->paginate(2);
       $this['categories'] = PostCategory::get();
   }
}
