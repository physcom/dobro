<?php namespace Elaman\Dobro\Models;

use Model;

/**
 * Model
 */
class PostCategory extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'elaman_dobro_post_category';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'parent' => ['Elaman\Dobro\Models\PostCategory', 'key' => 'parent_id', 'otherKey' => 'id']
    ];

    public $hasMany = [
        'posts' => 'Elaman\Dobro\Models\Post', 'key' => 'post_category_id', 'otherKey' => 'id'
    ];

    public function getParent()
    {
        return $this->belongsTo('PostCategory', 'parent_id');
    }

    public function getChildren()
    {
        return $this->hasMany('PostCategory', 'parent_id');
    }

    public function getPostCount()
    {
        return $this->posts->count();
    }
}
