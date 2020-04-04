<?php 
use Elaman\Dobro\Models\Post;
use Elaman\Dobro\Models\PostCategory;
class Cms5e86223dd6680399011978_58586b55c9728ebaaef89828727dde94Class extends Cms\Classes\PageCode
{
      public function onStart(){
       $this['posts'] = Post::where('post_category_id','=',$this->param('category-id'))->orderBy('created_at', 'desc')->paginate(2);
       $this['categories'] = PostCategory::get();
       $this['category'] = PostCategory::where('id','=',$this->param('category-id'))->first();
   }
}
