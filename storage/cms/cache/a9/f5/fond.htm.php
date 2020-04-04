<?php 
use Elaman\Dobro\Models\Post;
class Cms5e88aab3a51ba520180376_d2eaa77fcc11a2bebcc40690cd51310eClass extends Cms\Classes\PageCode
{
   public function onStart(){
       $this['posts'] = Post::with('user')->where('approved',true)->orderBy('created_at', 'desc')->paginate(10);
   }
}
