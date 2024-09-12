<?php namespace MarcoDeLaCruz\Cafelive\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMarcodelacruzCafeliveProducts extends Migration
{
    public function up()
    {
        Schema::create('marcodelacruz_cafelive_products', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->double('price', 10, 0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('marcodelacruz_cafelive_products');
    }
}
