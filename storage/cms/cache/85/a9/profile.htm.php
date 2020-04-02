<?php 
use Elaman\Dobro\Models\Post;
use RainLab\User\Models\User;
class Cms5e863ca96f85f438436852_12e0d07c1defa0b2ab85cb02db3addb8Class extends Cms\Classes\PageCode
{
		public function onStart(){
	        
	    $this['posts'] = Post::where('user_id', Auth::getUser()->id)->get();
	}
public function onUpdate()
	{
	    if (!$user = Auth::getUser()) {
	        return;
	    }
	    
	    if (Input::hasFile('avatar')) {
	        $user->avatar = Input::file('avatar');
	        
	    }

	    $user->fill(post());
	    $user->save();

	    
	    if (strlen(post('password'))) {
	        Auth::login($user->reload(), true);
	    }

	    return Redirect::to('/profile')->with('message', 'Successfully Updated');
	    
	}
}
