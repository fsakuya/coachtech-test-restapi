<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Seeder;

class ExercisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'test1',
            'email' => 'test1@example.com',
            'profile' => 'test1_profile'
        ];
        $exercise = new Exercise();
        $exercise->fill($param)->save();
        $param = [
            'name' => 'test2',
            'email' => 'test2@example.com',
            'profile' => 'test2_profile'
        ];
        $exercise = new Exercise;
        $exercise->fill($param)->save();
        $param = [
            'name' => 'test3',
            'email' => 'test3@example.com',
            'profile' => 'test3_profile'
        ];
        $exercise = new Exercise;
        $exercise->fill($param)->save();
    }
}
