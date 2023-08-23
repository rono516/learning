@extends('dashboard.main')

@section('content')
    <div class="content">
        <div class="container-fluid flex">
            <div class="row">
                <div class="col-md-6">
                    <div class="card ">
                        <div class="card-header card-header-rose card-header-icon">
                        </div>
                        <div class="card-body ">
                            <form method="POST" action="{{ url('/courses/store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="title" class="bmd-label-floating">Course title</label>
                                    <input type="text" name="title" class="form-control" id="title">
                                </div>
                                <div class="form-group">
                                    <label for="short_description" class="bmd-label-floating">Short description</label>
                                    <input type="text" name="short_description" class="form-control"
                                        id="short_description">
                                </div>
                                <div class="form-group">
                                    <label for="price" class="bmd-label-floating">Price</label>
                                    <input type="number" name="price" class="form-control" id="price">
                                </div>
                                <div class="form-group">
                                    <label for="image_url" class="bmd-label-floating">Image Url</label>
                                    <input type="text" name="image_url" class="form-control" id="image_url">
                                </div>

                                <div class="card-footer ">
                                    <button type="submit" class="btn btn-fill btn-gray">Add Course</button>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card ">
                        <div class="card-header card-header-rose card-header-icon">
                        </div>
                        <div class="card-body ">
                            <form method="POST" action="{{ url('/modules/store') }}">
                                @csrf

                                {{-- start  --}}

                                <div class="form-group">
                                    <select class="form-select" name="course_id">
                                        <option value="">Select a Course</option>
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->title }}</option>
                                        @endforeach


                                    </select>
                                </div>

                                {{-- end  --}}
                                <div class="form-group">
                                    <label for="module_title" class="bmd-label-floating">Module title</label>
                                    <input type="text" name="module_title" class="form-control" id="module_title">
                                </div>
                                <div class="form-group">
                                    <label for="text_content" class="bmd-label-floating">Text Content</label>
                                    <input type="text_content" name="text_content" class="form-control" id="text_content">
                                </div>

                                <div class="form-group">
                                    <label for="link_content" class="bmd-label-floating">Link Content</label>
                                    <input type="link_content" name="link_content" class="form-control" id="link_content">
                                </div>

                                <div class="form-group">
                                    <label for="module_image_url" class="bmd-label-floating">Image Url</label>
                                    <input type="text" name="module_image_url" class="form-control"
                                        id="module_image_url">
                                </div>

                                <div class="card-footer ">
                                    <button type="submit" class="btn btn-fill btn-gray">Add module</button>
                                </div>

                            </form>
                        </div>
                        {{-- <div class="card-footer ">
                            <div class="row">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-fill btn-gray">Add Module</button>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
