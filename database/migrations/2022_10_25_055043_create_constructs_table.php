<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstructsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constructs', function (Blueprint $table) {
            $table->id();
            $table->string('sinchiku')->nullable();
            $table->string('reform')->nullable();
            $table->string('repair_amamori')->nullable();
            $table->string('repair_gaiheki')->nullable();
            $table->string('repair_naisou')->nullable();
            $table->string('repair_mizumore')->nullable();
            $table->string('repair_aircon')->nullable();
            $table->foreignId('koumten_id')
                ->constrained('koumtens')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
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
        Schema::dropIfExists('constructs');
    }
}
