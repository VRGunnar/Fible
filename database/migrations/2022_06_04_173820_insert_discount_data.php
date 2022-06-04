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
        DB::table('discounts')
        ->where('id', 1)
        ->update(['title' => "Krijg tot 35% korting bij Adidas online",
         'description' => "Dat heb je goed gelezen, ontvang tot wel 35% studenten korting door het shoppen bij Adidas online! Deze korting kan niet gecombineerd worden met andere acties.",
         'price' => '7.99', 'logo' => '/images/logo_adidas.jpg',
         'used_count' => '187']);

       DB::table('discounts')
       ->where('id', 2)
       ->update(['title' => "10% korting op je Flixbus reis",
        'description' => "Met de Flixbus reis je waar en wanneer je maar wilt. Kies uit meer dan 2,500 reisbestemmingen in 36 verschillende landen. Altijd al die droomreis willen maken? Twijfel niet en krijg vandaag nog korting!",
        'price' => '8.99', 'logo' => '/images/logo_flixbus.jpg',
        'used_count' => '5']);

        DB::table('discounts')
        ->where('id', 3)
        ->update(['title' => "Ontvang 10% korting bij JD Sports",
         'description' => "Scoor nu aanbiedingen met enorme kortingen. Steel de show met onze geselecteerde aanbiedingen. JD Sports biedt on-trend hoodies, jassen, trainingsbroeken en truien van de beste merken zoals champion, ellesse en adidas. Shop nu jouw everyday look bij JD en check onze offers!",
         'price' => '2.99', 'logo' => '/images/logo_jd.jpg',
         'used_count' => '257']);

       DB::table('discounts')
         ->where('id', 4)
         ->update(['title' => "Geniet van 10% korting bij Asos",
          'description' => "Bij Asos kan je gebruik maken van exclusieve kortingen die alleen gelden voor studenten. Stel je eigen stijlvolle outfit samen en geniet van 10% korting! Alleen geldig voor studenten die ingeschreven zijn in het huidige academiejaar.",
          'price' => '2.49', 'logo' => '/images/logo_asos.jpg',
          'used_count' => '112']);

       DB::table('discounts')
         ->where('id', 5)
         ->update(['title' => "Ontvang 10% korting bij Nike",
           'description' => "Geniet van 10% vermindering bij aankoop van Nike producten. Deze korting is niet geldig bij het aankopen van meerdere prodcuten of producten met een waarde boven de €500.",
           'price' => '4.99', 'logo' => '/images/logo_nike.jpg',
           'used_count' => '87']);

       DB::table('discounts')
       ->where('id', 6)
       ->update(['title' => "Tot 20% korting bij Dell België",
            'description' => "Bespaar tot 20% op de allerbeste systemen en electronica. Eenvoudig aanmelden en gratis verzending voor studenten*. Voor alle voorwaarden kan je terecht op onze website.",
            'price' => '7.49', 'logo' => '/images/logo_dell.jpg',
            'used_count' => '23']);

       DB::table('discounts')
       ->where('id', 7)
       ->update(['title' => "Ontvang nu 10% korting bij JBL",
           'description' => "Als student is muziek natuurlijk enorm belangrijk! JBL heeft hiervoor mooie producten zoals speakers, hoofdtelefoons of oordopjes. Ook aan de gamers heeft JBL gedacht en ook zij kunnen rekenen op mooie kortingen.",
           'price' => '6.49', 'logo' => '/images/logo_jbl.jpg',
           'used_count' => '99']);

       DB::table('discounts')
       ->where('id', 8)
       ->update(['title' => "Tot 10% korting op Apple producten",
           'description' => "Beschikbaar voor studenten aan een universiteit of hogeschool, studenten die net staan ingeschreven, ouders die producten kopen voor een studerend kind, en docenten of andere medewerkers van onderwijsinstellingen op elk onderwijsniveau.*",
           'price' => '9.99', 'logo' => '/images/logo_apple.jpg',
           'used_count' => '44']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('discounts', function (Blueprint $table) {
            //
        });
    }
};
