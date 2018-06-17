<?php namespace Qakr\Product\Models;

use Model;

/**
 * Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'qakr_product_';

    public $attachOne = ['image_preview' => 'System\Models\File'];
    public $attachMany = ['image_gallery' => 'System\Models\File'];
}
