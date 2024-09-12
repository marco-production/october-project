<?php namespace MarcoDeLaCruz\Cafelive\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarcodelacruzCafeliveChefs extends Migration
{
    public function up()
    {
        Schema::table('marcodelacruz_cafelive_chefs', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('marcodelacruz_cafelive_chefs', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
