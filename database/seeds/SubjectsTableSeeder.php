<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // DB::table('subjects')->truncate();

        $subjects = [

            ['name' => '国語'],
            ['name' => '英語'],
            ['name' => '数学'],
            ['name' => '日本史'],
            ['name' => '世界史'],
            ['name' => '物理'],
            ['name' => '化学'],
            ['name' => '生物'],
            ['name' => 'プログラミング'],

        ];

        foreach($subjects as $subject) {

            \App\Subject::create($subject);

        }




    }
}
