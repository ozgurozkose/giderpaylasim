<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('rank');
            $table->integer('building_id');
            $table->string('public_id',13);
            $table->string('floorNumber',15);
            $table->string('doorNumber',15);
            $table->string('name',100);
            $table->string('info',300);
            $table->string('type',20);
            $table->integer('area');
            $table->string('billingType',30);
            $table->double('locationMultiple', 15, 8);
            $table->double('coldWater', 15, 8);
            $table->double('hotWater', 15, 8);
            $table->date('enteredOn');
            $table->string('emails',300);
            $table->string('phones',300);
            $table->string('comparionGroup',5);
            $table->string('password',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
