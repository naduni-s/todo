@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <form action="{{ route('tasks.store') }}" method="POST" class="mb-6">
            @csrf
            <div class="flex items-center space-x-4">
                <input type="text" name="title" placeholder="Enter task title" required class="px-4 py-2 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add Task</button>
            </div>
        </form>
    </div>
@endsection
