<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('events', function($table) {
            $table->string('event_category')->after('barcode_type')->nullable();
            $table->string('age_group')->after('event_category')->nullable();
            $table->string('my_organiser_name')->after('age_group')->nullable();
            $table->string('my_organiser_about')->after('my_organiser_name')->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
