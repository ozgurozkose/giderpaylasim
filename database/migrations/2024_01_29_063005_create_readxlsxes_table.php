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
        Schema::create('readxlsxes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('moduleNumber')->nullable();
            $table->string('readTime',20)->nullable();
            $table->string('meterValue',10)->nullable();
            $table->string('deviceStatus',15)->nullable();
            $table->string('deviceType',20)->nullable();
            $table->string('meterUnit',5)->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('readxlsxes');
    }
};
