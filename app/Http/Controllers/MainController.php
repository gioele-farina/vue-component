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
      $ghost = Ghost::findOrFail($id);
      $color = Color::findOrFail($request -> newcolor);
      $ghost -> color() -> dissociate();
      $ghost -> color() -> associate($color);
      $ghost -> save();

      return response() -> json([
        'new_color' => $color
      ]);
    }
}
