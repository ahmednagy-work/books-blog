@extends('layouts.basiclayout')

@section('title')
Upload Book
@endsection


@section('body')

<form action="{{route('store_book')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
    {{ csrf_field() }}
    <div class="mb-5">
        <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
            Book Title
        </label>
    <input type="text" name="title" placeholder="Enter title" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"><br>
    @if ($errors->has('title'))
    <span class="error">{{ $errors->first('title') }}</span>
    @endif
    </div>
    <div class="mb-5">
        <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
            Book Auther
        </label>
    <input type="text" name="auther" placeholder="Enter auther" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"><br>
    @if ($errors->has('auther'))
    <span class="error">{{ $errors->first('auther') }}</span>
    @endif
    </div>
    <div class="mb-5">
        <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
            Book Description
        </label>
    <input type="text" name="description" placeholder="Enter description" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
    @if ($errors->has('description'))
    <span class="error">{{ $errors->first('description') }}</span>
    @endif
    </div>
    <div class="mb-5">
        <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
            Book Publish year
        </label>
    <input type="text" name="publish year" placeholder="Enter publish year" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"><br>
    @if ($errors->has('publish_year'))
    <span class="error">{{ $errors->first('publish_year') }}</span>
    @endif
    </div>

    {{-- <input type="file" name="photo">
    <input type="file" name="file"> --}}
    <div class="mb-5">
    <label for="uploadFile1"
        class="bg-white text-gray-500 font-semibold text-base rounded max-w-md h-52 flex flex-col items-center justify-center cursor-pointer border-2 border-gray-300 border-dashed mx-auto font-[sans-serif]">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-11 mb-2 fill-gray-500" viewBox="0 0 32 32">
          <path
            d="M23.75 11.044a7.99 7.99 0 0 0-15.5-.009A8 8 0 0 0 9 27h3a1 1 0 0 0 0-2H9a6 6 0 0 1-.035-12 1.038 1.038 0 0 0 1.1-.854 5.991 5.991 0 0 1 11.862 0A1.08 1.08 0 0 0 23 13a6 6 0 0 1 0 12h-3a1 1 0 0 0 0 2h3a8 8 0 0 0 .75-15.956z"
            data-original="#000000" />
          <path
            d="M20.293 19.707a1 1 0 0 0 1.414-1.414l-5-5a1 1 0 0 0-1.414 0l-5 5a1 1 0 0 0 1.414 1.414L15 16.414V29a1 1 0 0 0 2 0V16.414z"
            data-original="#000000" />
        </svg>
        Upload file

        <input type="file" name="photo" />
        <p class="text-xs font-medium text-gray-400 mt-2">PNG, JPG SVG, WEBP, and GIF are Allowed.</p>
      </label>
    </div>
    <div class="mb-8">
    <label for="uploadFile1"
        class="bg-white text-gray-500 font-semibold text-base rounded max-w-md h-52 flex flex-col items-center justify-center cursor-pointer border-2 border-gray-300 border-dashed mx-auto font-[sans-serif]">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-11 mb-2 fill-gray-500" viewBox="0 0 32 32">
          <path
            d="M23.75 11.044a7.99 7.99 0 0 0-15.5-.009A8 8 0 0 0 9 27h3a1 1 0 0 0 0-2H9a6 6 0 0 1-.035-12 1.038 1.038 0 0 0 1.1-.854 5.991 5.991 0 0 1 11.862 0A1.08 1.08 0 0 0 23 13a6 6 0 0 1 0 12h-3a1 1 0 0 0 0 2h3a8 8 0 0 0 .75-15.956z"
            data-original="#000000" />
          <path
            d="M20.293 19.707a1 1 0 0 0 1.414-1.414l-5-5a1 1 0 0 0-1.414 0l-5 5a1 1 0 0 0 1.414 1.414L15 16.414V29a1 1 0 0 0 2 0V16.414z"
            data-original="#000000" />
        </svg>
        Upload file

        <input type="file" name="file" />
        <p class="text-xs font-medium text-gray-400 mt-2">PNG, JPG SVG, WEBP, and GIF are Allowed.</p>
      </label>
    </div>
    {{-- <input type="text" name="downloads" placeholder="Enter downloads"> --}}

    <div class="mb-8">
        <button type="submit"
          class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none"
        >
          Submit
        </button>
    </div>
    </div>

</form>



