<?php namespace MarcoDeLaCruz\Cafelive\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarcodelacruzCafeliveProductCategories extends Migration
{
    public function up()
    {
        Schema::rename('marcodelacruz_cafelive_product_category', 'marcodelacruz_cafelive_product_categories');
    }
    
    public function down()
    {
        Schema::rename('marcodelacruz_cafelive_product_categories', 'marcodelacruz_cafelive_product_category');
    }
}
