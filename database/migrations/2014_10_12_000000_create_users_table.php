<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('azure_id', 36)->default('azure_id');
            $table->boolean('enrolled')->default(1);
            $table->string('r_nr', 8)->default('r0123456');
            $table->string('personal_nr', 7)->default('0123456');
            $table->string('library_nr')->default('123456789');
            $table->string('school')->default('Thomas More (Mechelen)');
            $table->string('card_nr')->default('21528337');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
