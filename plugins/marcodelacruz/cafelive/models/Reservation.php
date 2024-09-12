<?php namespace MarcoDeLaCruz\Cafelive\Models;

use Model;

/**
 * Model
 */
class Reservation extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'marcodelacruz_cafelive_reservations';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];
    
    public $belongsTo = [
        'category' => [\MarcoDeLaCruz\Cafelive\Models\ProductCategory::class, 'key' => 'category_id']
    ];

}
