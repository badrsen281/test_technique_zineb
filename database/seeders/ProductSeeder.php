<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                [
                    'libelle' => Str::random(10),
                    'prix' => 10,
                    'qte_stocker' => 10,
                ],
                [
                    'libelle' => Str::random(10),
                    'prix' => 100,
                    'qte_stocker' => 8,
                ],
                [
                    'libelle' => Str::random(10),
                    'prix' => 150,
                    'qte_stocker' => 9,
                ],
                [
                    'libelle' => Str::random(10),
                    'prix' => 200,
                    'qte_stocker' => 20,
                ],
                [
                    'libelle' => Str::random(10),
                    'prix' => 300,
                    'qte_stocker' => 18,
                ]
            ]
            
        );
    }
}
