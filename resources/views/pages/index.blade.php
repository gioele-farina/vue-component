@extends('layouts.mainLayout')

@section('content')
  <h1 class="title">Crud dei fantasmini bellini con Vue</h1>
  <div id="app">
    @foreach ($ghosts as $ghost)
      <fantasmino-component
        {{-- :ghost_color="'{{ $ghost -> color -> name }}'" --}}
        :ghost_color={{ $ghost -> color}}
        :all_colors={{$colors}}
        :ghost={{$ghost}}
      ></fantasmino-component>
    @endforeach
  </div>
@endsection
