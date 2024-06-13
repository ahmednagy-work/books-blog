@extends('layouts.basiclayout')

@section('title')
Book Card
@endsection


@section('body')
<div id="container" class="p-20 w-auto flex px-24 justify-center relative">

    <div id="container" class="p-20 sm:p-16 md:p-20 lg:p-24 xl:p-20 w-auto flex flex-col md:flex-row px-4 sm:px-8 md:px-24 lg:px-24 xl:px-24 relative">
        <div class="mr-10">
           <img
             class="rounded-lg min-w-[100px] w-full h-auto md:w-auto md:h-auto"
             src="{{asset('storage/'.$book->avatar_path)}}"
             alt="image of the book"
           />
        </div>
        <div class="w-full sm:w-[70%] md:w-[60%] lg:w-[50%]">
    <h1 class="text-black font-bold text-3xl mt-6 mb-8">
        {{$book->title}}
    </h1>

    <h4 class="text-black font-bold text-2xl mt-6 mb-8">
        {{$book->auther}}
    </h4>

    <p class="text-black w-full sm:w-[35rem] md:w-[30rem] lg:w-[25rem] mb-10">
        {{$book->description}}
    </p>


    <p>
        Published At
    </p>

    <p class="text-black w-full sm:w-[35rem] md:w-[30rem] lg:w-[25rem] mb-10">
        {{$book->publish_year}}
    </p>

    <div id="social" class="flex flex-wrap justify-start items-center gap-4">
      <a  href="{{ route('upload_book') }}" rel="noopener"  class="bg-gray-800 rounded-lg p-5 w-64 flex items-center gap-2 text-white">
          <span>Upload Your Own Book</span>
      </a>

      <a rel="noopener"  href="{{ route('register-form') }}" class="bg-gray-800 rounded-lg p-5 w-64 flex items-center gap-2 text-white">
          <span>Register Now</span>
      </a>
  </div>



  </div>
</div>

@endsection
