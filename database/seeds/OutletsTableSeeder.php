<?php

use Illuminate\Database\Seeder;
use App\Outlet;
use Faker\Generator as Faker;

class OutletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Outlet::create([
            'code' => '123456',
            'name' => 'laundry2',
            'status' => '1',
            'address' => 'Jl.aa',
            'phone' => '098765432'
        ]);
    }
}
