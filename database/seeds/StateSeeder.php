<?php

use App\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            [
                'name' => "active", 'code' => "active",'is_default' => 1
            ],
            [
                'name' => "inactive", 'code' => "inactive",'is_default' => 0
            ]
        ];
        foreach ($states as $state) {
            State::create($state);
        }
    }
}
