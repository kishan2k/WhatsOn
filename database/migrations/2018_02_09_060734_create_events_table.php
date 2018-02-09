<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('category');
            $table->string('subcategory');
            $table->string('organizer');
            $table->string('tags');
            $table->string('category');
            $table->string('source');
            $table->text('body');
            $table->decimal('cost');
            $table->date('start_date');            
            $table->date('end_date');            
            $table->time('start_time');  
            $table->time('end_time');  
            $table->time('start_time');  
            $table->timestamps();
            $table->softDeletes();
            //  Needs finishing!
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}

