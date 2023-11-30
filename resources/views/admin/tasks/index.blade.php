@extends('admin.layout.adminlayout')
@section('content')

@if(session()->has('message'))

<div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
  <span class="font-medium">
  {{session()->get('message')}}
  </span>
</div>
@endif











<div class="my-10">

<!-- <div class="flex justify-end mb-2">
  <a href="{{route('admin.tasks.create')}}" class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 rounded">
    Add New Task
  </a>
</div> -->



<div class="lg:flex lg:items-center lg:justify-between">
  <div class="min-w-0 flex-1">
    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight px-4">Task Lists</h2>
    <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">
    </div>
  </div>
  <div class="mt-5 flex lg:ml-4 lg:mt-0">
    <span class="sm:ml-3">
      <a href="{{route('admin.tasks.create')}}" class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        Add New Task
      </a>
    </span>
    </div>
  </div>
</div>

<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200 w-1/3 mx-auto">
          <thead>
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider whitespace-nowrap ">
                ID
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider whitespace-nowrap">
                Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider whitespace-nowrap">
                Assign To
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider whitespace-nowrap">
                Description
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider whitespace-nowrap">
                Assign Date
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider whitespace-nowrap">
                Deadline
              </th>              
              <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider whitespace-nowrap">
                Status
              </th>              
              <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider whitespace-nowrap">
                Action
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @foreach($tasks as $key =>$task )
          
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                {{$key+1}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                {{$task->name}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                {{$task->user_id}}
              </td>
              <td class="px-6 py-4 whitespace-wrap">
              {{$task->description}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
              {{$task->assignment_date}}

              </td>
              <td class="px-6 py-4 whitespace-nowrap">
              {{$task->deadline}}

              </td>              
              <td class="px-6 py-4 whitespace-nowrap">
              @if($task->status == 'pending')
              <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-1 rounded  dark:text-red-400 border border-red-400"> {{$task->status}}</span>
              @elseif( $task->status == 'in_progress')
              <span class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-1 rounded  dark:text-yellow-300 border border-yellow-300">{{$task->status}}</span>
              @elseif( $task->status == 'completed')
              <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-1 rounded  dark:text-green-400 border border-green-400">{{$task->status}}</span>
              @endif

              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <a href="{{route('admin.tasks.edit', $task->id)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                <br>
                <form action="{{route('admin.tasks.destroy', $task->id)}}" method="POST">
                @method('DELETE')
                 @csrf
                <button type="submit" class="text-red-500 hover:text-red-800 py-1">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>


      </div>
      <div class="my-4 p-1">
      {{$tasks->links()}}

      </div>

    </div>
  </div>
</div>
</div>

@endsection
