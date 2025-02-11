@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <ul class="space-y-4">
            @foreach ($tasks as $task)
                <li class="flex items-center justify-between bg-gray-50 p-4 rounded-lg shadow-md">
                    <span class="{{ $task->completed ? 'line-through text-gray-500' : '' }}">{{ $task->title }}</span>

                    <div class="flex space-x-2">
                        @if (!$task->completed)
                            <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                                @csrf @method('PATCH')
                                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">Complete</button>
                            </form>
                        @endif
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
