<?php

namespace Tests\Feature;

use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskExampleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_taskCreate()
    {
        $task = Task::factory()->create();
        $task->description = 'Hello IS373';
        $task->save();

        $user = User::find(1);
        $user->name = 'Theja Thondapi';
        $user->save();
        $tasks = $user->tasks;
        dd($task);
    }
}
