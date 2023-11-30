@extends('intern.layout.internlayout')
@section('content')

<div class="w-full md:w-96 md:max-w-full mx-auto">
  <div class="p-6 border border-gray-300 sm:rounded-md">
    <h3 class="text-3xl text-center font-bold py-2"> Edit Task</h3>
    <form method="POST" action="{{route('intern.tasks.update', $task->id)}}">
        @method('PUT')
        @csrf
        <!-- task title -->
      <label class="block mb-6">
        <span class="text-gray-700">Task Name</span>
        <input
          type="text"  name="name"  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  value="{{$task->name}}" readonly/>
      </label>

      
  
      <!-- task title -->

      <label class="block mb-6">
        <span class="text-gray-700">Deadline</span>
        <input type="date" name="deadline"   class="block w-full    mt-1    border-gray-300    rounded-md    shadow-sm    focus:border-indigo-300    focus:ring    focus:ring-indigo-200    focus:ring-opacity-50"  value="{{$task->deadline}}" readonly/>
      </label>
      <label class="block mb-6">
        <span class="text-gray-700">Status</span>
        <select
          name="status"  class=" block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50  "  >
          <option value="pending">pending</option>
          <option value="in_progress">in_progress</option>
          <option value="completed">completed</option>
        </select>
      </label>


      <div class="mb-6">
        <button type="submit" class="h-10 px-5 text-indigo-100 bg-indigo-700 rounded-lg transition-colors duration-150 focus:shadow-outline hover:bg-indigo-800"> Update Task </button>
      </div>
      <div>
       
        </div>
      </div>
    </form>
  </div>
</div>

@endsection
