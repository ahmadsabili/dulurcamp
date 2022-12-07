<?php

namespace Database\Seeders;

use App\Models\Camp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Gila Belajar',
                'slug' => 'gila-belajar',
                'price' => 100000,
            ],
            [
                'title' => 'Baru Mulai',
                'slug' => 'baru-mulai',
                'price' => 50000,
            ],
            ];

            foreach ($camps as $camp) {
                Camp::create($camp);
            }
    }
}
