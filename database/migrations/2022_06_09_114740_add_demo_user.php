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
        \DB::table('users')->insert([
            'name' => 'Demo user',
            'email' => 'demo@student.thomasmore.be',
            'password' => Hash::make('demo'),
            'enrolled' => '1',
            'r_nr' => 'r0804448',
            'personal_nr' => '0804448',
            'library_nr' => '802479171',
            'school' => 'Thomas More',
            'card_nr' => '21514925'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
