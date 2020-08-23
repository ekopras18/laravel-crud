@extends('layouts.main')

@section('title', 'Page Mahasiswa')

@section('container')
      <div class="row">
        <div class="col-6">
          <h1 class="my-2">Students List</h1>
          <a href="/students/create" class="btn btn-primary my-2"> Add Data Students</a>
          @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
          @endif
          <ul class="list-group mt-2">
            @foreach ($students as $student)
            <li class="list-group-item d-flex justify-content-between align-items-center">
              {{$student->name}}
              <a href="/students/{{$student->id}}" class="badge badge-info">Detail</a>
            </li>
            @endforeach
          </ul>

        </div>
      </div>
@endsection
