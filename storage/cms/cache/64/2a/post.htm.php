<?php 
use Elaman\Dobro\Models\Post;
use Elaman\Dobro\Models\PostCategory;
use Elaman\Dobro\Models\PostComment;
class Cms5e89632ac2016634043505_e48e263e6df969fcbf6d71d0ee45d70bClass extends Cms\Classes\PageCode
{
         public function onStart(){
       $post = Post::where('id',$this->param('id'))->with('comments')->first();
       if(!empty($post))
        {
         $post->view_count = $post->view_count + 1;
         $post->save();
        }
       
       $this['post'] = $post; 
       $this['categories'] = PostCategory::get();
      
    }
public function onSubmitComment(){
         $rules = [
             'author' => 'required',
             'comment'     => 'required',
         ];
          
          $messages = [
           'author.required' => 'Author required ',
           'comment.required' => 'Comment required ',
          
          ]; 
         $validator = Validator::make(post(), $rules,$messages);
         
         if($validator->fails()){
             throw new ValidationException($validator);
             
         } 
         else {
            
            $comm = new PostComment();
            $comm->post_id = $this->param('id');
            $comm->author = Input::get('author');
            $comm->comment = Input::get('comment'); 
            $comm->save();
               
            return Redirect::to('/post/'.$this->param('id'));               
        }
    } 
public function onApproveDonate(){
        
    
      $post = Post::findOrFail($this->param('id'));
        
      if(Auth::getUser())
        {
             $post->user_id = Auth::getUser()->id;
             $post->approved = true;

        } 
      $post->save();
               
      return Redirect::to('/post/'.$this->param('id'));               
        
    } 
}
