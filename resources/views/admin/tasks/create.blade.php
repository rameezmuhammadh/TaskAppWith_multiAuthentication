@extends('admin.layout.adminlayout')
@section('content')

<div class="w-full md:w-96 md:max-w-full mx-auto m-4">
  <div class="p-6 border border-gray-300 sm:rounded-md">
    <h3 class="text-3xl text-center font-bold py-2 text-gray-900"> Add New Task</h3>
    <form method="POST" action="{{route('admin.tasks.store')}}">
      @csrf


      <input name="assignment_date" type="hidden" id="date" value="{{ now()->toDateString() }}">



        <!-- task title -->
      <label class="block mb-2 text-sm font-medium text-gray-900">
        <span class="text-gray-700">Task Name</span>
        <input
          type="text"  name="name"  class="block
            w-full
            mt-1
            border-gray-300
            rounded-md
            shadow-sm
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
            p-2"  placeholder="New Task"/>
      </label>


      <!-- user select -->
      <label class="block mb-6">
        <span class="text-gray-700">Assign To</span>
      <select 
          name="user_id"
          class="
            block
            w-full
            mt-1
            border-gray-300
            rounded-md
            shadow-sm
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
            p-2
          "
        >

        @forelse ($users as $user)
        @if($user->role =='intern')
          <option value="{{$user->id}}">{{$user->name}}</option>
        @endif
          @empty
          <option value="">Employee list not found</option>
        @endforelse

        </select>
        </label>
  
      <!-- task title -->

      <label class="block mb-6">
        <span class="text-gray-700">Deadline</span>
        <input type="date" name="deadline"   class="block
            w-full
            mt-1
            border-gray-300
            rounded-md
            shadow-sm
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
            p-2" required />
      </label>



        <!-- task title -->


      

      <label class="block mb-6">
        <span class="text-gray-700">Description</span>
        <textarea name="description"  class="block
            w-full
            mt-1
            border-gray-300
            rounded-md
            shadow-sm
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
            p-2" rows="3" placeholder="Description" ></textarea>
      </label>

      <div class="mb-6">
        <button type="submit" class="h-10 px-5 text-indigo-100 bg-indigo-700 rounded-lg transition-colors duration-150 focus:shadow-outline hover:bg-indigo-800"> Add Task </button>
      </div>
      <div>
       
        </div>
      </div>
    </form>
  </div>
</div>

@endsection
