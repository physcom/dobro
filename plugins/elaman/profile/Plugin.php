<?php namespace Elaman\Profile;

use System\Classes\PluginBase;

use RainLab\User\Controllers\Users as UserController;
use RainLab\User\Models\User as UserModel;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot()
    {
    	UserModel::extend(function($model){

            $model->addFillable(['phone','address']);    

            $model->addDynamicMethod('getAuthApiSigninAttributes', function () use ($model) {
                return [
                    'id' => $model->id,
                    'name' => $model->name,
                    'surname' => $model->surname,
                    'username' => $model->username,
                    'email' => $model->email,
                    'is_activated' => $model->is_activated
                ];
            });
    		

    	});
    	
        UserController::extendListColumns(function($list,$model){
            
            if (!$model instanceof UserModel)
                    return;

                $list->addColumns([
                   
                    'phone' => [
                        'label' => 'Телефон'
                    ],
                    'address' => [
                        'label' => 'Адресс'
                    ]
                ]);
            
        });
    	UserController::extendFormFields(function($form,$model,$context){

    		$form->addTabFields([
    			
    			'phone'=>[
    				'label' => 'Phone',
    				'type' => 'text',
    				'tab' => 'Profile'
                ],
                'address'=>[
    				'label' => 'Address',
    				'type' => 'text',
    				'tab' => 'Profile'
    			]
    		]);

    	});
    }
}
