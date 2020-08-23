@extends('layouts.main')

@section('title', 'Page About')

@section('container')
      <div class="row">
        <div class="col-12">
          <h1 class="mt-2">Hello, {{$name}}</h1>
        </div>
      </div>
@endsection
