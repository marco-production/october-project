<?php namespace MarcoDeLaCruz\Cafelive\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarcodelacruzCafeliveProducts5 extends Migration
{
    public function up()
    {
        Schema::table('marcodelacruz_cafelive_products', function($table)
        {
            $table->boolean('available')->default(1)->change();
        });
    }
    
    public function down()
    {
        Schema::table('marcodelacruz_cafelive_products', function($table)
        {
            $table->boolean('available')->default(null)->change();
        });
    }
}
