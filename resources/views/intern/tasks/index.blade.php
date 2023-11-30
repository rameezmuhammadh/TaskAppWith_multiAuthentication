@extends('intern.layout.internlayout')
@section('content')


<div class="my-2">
  
<div class="lg:flex lg:items-center lg:justify-between">
  <div class="min-w-0 flex-1">
    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight px-4 py-5">Task Lists</h2>
    <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">
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
              <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">
                ID
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">
                Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">
                Description
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">
                Assign Date
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">
                Deadline
              </th>              
              <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">
                Status
              </th>              
              <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">
                Action
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @foreach($tasks as $key =>$task )
            @if ($task->user_id === Auth::id())
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                {{$key}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                {{$task->name}}
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
                <a href="{{route('intern.tasks.edit', $task->id)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                <br>
              </td>
            </tr>
            @endif
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
