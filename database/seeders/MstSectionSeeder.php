<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MstSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_sections')->insert([
            [
                'name' => 'PSD',
                'description' => 'PROCESS DEVELOPMENT',
            ],
            [
                'name' => 'PJD',
                'description' => 'PROJECT DEVELOPMENT',
            ],
            [
                'name' => 'RMD',
                'description' => 'RAW MATERIAL DEVELOPMENT',
            ],
            [
                'name' => 'PMD',
                'description' => 'PACKAGING MATERIAL DEVELOPMENT',
            ]
        ]);
    }
}
