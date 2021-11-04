<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'id' =>'1',
                'name' => 'Dumbbell – Dumbbell standing shoulder press',
                'rules'=>'1',
            ],
            [
                'id' =>'2',
                'name' => 'Stand pushing dumbbells',
                'rules'=>'1',
            ],
            [
                'id' =>'3',
                'name' => 'Push-Up',
                'rules'=>'1',
            ],
            [
                'id' =>'4',
                'name' => 'Single-Leg Toe Touches',
                'rules'=>'1',
            ],
            [
                'id' =>'5',
                'name' => 'Lunge Kick',
                'rules'=>'1',
            ],
            [
                'id' =>'6',
                'name' => 'Flutter Kick',
                'rules'=>'1',
            ],
            [
                'id' =>'7',
                'name' => 'Squat Jump',
                'rules'=>'2',
            ],
            [
                'id' =>'8',
                'name' => 'Curtsy lunge',
                'rules'=>'2',
            ],
            [
                'id' =>'9',
                'name' => 'Plank Reverse',
                'rules'=>'2',
            ],
            [
                'id' =>'10',
                'name' => 'Side Plank Twist – Plan',
                'rules'=>'2',
            ],
            [
                'id' =>'11',
                'name' => 'Squat 360',
                'rules'=>'2',
            ],
            [
                'id' =>'12',
                'name' => 'Body Saw',
                'rules'=>'2',
            ],
            [
                'id' =>'13',
                'name' => 'Run and Spraw',
                'rules'=>'3',
            ],
            [
                'id' =>'14',
                'name' => 'Single-Leg Burpee',
                'rules'=>'3',
            ],
            [
                'id' =>'15',
                'name' => 'Goddess Squat Jump',
                'rules'=>'3',
            ],
            [
                'id' =>'16',
                'name' => 'Bird Dog',
                'rules'=>'3',
            ],
            [
                'id' =>'17',
                'name' => 'Side to side Crunch',
                'rules'=>'3',
            ],
            [
                'id' =>'18',
                'name' => 'Spiderman Plank',
                'rules'=>'3',
            ],


        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
