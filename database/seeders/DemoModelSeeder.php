<?php

namespace Database\Seeders;

use App\Models\DemoModel;
use Illuminate\Database\Seeder;

class DemoModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DemoModel::factory()->times(10)->create();
    }
}
