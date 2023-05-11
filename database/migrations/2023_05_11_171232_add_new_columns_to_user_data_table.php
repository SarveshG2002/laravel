<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToUserDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_data', function (Blueprint $table) {
            //
            $table->string('phone',15);
            $table->string('mobile',15);
            $table->text('address');
            $table->string('profetion',100);
            $table->text('about');
            $table->text('education');
            $table->text('certificate');
            $table->text('experience');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_data', function (Blueprint $table) {
            //
        });
    }
}
