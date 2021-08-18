<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'id' => 1,
                'title' => 'Larousse des noms propres',
                'author' => 'Un auteur',
                'publication_year' => 2021,
                'genre' => 'Suspence',
                'synopsis' => "j'ai pas lu",
            ],
            [
                'id' => 2,
                'title' => 'Les blagues de Toto',
                'author' => 'Sylvester Stallone',
                'publication_year' => 1975,
                'genre' => 'Action',
                'synopsis' => "John Rambo est de retour de sa dernière mission au Viêtnam. Il espère aujourd'hui se tenir à l'écart de l'univers de violence qui a longtemps été le sien. Un jour, il reçoit la visite du colonel Trautman qui lui demande de lui prêter main-forte.",
            ],
            [
                'id' => 3,
                'title' => 'Tintin',
                'author' => 'Herge',
                'publication_year' => 1950,
                'genre' => 'Aventure',
                'synopsis' => "Une unité de commando d'élite fut condamné pour un crime qu'ils n'avaient pas commis. Si vous avez un problème, si vous êtes seul, si personne ne peut vous aider, il vous reste un recours, un seul : l'Agence tous risques",
            ]
        ]);
    }
}
