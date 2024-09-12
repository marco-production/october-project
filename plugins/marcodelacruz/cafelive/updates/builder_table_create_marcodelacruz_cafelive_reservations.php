<?php namespace MarcoDeLaCruz\Cafelive\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMarcodelacruzCafeliveReservations extends Migration
{
    public function up()
    {
        Schema::create('marcodelacruz_cafelive_reservations', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone_number');
            $table->time('time');
            $table->text('message')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('marcodelacruz_cafelive_reservations');
    }
}
