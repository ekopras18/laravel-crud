@extends('layouts.main')

@section('title', 'Show Student')

@section('container')
      <div class="row">
        <div class="col-6">
          <h1 class="my-2">Student Detail</h1>
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$student->name}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$student->nim}}</h6>
              <p class="card-text">{{$student->prodi}} <br> {{$student->email}}</p>

              <a href="{{$student->id}}/edit" class="btn btn-info btn-xs" name="button">Edit</a>

              <form action="/students/{{$student->id}}" method="post" class="d-inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-xs" name="button">Delete</button>
              </form>
              <a href="/students" class="card-link">Back</a>
            </div>
          </div>

        </div>
      </div>
@endsection
