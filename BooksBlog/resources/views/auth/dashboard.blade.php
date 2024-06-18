@extends('layouts.basiclayout')

@section('title')
DashBoard
@endsection


@section('body')
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h2 class="login-heading mb-4"> Dashboard!</h2>
              <h3 class="login-heading mb-4"> Number of Books {{$count}}!</h3> 
        <div class="flex-grow p-4 overflow-auto bg-white-800">
		    <div class="grid grid-cols-4 gap-6 ">
        @foreach ($books as $book) 
				<div class="h-24 col-span-1 bg-gray-500 right-0"><h2>{{$book->auther}}</h2>
        <!-- <a href="delete_book/{{$book->id}}">ddddd</a> -->
        <form action="{{route('book.destroy',$book->id)}}" method="post">
          @method('DELETE')
          @csrf
          <button type="submit" class="relative bottom-0 bg-red-800 ">Delete</button>
        </form>
        </div>
        @endforeach
			  </div>
		    </div>            
              
            </div>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection