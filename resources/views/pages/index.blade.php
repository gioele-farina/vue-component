@extends('layouts.mainLayout')

@section('content')
  <h1 class="title">Crud dei fantasmini con Vue</h1>
  <h2 class="sub-title">No reload della pagina</h2>
  <div id="app">
    <controller-fantasmini
      :fantasmini={{$ghosts}}
      :all_colors={{$colors}}
    ></controller-fantasmini>
  </div>
@endsection
