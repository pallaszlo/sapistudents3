<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            
        \App\Models\Student::factory(50)->create();
        /*
        DB::table('students')->insert([
            'name' => 'Kiss Balazs',
            'email'=> 'kisbalazs@gmail.com',
        ]);
        DB::table('students')->insert([
            'name' => 'Nagy Peter',
            'email'=> 'nagypeter@gmail.com',
        ]);
        */
    }
}
