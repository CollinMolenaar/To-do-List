M<?php

namespace App\Livewire;

use Livewire\Component;

class TodoList extends Component
{
    public $tasks = [];
    public $newTask = '';

    public function addTask()
    {
        if ($this->newTask !== '') {
            $this->tasks[] = ['id' => uniqid(), 'name' => $this->newTask, 'completed' => false];
            $this->newTask = '';
        }
    }

    public function removeTask($taskId)
    {
        $this->tasks = array_filter($this->tasks, fn($task) => $task['id'] !== $taskId);
    }

    public function markAsCompleted($taskId)
    {
        foreach ($this->tasks as &$task) {
            if ($task['id'] === $taskId) {
                $task['completed'] = true;
                break;
            }
        }
    }

    public function markAsIncompleted($taskId)
    {
        foreach ($this->tasks as &$task) {
            if ($task['id'] === $taskId) {
                $task['completed'] = false;
                break;
            }
        }
    }

    public function render()
    {
        return view('livewire.todo-list')->layout('components.layouts.app');
    }
}
