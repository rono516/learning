<nav class="flex items-center justify-between flex-wrap bg-gray-800 p-6">
    <div class="flex items-center flex-shrink-0 text-gray-100 mr-16">
        <span class="font-bold text-xl"><a href="{{ url('/') }}">learning management system</a></span>
    </div>

    <div class="w-full block flex-grow sm:flex sm:items-center sm:w-auto">
        <div class="text-sm sm:flex-grow">
            <a href="{{ url('/all_courses') }}"
                class="block mt-4 sm:inline-block sm:mt-0 text-teal-200 hover:text-gray-100 mr-4">
                All Courses
            </a>
            <a href="{{ url('/my_courses') }}"
                class="block mt-4 sm:inline-block sm:mt-0 text-teal-200 hover:text-gray-100 mr-4">
                My Courses
            </a>
            <a href="#" class="block mt-4 sm:inline-block sm:mt-0 text-teal-200 hover:text-gray-100">
                Contact
            </a>
            <a href="#" class="ml-5 block mt-4 sm:inline-block sm:mt-0 text-teal-200 hover:text-gray-100">
                About
            </a>
        </div>

        @auth
            @if (Auth()->user()->user_group == '1' || Auth()->user()->user_group == '2')
                <div class="mr-5">
                    <a href="{{ url('/dashboard') }}"
                        class="inline-block text-sm px-4 py-2 leading-none border rounded text-gray-100 border-gray-100 hover:border-transparent hover:text-gray-500  mt-4 md:mt-0">Access
                        DashBoard</a>
                </div>
            @endif
            <div class="mr-5">
                <a href="#"
                    class="inline-block text-sm px-4 py-2 leading-none border rounded text-gray-100 border-gray-100 hover:border-transparent hover:text-gray-500 mt-4 md:mt-0">{{ Auth()->user()->name }}</a>
            </div>
            <div class="mr-5">
                <a href="{{ url('logout') }}"
                    class="inline-block text-sm px-4 py-2 leading-none border rounded text-gray-100 border-gray-100 hover:border-transparent hover:text-gray-500 mt-4 md:mt-0">Logout</a>
            </div>
        @endauth
        @guest
            <div class="mr-5">
                <a href="{{ url('register') }}"
                    class="inline-block text-sm px-4 py-2 leading-none border rounded text-gray-100 border-gray-100 hover:border-transparent hover:text-blue-500  mt-4 md:mt-0">Register</a>
            </div>
            <div class="mr-5">
                <a href="{{ url('login') }}"
                    class="inline-block text-sm px-4 py-2 leading-none border rounded text-gray-100 border-gray-100 hover:border-transparent hover:text-blue-500  mt-4 md:mt-0">Login</a>
            </div>

        @endguest

    </div>
</nav>
