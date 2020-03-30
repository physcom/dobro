<?php 
use Elaman\Dobro\Models\Post;
use Elaman\Dobro\Models\PostCategory;
class Cms5e82017fa9794661075876_c4284bd4cc3d91c5580e8fe6f68de6ffClass extends Cms\Classes\PageCode
{
      public function onStart(){
       $this['posts'] = Post::orderBy('created_at', 'desc')->paginate(2);
       $this['categories'] = PostCategory::get();
   }
}
