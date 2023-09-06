@extends('layouts.app')

@section('maincontent')
    <h1 class=" ml-7 text-3xl text-gray-500 p-4 font-bold">
        My Courses
    </h1>

    <div class="container mt-5 mx-auto px-2">
        <!-- Flex on med screens and up -->
        <div class="grid grid-cols-3 gap-1">
            {{-- start first course --}}
            @foreach ($coursesStudent as $cs)
                <div class="flex-1 text-gray-700 text-center bg-gray-400 px-5 py-5 m-2 rounded">

                    <div class="bg-gray-100 shadow-md hover:scale-105 hover:shadow-xl duration-500">
                        <a href="#">
                            <img src="{{ App\Models\Course::where('id', '=', $cs->course_id)->first()->image_url }}"
                                alt="Product image" class="object-cover" />
                        </a>
                        <div class="px-4 py-3 w-72">
                            <span
                                class="text-gray-400 uppercase text-xs">{{ App\Models\Course::where('id', '=', $cs->course_id)->first()->title }}</span>
                            <p class="text-lg  text-black ">
                                <a
                                    href="{{ url('/course_detail', $cs->course_id) }}">{{ App\Models\Course::where('id', '=', $cs->course_id)->first()->short_description }}</a>
                            </p>
                            <div class="flex items-center">
                                @if (App\Models\Course::where('id', '=', $cs->course_id)->first()->price > 0)
                                    <p class="text-lg font-semibold text-black cursor-auto my-3">Price: Ksh.
                                        {{ App\Models\Course::where('id', '=', $cs->course_id)->first()->price }}
                                    </p>
                                @else
                                    <p class="text-lg font-semibold text-black cursor-auto my-3">Free Course</p>
                                @endif

                                <div class="ml-auto text-black-200">
                                    @if (App\Models\Course::where('id', '=', $cs->course_id)->first()->modules->count() > 0)
                                        <a href="#">

                                            Progress : {{ $done_modules->count() }}
                                            /{{ App\Models\Course::where('id', '=', $cs->course_id)->first()->modules->count() }}
                                        </a>
                                    @else
                                        <a href="#">

                                            No modules found
                                        </a>
                                    @endif

                                </div>



                                {{-- <div class="ml-auto text-black-200">
                                    <a href="{{ url('/course_detail', $cs->course_id) }}">

                                        Continue course
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach

            {{-- end courses  --}}

        </div>
    </div>
@endsection
