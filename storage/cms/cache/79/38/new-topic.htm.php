<?php 
use Elaman\Dobro\Models\Post;
use Elaman\Dobro\Models\PostCategory;
class Cms5e8964fe53b12844742962_1921aa1e580ab757ce0271a7d639710bClass extends Cms\Classes\PageCode
{
      public function onStart(){
      
          $this['categories'] = PostCategory::get();
         
      }
public function onSubmit(){
         $rules = [
             'title'     => 'required',
             'category_id'  => 'required',
             'author' => 'required',
             'phone' => 'required',
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
              $comm->approved = false;
              $comm->slug = str_slug(Input::get('title'));
  			      $comm->author = Input::get('author');
  			      $comm->phone = Input::get('phone');
  			      $comm->address = Input::get('address');	
              $comm->save();
              
               // Sets a successful message
              Flash::success('Новая тема успешно создана!'); 
              return Redirect::to('/');
              
           }
   }
   
}