@endsection
{{--

<form  action="{{route('store_book')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="flex items-center justify-center p-12">


        <div class="mx-auto w-full max-w-[550px]">
            <h1>Upload A book</h1><br>
          <form action="https://formbold.com/s/FORM_ID" method="POST">
            <div class="mb-5">
              <label
                for="name"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                Book Title
              </label>
              <input
                type="text"
                name="title"
                id="title"
                placeholder="book title"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              />
              @if ($errors->has('title'))
                <span class="error">{{ $errors->first('title') }}</span>
              @endif
            </div>
            <div class="mb-6">
                <label
                  for="auther"
                  class="mb-3 block text-base font-medium text-[#07074D]"
                >
                  Book Auther
                </label>
                <input
                  type="text"
                  name="auther"
                  id="auther"
                  placeholder="book auther"
                  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                />
                @if ($errors->has('auther'))
                  <span class="error">{{ $errors->first('auther') }}</span>
                @endif
              </div>



            <div class="mb-5">
              <label
                for="message"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                Description
              </label>
              <textarea
                rows="4"
                name="description"
                id="description"
                placeholder="Type the description"
                class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              ></textarea>
              @if ($errors->has('description'))
                  <span class="error">{{ $errors->first('description') }}</span>
                @endif
            </div>
            <div class="mb-5">
                <label
                  for="email"
                  class="mb-3 block text-base font-medium text-[#07074D]"
                >
                  Publish Year
                </label>
                <input
                  type="publish_year"
                  name="publish_year"
                  id="publish_year"
                  placeholder="publish year"
                  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                />
                @if ($errors->has('publish_year'))
                  <span class="error">{{ $errors->first('publish_year') }}</span>
                @endif
              </div>
              <div class="mb-7">
                <label for="uploadFile1"
                    class="bg-white text-gray-500 font-semibold text-base rounded max-w-md h-52 flex flex-col items-center justify-center cursor-pointer border-2 border-gray-300 border-dashed mx-auto font-[sans-serif]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-11 mb-2 fill-gray-500" viewBox="0 0 32 32">
                    <path
                    d="M23.75 11.044a7.99 7.99 0 0 0-15.5-.009A8 8 0 0 0 9 27h3a1 1 0 0 0 0-2H9a6 6 0 0 1-.035-12 1.038 1.038 0 0 0 1.1-.854 5.991 5.991 0 0 1 11.862 0A1.08 1.08 0 0 0 23 13a6 6 0 0 1 0 12h-3a1 1 0 0 0 0 2h3a8 8 0 0 0 .75-15.956z"
                     data-original="#000000" />
                    <path
                    d="M20.293 19.707a1 1 0 0 0 1.414-1.414l-5-5a1 1 0 0 0-1.414 0l-5 5a1 1 0 0 0 1.414 1.414L15 16.414V29a1 1 0 0 0 2 0V16.414z"
                    data-original="#000000" />
                    </svg>
                    Upload book avatar

                    <input type="file" name="photo" />
                    <p class="text-xs font-medium text-gray-400 mt-2">PNG, JPG SVG, WEBP, and GIF are Allowed.</p>
                </label>
                <label for="uploadFile1"
                    class="bg-white text-gray-500 font-semibold text-base rounded max-w-md h-52 flex flex-col items-center justify-center cursor-pointer border-2 border-gray-300 border-dashed mx-auto font-[sans-serif]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-11 mb-2 fill-gray-500" viewBox="0 0 32 32">
                    <path
                    d="M23.75 11.044a7.99 7.99 0 0 0-15.5-.009A8 8 0 0 0 9 27h3a1 1 0 0 0 0-2H9a6 6 0 0 1-.035-12 1.038 1.038 0 0 0 1.1-.854 5.991 5.991 0 0 1 11.862 0A1.08 1.08 0 0 0 23 13a6 6 0 0 1 0 12h-3a1 1 0 0 0 0 2h3a8 8 0 0 0 .75-15.956z"
                    data-original="#000000" />
                    <path
                    d="M20.293 19.707a1 1 0 0 0 1.414-1.414l-5-5a1 1 0 0 0-1.414 0l-5 5a1 1 0 0 0 1.414 1.414L15 16.414V29a1 1 0 0 0 2 0V16.414z"
                    data-original="#000000" />
                    </svg>
                    Upload book file

                    <input type="file" name="photo" />
                    <p class="text-xs font-medium text-gray-400 mt-2">PNG, JPG SVG, WEBP, and GIF are Allowed.</p>
            </label>


              </div>
            <div>
              <button type="submit"
                class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none"
              >
                Submit
              </button>
            </div>
          </form>
        </div>
      </div>
    </form> --}}
