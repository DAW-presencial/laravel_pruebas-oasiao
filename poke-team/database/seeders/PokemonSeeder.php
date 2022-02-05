<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id,name,level,users_id,captured_at,type,gender,description,category


        // ELOQUENT
        $pokemon = new Pokemon;

        $pokemon->name = 'Charmander';
        $pokemon->level = 5;
        $pokemon->users_id = 1;
        $pokemon->captured_at = Carbon::now('Europe/Madrid');
        $pokemon->type = json_encode(['fire']);
        $pokemon->gender = 'male';
        $pokemon->description = 'He prefers hot things. They say that when it rains, steam comes out of the tip of its tail.';
        $pokemon->category = 'lizard';
        $pokemon->save();


        // QUERY-BUILDER
        DB::table('pokemons')->insert([
            'name' => 'Bulbasur',
            'level' => 3,
            "users_id" => 1,
            'captured_at' => Carbon::now('Europe/Madrid'),
            "type" => json_encode(['grass','poison']),
            "gender" => 'female',
            "description" => 'While it is young, it uses the nutrients that are stored in the seed on its back in order to grow.',
            "category" => 'seed'
        ]);


        // RAW

    }
}
