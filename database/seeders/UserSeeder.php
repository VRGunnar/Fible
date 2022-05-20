<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'first_name' => 'Dennis',
            'last_name' => 'Pouliart',
            'email' => 'r0737961@student.thomasmore.be',
            'password' => Hash::make('root'),
            'enrolled' => '1',
            'r_nr' => 'r0737961',
            'personal_nr' => '0737961',
            'library_nr' => '802420090',
            'school' => 'Thomas More',
            'card_nr' => '21335990'
        ]);
        \DB::table('users')->insert([
            'first_name' => 'Gunnar',
            'last_name' => 'Van Remoortere',
            'email' => 'r0813107@student.thomasmore.be',
            'password' => Hash::make('root'),
            'enrolled' => '1',
            'r_nr' => 'r0813107',
            'personal_nr' => '0813107',
            'library_nr' => '802490792',
            'school' => 'Thomas More',
            'card_nr' => '21528347'
        ]);
        \DB::table('users')->insert([
            'first_name' => 'Jonas',
            'last_name' => 'Del Turco',
            'email' => 'r0804448@student.thomasmore.be',
            'password' => Hash::make('root'),
            'enrolled' => '1',
            'r_nr' => 'r0804448',
            'personal_nr' => '0804448',
            'library_nr' => '802479171',
            'school' => 'Thomas More',
            'card_nr' => '21514925'
        ]);
    }
}
