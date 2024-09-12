<?php namespace MarcoDeLaCruz\Cafelive\Models;

use Model;
use Str;

/**
 * Model
 */
class Chef extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'marcodelacruz_cafelive_chefs';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];
    
    public $attachOne = [
        'image' => ['System\Models\File'],
    ];

    public function beforeSave() {
        $this->slug = Str::slug($this->name.' '.$this->lastname);
    }

}
