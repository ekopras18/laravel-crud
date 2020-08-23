@extends('layouts.main')

@section('title', 'Form Edit Student')

@section('container')
      <div class="row">
        <div class="col-6">
          <h1 class="mt-2">Student Edit Data</h1>
            <form action="/students/{{$student->id}}" method="POST">
              {{ method_field('PATCH') }}
              {{ csrf_field() }}
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Input Name Student" required value="{{$student->name}}">
              </div>
              <div class="form-group">
                <label for="nim">Nim</label>
                <input type="text" class="form-control" name="nim" placeholder="Input Nim Student" value="{{$student->nim}}">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Input Email Student" value="{{$student->email}}">
              </div>
              <div class="form-group">
                <label for="prodi">Prodi</label>
                <input type="text" class="form-control" name="prodi" placeholder="Input Prodi" value="{{$student->prodi}}">
              </div>
             <button type="submit" class="btn btn-primary">Edit Data</button>
             <button class="btn btn-normal"> <a href="/students/{{$student->id}}">Cancle</a></button>
            </form>

        </div>
      </div>
@endsection
