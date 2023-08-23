@extends('dashboard.main')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-icon card-header-gray">
                                {{-- <a style="color: white" href="{{route('courses.create')}}">
                    <div class="card-icon">
                      <i class="material-icons">add</i>
                    </div>
                </a> --}}
                                <h4 class="card-title ">Enrolled Students</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>ID</th>
                                            <th> Name</th>
                                            <th> Email </th>
                                            <th>Courses enrolled</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($students as $index => $student)
                                                <tr>
                                                    {{-- $roles as $index => $role --}}

                                                    <td>{{ ++$index }}</td>
                                                    <td> {{ $student->name }}</td>
                                                    <td> {{ $student->email }}</td>
                                                    <td>
                                                        {{ $studentCourses->where('user_id', '=', $student->id)->first()->course->title }}

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
