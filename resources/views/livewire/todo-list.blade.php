<div>
    <h2>To-Do List</h2>
    <div id="myDIV" class="header">
        <input type="text" wire:model="newTask" id="myInput" placeholder="Add a new task...">
        <button wire:click="addTask" class="addBtn">Add</button>
    </div>
    @if(count($tasks) > 0)
    <ul id="myUL">
        @foreach($tasks as $task)
        @if(!$task['completed'])
        <li wire:click="markAsCompleted('{{ $task['id'] }}')">
            @else
        <li class="checked" wire:click="markAsIncompleted('{{ $task['id'] }}')">
            @endif
            <span>{{ $task['name'] }}</span>
            <button class="close" wire:click="removeTask('{{ $task['id'] }}')">Remove</button>
        </li>
        @endforeach
    </ul>
    @else
    <h2>To-Do list is empty</h2>
    @endif
</div>
