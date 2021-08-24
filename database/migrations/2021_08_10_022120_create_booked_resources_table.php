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
            $table->text('title');
            $table->string('userName');
            $table->string('resourceTitle');
            $table->string('resourceLocation');
            $table->boolean('executed');
            $table->boolean('billable');
            $table->integer('cancellationRule');
            $table->string('groupId');
            $table->boolean('allDay');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->string('startStr');
            $table->string('endStr');
            $table->string('title');
            $table->string('url');
            $table->string('classNames');
            $table->boolean('editable');
            $table->boolean('startEditable');
            $table->boolean('durationEditable');
            $table->boolean('resourceEditable');
            $table->string('display');
            $table->string('overlap');
            $table->string('constraint');
            $table->string('backgroundColor');
            $table->string('borderColor');
            $table->string('textColor');
            $table->string('extendedProps');
            $table->string('source');
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
