<?php 
class Cms5e85a836cff8d888660599_efdcff7ec6538ee1b51abe9beaf8bb0cClass extends Cms\Classes\PageCode
{
public function onRegisterAjax()
    {
        try {
            
            $rules = [
                'name' => 'required',
                'username' => 'required',
                'email' => 'required',
                'password' => 'required',
                'password_confirmation' => 'required'

            ];

            $validator = Validator::make(post(), $rules);

            if($validator->fails()){
               throw new ValidationException($validator);
               
            } 
            else {   
     
                $input = Input::all();
                
                $this->account->onRegister();
     
                return Redirect::to('/')->with('message', 'Successfully Added');
            }
            
            return $this->account->onRegister();
        }
        catch (Exception $ex) {
            Log::error($ex);
        }
    }
}
