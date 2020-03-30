<?php 
use Elaman\Dobro\Models\Post;
use Elaman\Dobro\Models\PostCategory;
class Cms5e7fae01f193a842782729_bf5ff9371cb8485f885edfe28ccda051Class extends Cms\Classes\PageCode
{
      public function onStart(){
       $this['posts'] = Post::where('post_category_id','=',$this->param('category-id'))->orderBy('created_at', 'desc')->paginate(2);
       $this['categories'] = PostCategory::get();
       $this['category'] = PostCategory::where('id','=',$this->param('category-id'))->first();
   }
}
