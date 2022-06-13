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
        DB::table('subscriptions')
        ->where('id', 1)
        ->update(['title' => "10% korting bij De Lijn",
         'description' => "Ben je student? Dan gebruik je toch een Buzzy Pazz voor al je verplaatsingen! Met dit abonnement reis je onbeperkt met alle bussen en trams van De Lijn in Vlaanderen en Brussel.",
         'price' => '7.99', 'logo' => '/images/logo_delijn.jpg',
         'duration' => '1842381', 'used_count' => '111', 'company' => 'De Lijn']);

         DB::table('subscriptions')
        ->where('id', 2)
        ->update(['title' => "50% korting op Spotify",
         'description' => "Als student betaal je slechts de helft van de prijs van een premium abonnement! Luister offline en reclame-vije muziek zo veel je maar wilt. Gebruik het ook op je telefoon en sla onbeperkt nummers over.",
         'price' => '4.99', 'logo' => '/images/logo_spotify.jpg',
         'duration' => '1142194', 'used_count' => '479', 'company' => 'Spotify']);

         DB::table('subscriptions')
        ->where('id', 3)
        ->update(['title' => "Krijg 20% korting bij Kinepolis",
         'description' => "Ben jij zo iemand die elke nieuwste film moet gezien hebben? Geniet nu van 20% korting op je Kinepolis abonnement, op deze manier kan je nog meer epische films komen kijken in onze zalen.",
         'price' => '6.49', 'logo' => '/images/logo_kinepolis.jpg',
         'duration' => '1222727', 'used_count' => '144', 'company' => 'Kinepolis']);

         DB::table('subscriptions')
         ->where('id', 4)
         ->update(['title' => "Ontvang 15% korting bij NMBS",
          'description' => "Met je eigen NMBS abonnement reis je zo vaak je wil (of niet wil) naar school aan een fikse korting. Daarnaast ontvang je ook korting op de parkings van B-parking",
          'price' => '9.99', 'logo' => '/images/logo_nmbs.jpg',
          'duration' => '1583991', 'used_count' => '231', 'company' => 'NMBS']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subscriptions', function (Blueprint $table) {
            //
        });
    }
};
