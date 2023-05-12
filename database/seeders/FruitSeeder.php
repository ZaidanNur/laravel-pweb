<?php

namespace Database\Seeders;

use App\Models\Fruit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FruitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fruit::create([
        //     'name'=>'Pisang',
        //     'price'=> 4000,
        //     'description'=> 'Manis pol'
        // ]);

        Fruit::factory(3)->create();
    }
}
