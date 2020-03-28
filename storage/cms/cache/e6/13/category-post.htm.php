<?php 
use Elaman\Dobro\Models\Post;
use Elaman\Dobro\Models\PostCategory;
class Cms5e7e3d01c1874366380221_e88ff6a7257262a90a5c95e589566244Class extends Cms\Classes\PageCode
{
      public function onStart(){
       $this['posts'] = Post::where('post_category_id','=',$this->param('category-id'))->orderBy('created_at', 'desc')->paginate(2);
       $this['categories'] = PostCategory::get();
       $this['category'] = PostCategory::where('id','=',$this->param('category-id'))->first();
   }
}
