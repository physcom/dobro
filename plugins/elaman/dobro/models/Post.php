<?php namespace Elaman\Dobro\Models;

use Model;
use RainLab\User\Models\User;

/**
 * Model
 */
class Post extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'elaman_dobro_posts';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'category' => ['Elaman\Dobro\Models\PostCategory', 'key' => 'post_category_id', 'otherKey' => 'id'],
        'user' => ['RainLab\User\Models\User', 'key' => 'user_id', 'otherKey' => 'id']
    ];

    public $hasMany = [
        'comments' => 'Elaman\Dobro\Models\PostComment', 'key' => 'post_id', 'otherKey' => 'id'
    ];

    public function getCategoryTitle()
    {
        return $this->category->title;
    }

    public function getCommentCount()
    {
        return $this->comments->count();
    }
}
