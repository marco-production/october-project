<?php namespace MarcoDeLaCruz\Cafelive\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarcodelacruzCafeliveProducts extends Migration
{
    public function up()
    {
        Schema::table('marcodelacruz_cafelive_products', function($table)
        {
            $table->boolean('available');
        });
    }
    
    public function down()
    {
        Schema::table('marcodelacruz_cafelive_products', function($table)
        {
            $table->dropColumn('available');
        });
    }
}
