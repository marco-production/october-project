<?php namespace MarcoDeLaCruz\Cafelive\Models;

use Model;

/**
 * Model
 */
class ProductCategory extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'marcodelacruz_cafelive_product_categories';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];
    
    public $hasMany = [
        'products' => [\MarcoDeLaCruz\Cafelive\Models\Product::class, 'key' => 'category_id'],
        'reservations' => \MarcoDeLaCruz\Cafelive\Models\Reservation::class
    ];

}
