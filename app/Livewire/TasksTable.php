<?php

namespace App\Livewire;

use App\Models\Task;
use App\Events\TaskCreated;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class TasksTable extends Component
{
    public $tasks;
    public $newTaskName = '';

    protected $listeners = ['echo:tasks,TaskCreated' => 'handleNewTask'];

    public function mount()
    {
        $this->loadTasks();
    }

    public function render()
    {
        return view('livewire.tasks-table');
    }

    public function addTask()
    {
        $task = Task::create([
            'name' => $this->newTaskName,
        ]);

        $this->newTaskName = '';

        broadcast(new TaskCreated($task));

        $this->loadTasks();
    }

    public function handleNewTask($event)
    {
        Log::info('New task received', $event);
        $this->loadTasks();
    }

    private function loadTasks()
    {
        $this->tasks = Task::latest()->get();
    }
}
