<?php

use Illuminate\Database\Seeder;

class EventTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('events')->insert([
            [
                'title' => 'panne',
                'start' => '2020-02-07 22:30:00',
                'end' => '2020-02-09 22:30:00',
                'color' => '#c40233',
                'description' => 'pieces a changer',

            ],
            [
                'title' => 'vidange',
                'start' => '2020-02-8',
                'end' => '2020-02-10',
                'color' => '#29fdf2',
                'description' => 'huile rouille',

            ]

        ]);
    }
}
