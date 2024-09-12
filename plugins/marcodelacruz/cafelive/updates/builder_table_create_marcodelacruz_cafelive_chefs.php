<?php namespace MarcoDeLaCruz\Cafelive\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMarcodelacruzCafeliveChefs extends Migration
{
    public function up()
    {
        Schema::create('marcodelacruz_cafelive_chefs', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('occupation');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('marcodelacruz_cafelive_chefs');
    }
}
