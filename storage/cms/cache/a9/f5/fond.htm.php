<?php 
use Elaman\Dobro\Models\Post;
class Cms5e86459bd649f151673583_831b3e4d8e29d9fad7884413ee30eb9cClass extends Cms\Classes\PageCode
{
   public function onStart(){
       $this['posts'] = Post::with('user')->where('approved',true)->orderBy('created_at', 'desc')->paginate(2);
   }
}
