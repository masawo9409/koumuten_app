<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKoumtensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('koumtens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('avairable_area');
            $table->string('contact_address_phone');
            $table->string('contact_address_mail');
            $table->integer('sinchiku')->nullable();
            $table->integer('reform')->nullable();
            $table->integer('repair_amamori')->nullable();
            $table->integer('repair_gaiheki')->nullable();
            $table->integer('repair_naisou')->nullable();
            $table->integer('repair_mizumore')->nullable();
            $table->integer('repair_aircon')->nullable();
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('koumtens');
    }
}
