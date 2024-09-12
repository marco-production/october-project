<?php namespace MarcoDeLaCruz\Cafelive\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarcodelacruzCafeliveChefs2 extends Migration
{
    public function up()
    {
        Schema::table('marcodelacruz_cafelive_chefs', function($table)
        {
            $table->string('lastname');
        });
    }
    
    public function down()
    {
        Schema::table('marcodelacruz_cafelive_chefs', function($table)
        {
            $table->dropColumn('lastname');
        });
    }
}
