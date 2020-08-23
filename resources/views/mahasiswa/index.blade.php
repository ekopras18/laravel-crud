@extends('layouts.main')

@section('title', 'Page Mahasiswa')

@section('container')
      <div class="row">
        <div class="col-12">
          <h1 class="mt-2">Daftar Mahasiswa</h1>


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($students as $student)
    <tr>
      <th scope="row">{{ $loop -> iteration }}</th>
      <td>{{$student->name}}</td>
      <td>{{$student->nim}}</td>
      <td>{{$student->email}}</td>
      <td>{{$student->prodi}}</td>
      <td>
        <a href="#" class="badge badge-success">edit</a>
        <a href="#" class="badge badge-danger">delete</a>
      </td>
    </tr>
  @endforeach

  </tbody>
</table>
        </div>
      </div>
@endsection
