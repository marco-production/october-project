<?php namespace MarcoDeLaCruz\Cafelive\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarcodelacruzCafeliveProducts6 extends Migration
{
    public function up()
    {
        Schema::table('marcodelacruz_cafelive_products', function($table)
        {
            $table->boolean('special_meal_of_week');
        });
    }
    
    public function down()
    {
        Schema::table('marcodelacruz_cafelive_products', function($table)
        {
            $table->dropColumn('special_meal_of_week');
        });
    }
}
