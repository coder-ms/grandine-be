<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practices', function (Blueprint $table) {
            $table->id();
            $table->string('plate', 7)->unique();
            $table->string('slug');
            $table->string('model', 150);
            $table->string('color', 150);
            $table->string("immatricolation", 4);
            $table->string('cover')->nullable();
            // PROPRIETARIO
            $table->string('owner')->unique();
            $table->string('tax_id_code', 16)->unique();
            $table->string('birthplace');
            $table->date('birth');
            $table->string('residence');
            $table->string('phone_number', 10)->unique();
            $table->string('email')->unique();
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
        Schema::dropIfExists('practices');
    }
};