<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\product;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //     $this->call([

        //         // ProductSeeder::class

        //     ]);
        // }


        Product::factory(100)->create();
    }
}
