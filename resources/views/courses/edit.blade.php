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
              <form method="POST" action="{{route('courses.update',['id' => $course->id])}}">
                {{-- courses.edit', ['id' => $course->id --}}
                @csrf
                {{-- <input type="hidden" name="course_id" value="{{$course->id}}"> --}}
                <div class="form-group">
                  <label for="title" class="bmd-label-floating">Course title</label>
                  <input type="text" value="{{$course->title}}" name="title" class="form-control" id="title">
                </div>
                <div class="form-group">
                  <label for="short_description" class="bmd-label-floating">Short description</label>
                  <input type="text" value="{{$course->short_description}}" name="short_description" class="form-control" id="short_description">
                </div>
                <div class="form-group">
                  <label for="price" class="bmd-label-floating">Price</label>
                  <input type="number" value="{{$course->price}}" name="price" class="form-control" id="price">
                </div>
                <div class="form-group">
                  <label for="image_url" class="bmd-label-floating">Image Url</label>
                  <input type="text" value="{{$course->image_url}}" name="image_url" class="form-control" id="image_url">
                </div>

                <div class="card-footer ">
                  <button type="submit" class="btn btn-fill btn-gray">Update course</button>
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
              <form class="form-horizontal">
                <div class="row">
                  <label class="col-md-3 col-form-label">Email</label>
                  <div class="col-md-9">
                    <div class="form-group has-default">
                      <input type="email" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-md-3 col-form-label">Password</label>
                  <div class="col-md-9">
                    <div class="form-group">
                      <input type="password" class="form-control">
                    </div>
                  </div>
                </div>
                
              </form>
            </div>
            <div class="card-footer ">
              <div class="row">
                <div class="col-md-9">
                  <button type="submit" class="btn btn-fill btn-gray">Add Module</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
@endsection