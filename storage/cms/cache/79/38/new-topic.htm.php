<?php 
use Elaman\Dobro\Models\Post;
use Elaman\Dobro\Models\PostCategory;
class Cms5e7fadfd58a8a629960369_73d7a822d63578d9021e82a8fff0ac43Class extends Cms\Classes\PageCode
{
      public function onStart(){
      
          $this['categories'] = PostCategory::get();
         
      }
public function onSubmit(){
         $rules = [
             'title'     => 'required',
             'category_id'  => 'required',
             'author' => 'required',
         ];
          
          $messages = [
           'title.required' => 'Название темы обязательно ',
           'category_id.required' => 'Поле местоположения обязательно для заполнения ',
           'author.required' => 'Ваше имя обязательно ',
          ]; 
         $validator = Validator::make(post(), $rules,$messages);
         
         if($validator->fails()){
             throw new ValidationException($validator);
             
         } 
         else {
            
              $comm = new Post();
              $comm->post_category_id = Input::get('category_id');
              $comm->title = Input::get('title');
              $comm->content = Input::get('content');
              $comm->slug = str_slug(Input::get('title'));
  			      $comm->author = Input::get('author');
  			      $comm->phone = Input::get('phone');
  			      $comm->address = Input::get('address');	
              $comm->save();
               
               return Redirect::to('/');
              
           }
   }
   
}
