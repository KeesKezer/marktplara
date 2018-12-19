<?php

use Illuminate\Database\Seeder;

class AdvertentiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('Advertenties')->insert([
             [
                'titel' => 'Honda 500',
                'omschrijving' => 'Te koop: Honda 500 uit 1987. In goede staat, met 100.000 km op de teller',
                'ini_prijs' => '1200'
             ]
             [
                'titel' => 'Honda 400',
                'omschrijving' => 'Te koop: Honda 400 uit 1986. In goede staat, met 100.000 km op de teller',
                'ini_prijs' => '1100'
             ]
             [
                'titel' => 'Honda 300',
                'omschrijving' => 'Te koop: Honda 300 uit 1985. In goede staat, met 100.000 km op de teller',
                'ini_prijs' => '1200'
             ]
             [
                'titel' => 'Honda 200',
                'omschrijving' => 'Te koop: Honda 200 uit 1984. In goede staat, met 100.000 km op de teller',
                'ini_prijs' => '1000'
             ]
        ]);
    }
}
