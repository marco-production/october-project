<?php namespace MarcoDeLaCruz\Cafelive\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarcodelacruzCafeliveReservations2 extends Migration
{
    public function up()
    {
        Schema::table('marcodelacruz_cafelive_reservations', function($table)
        {
            $table->integer('product_category_id')->unsigned();
            $table->dropColumn('time');
        });
    }
    
    public function down()
    {
        Schema::table('marcodelacruz_cafelive_reservations', function($table)
        {
            $table->dropColumn('product_category_id');
            $table->time('time');
        });
    }
}
