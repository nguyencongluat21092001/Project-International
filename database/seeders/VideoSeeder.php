<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('videos')->truncate();
        DB::table('videos')->insert([
            [
                'id' => '1',
                'link_id' => 'https://www.youtube.com/embed/OOe_HrNnQWw ',
                'categories_id' => '1',
                'content'=>'In today video, Coach Austin takes you through the set-up, execution,
                and common mistakes made during the Standing DB Shoulder Press.',
                'title'=>'How to: Standing DB Shoulder Press for Physique Development',
            ],
            [
                'id' => '2',
                'link_id' => 'https://www.youtube.com/embed/hbE9iMNjLDQ',
                'categories_id' => '2',
                'content'=>'In this Fitness Central series we will be focussing on the Dumbbell Push Press.',
                'title'=>'Dumbbell Push Press - Fitness Gym Training'
            ],
            [
                'id' => '3',
                'link_id' => 'https://www.youtube.com/embed/IODxDxX7oi4',
                'categories_id' => '3',
                'content'=>'Being able to bench press a lot has nothing to do with being good at football,
                 but increasing upper body and core strength can help us be stronger in challenges and more
                 balanced as an athlete',
                'title'=>'The Perfect Push Up | Do it right!'
            ],
            [
                'id' => '4',
                'link_id' => 'https://www.youtube.com/embed/T1u5yYDszjI',
                'categories_id' => '4',
                'content'=>'The single leg toe touch is an excellent lower body exercise that is great for the glutes and balance.',
                'title'=>'How To Do A SINGLE LEG TOE TOUCH | Exercise Demonstration Video and Guide'
            ],
            [
                'id' => '5',
                'link_id' => 'https://www.youtube.com/embed/0_bTYQCxgMg',
                'categories_id' => '5',
                'content'=>'Not sure what to do at the gym? Opt for this leg toning move from Women Health that helps strengthen and
                lengthen the muscles in your lower body.',
                'title'=>'Reverse Lunge With Front Kick - 15-Minute Lean Legs Workout'
            ],
            [
                'id' => '6',
                'link_id' => 'https://www.youtube.com/embed/DNx0PYv7_L8',
                'categories_id' => '6',
                'content'=>'All right, the next exercise is leg flutters or flutter kicks. And basically what you’re going to do
                is you’re going to lay down on your back.',
                'title'=>'Flutter Kicks...You`re Doing it WRONG',
            ],
            [
                'id' => '7',
                'link_id' => 'https://www.youtube.com/embed/A-cFYWvaHr0',
                'categories_id' => '7',
                'content'=>'Squat jumps are the perfect move to combine the strength portion of a squat with the plyometric
                 portion of a jump, but do you know how to do them the right way?',
                'title'=>'How To Do A Squat Jump | The Right Way | Well+Good'
            ],
            [
                'id' => '8',
                'link_id' => 'https://www.youtube.com/embed/Ix_SFZVDy0I',
                'categories_id' => '8',
                'content'=>'How to perform a Curtsy Lunge An amazing body weight exercise to target your legs and your
                core. The curtsy lunge is a little more challenging than your regular lunge but once you perfect it
                you’ll love the burn!',
                'title'=>'How To Curtsy Lunge With Krissy Cela'
            ],
            [
                'id' => '9',
                'link_id' => 'https://www.youtube.com/embed/bhG02zNNJas',
                'categories_id' => '9',
                'content'=>'In today’s video, Serene demonstrates different variations of doing a reverse plank.
                Try this in your workout routine and let us know how you like it!',
                'title'=>'How to Do Reverse Plank Triceps Dips | Health'
            ],
            [
                'id' => '10',
                'link_id' => 'https://www.youtube.com/embed/XeN4pEZZJNI',
                'categories_id' => '10',
                'content'=>'Side planks are a key part of just about every core workout, but do you know how to do them
                 the right way? ',
                'title'=>'How To Do A Side Plank | The Right Way | Well+Good'
            ],
            [
                'id' => '11',
                'link_id' => 'https://www.youtube.com/embed/Ua2CToaFKvY',
                'categories_id' => '11',
                'content'=>'Many folks come into our office who are looking to add variety and to increase the intensity
                 of their leg workouts.',
                'title'=>'Best Legs Exercise You’re NOT DOING! *360 Degree JUMP SQUAT* Episode 4 | Dr Wil & Dr K'
            ],
            [
                'id' => '12',
                'link_id' => 'https://www.youtube.com/embed/oSNHVD0zT3Q',
                'categories_id' => '12',
                'content'=>'The body saw exercise is an all core workout but focuses mainly on your lower abs. It is
                 similar to the ab wheel exercises, making you move while contracting your core muscles.',
                'title'=>'How To Do A Body Saw — (AB WORKOUT)'
            ],
            [
                'id' => '13',
                'link_id' => 'https://www.youtube.com/embed/nfPM4S24chs',
                'categories_id' => '13',
                'content'=>'David King Fitness The Sprawl',
                'title'=>'DavidKingFitness.com DK PUSH The Sprawl David King Demonstration of Burpees little workout brother The Sprawl'
            ],
            [
                'id' => '14',
                'link_id' => 'https://www.youtube.com/embed/zRXjVU3Bv1M',
                'categories_id' => '14',
                'content'=>'Burpees are one of the most challenging moves in the fitness world. Charlee Atkins is here to
                 tell you how to do a burpee the right way! ',
                'title'=>'STRAIGHT LEG BURPEES'
            ],
            [
                'id' => '15',
                'link_id' => 'https://www.youtube.com/embed/QQ6_CjuOg6o',
                'categories_id' => '15',
                'content'=>'This Jumping Jack cardio workout is going to help torch some calories and get you sweating!
                I love creating fun ways to help us with weight loss,
                 ',
                'title'=>'Jumping Jack + Jump Squat'
            ],
            [
                'id' => '16',
                'link_id' => 'https://www.youtube.com/embed/wgOuR7YrwtM',
                'categories_id' => '16',
                'content'=>'Personal trainers, Luke Sniewski and Tanner Martty, show you how to perform the bird dog exercise.',
                'title'=>'Bird Dog Core Exercise'
            ],
            [
                'id' => '17',
                'link_id' => 'https://www.youtube.com/embed/RPS_4lgIpr4',
                'categories_id' => '17',
                'content'=>'XFIT Daily hits you with intense, full-body workouts five days a week. Trainers Jason Charchan
                and Michael Patarino lead you through a grueling series of fat-burning cardio movements ',
                'title'=>'Russian Twists/Side-to-Side Crunches - XFit Daily'
            ],
            [
                'id' => '18',
                'link_id' => 'https://www.youtube.com/embed/DVXT7xBA_jU',
                'categories_id' => '18',
                'content'=>'XFIT Daily hits you with intense, full-body workouts five days a week. Trainers Jason Charchan
                and Michael Patarino lead you through a grueling series of fat-burning cardio movements.',
                'title'=>'Spiderman Plank - XFit Daily'
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
