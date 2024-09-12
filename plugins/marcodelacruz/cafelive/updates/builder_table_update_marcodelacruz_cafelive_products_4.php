<?php namespace MarcoDeLaCruz\Cafelive\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarcodelacruzCafeliveProducts4 extends Migration
{
    public function up()
    {
        Schema::table('marcodelacruz_cafelive_products', function($table)
        {
            $table->integer('product_category_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('marcodelacruz_cafelive_products', function($table)
        {
            $table->dropColumn('product_category_id');
        });
    }
}
