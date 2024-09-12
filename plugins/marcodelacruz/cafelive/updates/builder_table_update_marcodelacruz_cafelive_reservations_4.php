<?php namespace MarcoDeLaCruz\Cafelive\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarcodelacruzCafeliveReservations4 extends Migration
{
    public function up()
    {
        Schema::table('marcodelacruz_cafelive_reservations', function($table)
        {
            $table->renameColumn('product_category_id', 'category_id');
        });
    }
    
    public function down()
    {
        Schema::table('marcodelacruz_cafelive_reservations', function($table)
        {
            $table->renameColumn('category_id', 'product_category_id');
        });
    }
}
