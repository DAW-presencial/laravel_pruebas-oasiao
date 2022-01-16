<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $usernames = [
            ['username'=>'onikakimasiao'],
            ['username'=>'santimb']
        ];

        DB::table('usuario')->insert($usernames);

        $contacts = [
            [
                'name' => 'Santi',
                'phone'=> '123456789',
                'usuario_id'=> 1
            ],
            [
                'name' => 'Sisa',
                'phone'=> '987654321',
                'usuario_id'=> 1
            ]
        ];

        DB::table('contact-list')->insert($contacts);


    }
}
