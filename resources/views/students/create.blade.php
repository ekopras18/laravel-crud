@extends('layouts.main')

@section('title', 'Form Student')

@section('container')
      <div class="row">
        <div class="col-6">
          <h1 class="mt-2">Student Add Data</h1>
            <form action="/students" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Input Name Student" value="{{ old('name') }}">
              </div>
              <div class="form-group">
                <label for="nim">Nim</label>
                <input type="text" class="form-control" name="nim" placeholder="Input Nim Student" value="{{ old('nim') }}">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Input Email Student" value="{{ old('email') }}">
              </div>
              <div class="form-group">
                <label for="prodi">Prodi</label>
                <input type="text" class="form-control" name="prodi" placeholder="Input Prodi" value="{{ old('prodi') }}">
              </div>
             <button type="submit" class="btn btn-primary">Submit</button>
             <button class="btn btn-normal"> <a href="/students">Cancle</a></button>
            </form>

        </div>
      </div>
@endsection
