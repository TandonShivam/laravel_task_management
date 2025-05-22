<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create(['title'=>'Simple Task','description'=>'This is a sample task']);
        Task::create(['title'=>'Another Task','description'=>'This is a another task']);
        Task::create(['title'=>'Simple Task','description'=>'This is a sample task']);
        Task::create(['title'=>'Another Task','description'=>'This is a another task']);
        Task::create(['title'=>'Simple Task','description'=>'This is a sample task']);
        Task::create(['title'=>'Another Task','description'=>'This is a another task']);
        Task::create(['title'=>'Another Task','description'=>'This is a another task']);
        Task::create(['title'=>'Another Task','description'=>'This is a another task']);
        Task::create(['title'=>'Another Task','description'=>'This is a another task']);
        Task::create(['title'=>'Another Task','description'=>'This is a another task']);
        Task::create(['title'=>'Another Task','description'=>'This is a another task']);
        Task::create(['title'=>'Another Task','description'=>'This is a another task']);
        Task::create(['title'=>'Another Task','description'=>'This is a another task']);
        Task::create(['title'=>'Another Task','description'=>'This is a another task']);
        Task::create(['title'=>'Another Task','description'=>'This is a another task']);
        Task::create(['title'=>'Another Task','description'=>'This is a another task']);
    }
}
