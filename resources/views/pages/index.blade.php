@extends('layouts.mainLayout')

@section('content')
  <h1 class="title">Crud dei fantasmini bellini con Vue</h1>
  <div id="app">
    @foreach ($ghosts as $ghost)
      <fantasmino-component
        :color="'{{ $ghost -> color -> name }}'"
      ></fantasmino-component>
    @endforeach
  </div>
@endsection
