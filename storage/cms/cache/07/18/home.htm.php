<?php 
use Elaman\Dobro\Models\Post;
use Elaman\Dobro\Models\PostCategory;
class Cms5e88a1127f10a054956977_abde36179ce4aebf74b54c5923bca16fClass extends Cms\Classes\PageCode
{
      public function onStart(){
       $this['posts'] = Post::orderBy('created_at', 'desc')->paginate(10);
       $this['categories'] = PostCategory::get();
   }
}
