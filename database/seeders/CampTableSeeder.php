<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;
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
                'price' => 280,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Baru Mulai',
                'slug' => 'baru-mulai',
                'price' => 140,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        // 1st method with foreach
        // foreach ($camps as $camp) {
        //     Camp::create($camp);
        // }

        // 2nd method with insert without foreach
        Camp::insert($camps);
    }
}
