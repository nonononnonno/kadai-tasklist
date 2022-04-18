<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seederの操作方法はL13.11
        for($i = 1; $i <= 100; $i++) {
            DB::table('tasks')->insert([
                'content' => 'test content ' . $i,
                'status' => 'test status ' . $i
            ]);
        }
    }
}
