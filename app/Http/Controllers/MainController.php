<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ghost;
use App\Color;

class MainController extends Controller
{

    public function index(){
      $ghosts = Ghost::all();
      $colors = Color::all();

      return view('pages.index', compact('ghosts', 'colors'));
    }

    // API
    public function getGhosts() {
      $ghosts = Ghost::all();

      return response() -> json([
        'ghosts' => $ghosts
      ]);
    }

    public function editGhost(Request $request, $id){
      $dati = $request -> all();
      return response() -> json([
        'id' => $id,
        'request' => $dati
      ]);
    }
}
