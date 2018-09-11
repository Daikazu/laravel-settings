<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model_type')->nullable();
            $table->unsignedInteger('model_id')->nullable();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->string('display_name')->nullable();
            $table->text('details')->nullable()->default(null);
            $table->string('type')->nullable();
            $table->integer('order')->default('1');
            $table->string('group')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
