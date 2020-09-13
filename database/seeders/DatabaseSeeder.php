<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Location;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->truncate();
        Location::create(['name' => 'Aruba', 'desirability' => 10]);
        Location::create(['name' => 'Jamaica', 'desirability' => 10]);
        Location::create(['name' => 'Bermuda', 'desirability' => 10]);
        Location::create(['name' => 'Bahama', 'desirability' => 10]);
        Location::create(['name' => 'Key Largo', 'desirability' => 10]);
        Location::create(['name' => 'Montego', 'desirability' => 10]);
    }
}
