@extends('layouts.app')

@section('maincontent')
    <h1 class="text-3xl text-gray-500 p-4 font-bold">
        {{ $course->title }}
    </h1>


    <h1 class="text-3xl text-gray-500 p-4 font-bold">
        {{ $module->title }}
    </h1>

    <div class="container mt-5 mx-auto px-2">
        <!-- Flex on med screens and up -->
        <div class="grid grid-cols-3 gap-1">
            {{-- start first course --}}

            <div class="flex-1 text-gray-700 text-center bg-gray-400 px-5 py-5 m-2 rounded">

                <div class="bg-gray-100 shadow-md hover:scale-105 hover:shadow-xl duration-500">
                    <a href="#">
                        <img src="{{ $module->image_url }}" alt="Product image" class="object-cover" />
                    </a>
                    {{-- <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 uppercase text-xs">Networking</span>
                    <p class="text-lg  text-black ">
                        Introduction to networking
                    </p>
                    <div class="flex items-center">

                        <p class="text-lg font-semibold text-black cursor-auto my-3">Kes. 150</p>

                        <div class="ml-auto text-black-200">
                            <a href="#">

                                Continue course
                            </a>
                        </div>
                    </div>
                </div> --}}
                </div>

            </div>


            {{-- end first course  --}}


            {{-- <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Password requirements:</h2> --}}
            <div>
                <h2 class="text-2xl text-gray-500 p-4">
                    Module Content
                </h2>


                <p class="ml-5" style="color: wheat">{{ $module->text_content }}</p>

                <h2 class="text-2xl text-gray-500 p-4">
                    Follow this link to learn more
                </h2>

                <p><a class="ml-5" style="color: wheat" href="{{ $module->link_content }}">{{ $module->link_content }}</a>
                </p>



                {{-- <ol class="space-y-1 max-w-md list-decimal list-inside text-gray-500 dark:text-gray-400">

                <li>
                    module content
                </li>
            </ol> --}}
            </div>


        </div>
    </div>
@endsection
