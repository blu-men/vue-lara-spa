<?php

use App\TodoTask;
use Illuminate\Database\Seeder;

class TodoTasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            TodoTask::create([
                    'title' => 'title' . $i,
                    'content' => 'content' . $i,
                    'evaluation' => 'evaluation' . $i,
                    'comment' => 'comment' . $i,
                ]
            );
        }
    }
}
