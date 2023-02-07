<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MstCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_categories')->insert([
            [
                'name' => 'DQ',
            ],
            [
                'name' => 'IQ',
            ],
            [
                'name' => 'PQ',
            ],
            [
                'name' => 'PV',
            ],
            [
                'name' => 'OQ',
            ],
            [
                'name' => 'RV',
            ],
            [
                'name' => 'FAT',
            ],
            [
                'name' => 'FR',
            ],
            [
                'name' => 'MS',
            ],
            [
                'name' => 'PS',
            ],
            [
                'name' => 'QS',
            ],
            [
                'name' => 'ST',
            ],
            [
                'name' => 'SOP',
            ],

        ]);
    }
}
