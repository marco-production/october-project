<?php namespace MarcoDeLaCruz\Cafelive\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarcodelacruzCafeliveReservations3 extends Migration
{
    public function up()
    {
        Schema::table('marcodelacruz_cafelive_reservations', function($table)
        {
            $table->integer('number_of_guests')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('marcodelacruz_cafelive_reservations', function($table)
        {
            $table->dropColumn('number_of_guests');
        });
    }
}
