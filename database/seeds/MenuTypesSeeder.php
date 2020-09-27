<?php

use App\MenuType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_types')->delete();
        MenuType::create(array('name' => 'Breakfast'));
        MenuType::create(array('name' => 'Lunch'));
        MenuType::create(array('name' => 'Dinner'));
    }
}
