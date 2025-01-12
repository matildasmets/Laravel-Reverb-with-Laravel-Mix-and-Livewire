<div>
    <h2 class="text-2xl font-bold mb-4">Tasks</h2>

    <div class="mb-4">
        <input type="text" wire:model="newTaskName" placeholder="New task name" class="border p-2 mr-2">
        <button wire:click="addTask" class="bg-blue-500 text-white px-4 py-2 rounded">Add Task</button>
    </div>

    <table class="w-full">
        <thead>
            <tr>
                <th class="text-left">ID</th>
                <th class="text-left">Name</th>
                <th class="text-left">Completed</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->name }}</td>
                <td>{{ $task->completed ? 'Yes' : 'No' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

