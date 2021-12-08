<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookedResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booked_resources', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->datetime('start_date')->nullable();
            $table->datetime('end_date')->nullable();
            $table->string('background_color')->nullable();
            $table->string('text_color')->nullable();
            $table->string('user_name');
            $table->string('resource_title');
            $table->string('location');
            $table->boolean('executed')->default(0);
            $table->boolean('cancelled')->default(0);
            $table->boolean('billable')->default(0);
            $table->integer('cancellation_rule')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booked_resources');
    }
}
