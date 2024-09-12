<?php namespace MarcoDeLaCruz\Cafelive\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarcodelacruzCafeliveReservations extends Migration
{
    public function up()
    {
        Schema::table('marcodelacruz_cafelive_reservations', function($table)
        {
            $table->date('date');
        });
    }
    
    public function down()
    {
        Schema::table('marcodelacruz_cafelive_reservations', function($table)
        {
            $table->dropColumn('date');
        });
    }
}
