<?php namespace Elaman\Dobro\Models;

use Model;

/**
 * Model
 */
class PostComment extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'elaman_dobro_comments';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

     public $belongsTo = [
        'post' => ['Elaman\Dobro\Models\Post', 'key' => 'post_id', 'otherKey' => 'id']
    ];
}
