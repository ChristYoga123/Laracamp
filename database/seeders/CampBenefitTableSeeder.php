<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampBenefit;
class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'iMac Pro 2021 & Display'
            ],
            [
                'camp_id' => 1,
                'name' => 'Mentoring Progres'
            ],
            [
                'camps_id' => 1,
                'name' => 'Final Sertificate Project'
            ],
            [
                'camps_id' => 2,
                'name' => 'Mentoring Progres'
            ],
            [
                'camps_id' => 2,
                'name' => 'Final Sertificate Project'
            ]
        ];
        CampBenefit::insert($campBenefits);

    }
}
