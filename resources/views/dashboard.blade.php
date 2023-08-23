@extends('dashboard.main')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-icon card-header-gray">
                                <a style="color: white" href="{{ route('courses.create') }}">
                                    <div class="card-icon">
                                        <i class="material-icons">add</i>
                                    </div>
                                </a>
                                <h4 class="card-title ">Available Courses</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>ID</th>
                                            <th> Title</th>
                                            <th> Short description </th>
                                            <th> Price </th>
                                            <th> Lecturer </th>
                                            <th>Actions</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($courses as $index => $course)
                                                <tr>
                                                    {{-- $roles as $index => $role --}}

                                                    <td>{{ ++$index }}</td>
                                                    <td> {{ $course->title }}</td>
                                                    <td> {{ $course->short_description }}</td>
                                                    <td> {{ $course->price }} </td>
                                                    <td> {{ App\Models\User::where('id', '=', $course->user_id)->firstOrFail()->name }}
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="{{ route('courses.edit', ['id' => $course->id]) }}"
                                                            class="text-decoration-none">Edit</a>
                                                        -
                                                        {{-- <a href="{{ route('courses.delete', ['id' => $course->id]) }}" class="text-danger text-decoration-none">Delete</a> --}}
                                                        <form action="{{ route('courses.delete') }}"
                                                            style="display: inline;" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="course_id"
                                                                value="{{ $course->id }}">
                                                            <button class="btn btn-danger btn-sm">Delete</button>
                                                        </form>


                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-icon card-header-gray">
                                <a style="color: white" href="{{ route('courses.create') }}">
                                    <div class="card-icon">
                                        <i class="material-icons">add</i>
                                    </div>
                                </a>
                                <h4 class="card-title ">Available Modules</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th> ID </th>
                                            <th> Title</th>
                                            <th> Course </th>
                                            <th>Actions</th>

                                        </thead>
                                        <tbody>
                                            @foreach ($modules as $index => $module)
                                                <tr>
                                                    <td> {{ ++$index }} </td>
                                                    <td> {{ $module->title }}</td>
                                                    <td> {{ $module->course->title }} </td>
                                                    <td class="text-end">
                                                        <a href="{{ route('courses.edit', ['id' => $course->id]) }}"
                                                            class="text-decoration-none">Edit</a>
                                                        -
                                                        {{-- <a href="{{ route('courses.delete', ['id' => $course->id]) }}" class="text-danger text-decoration-none">Delete</a> --}}
                                                        <form action="{{ route('module.delete') }}"
                                                            style="display: inline;" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="module_id"
                                                                value="{{ $module->id }}">
                                                            <button class="btn btn-danger btn-sm">Delete</button>
                                                        </form>


                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
