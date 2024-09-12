<?php namespace MarcoDeLaCruz\Cafelive\Models;

use Model;

/**
 * Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    
    protected $fillable = [
        "name",
        "description",
        "price",
        "category_id",
        "available",
        "special_meal_of_week",
        "created_at"
    ];

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'marcodelacruz_cafelive_products';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];
    
    public $attachOne = [
        'image' => ['System\Models\File'],
    ];
    
    public $belongsTo = [
        'category' => [\MarcoDeLaCruz\Cafelive\Models\ProductCategory::class, 'key' => 'category_id']
    ];

}
