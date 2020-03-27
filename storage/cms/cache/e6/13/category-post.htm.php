<?php 
use Elaman\Dobro\Models\Post;
use Elaman\Dobro\Models\PostCategory;
class Cms5e7cff77758c3114499879_2edcb6595d0a10b3285f844f3330fdf1Class extends Cms\Classes\PageCode
{
      public function onStart(){
       $this['posts'] = Post::where('post_category_id','=',$this->param('category-id'))->orderBy('created_at', 'desc')->paginate(2);
       $this['categories'] = PostCategory::get();
       $this['category'] = PostCategory::where('id','=',$this->param('category-id'))->first();
   }
}
