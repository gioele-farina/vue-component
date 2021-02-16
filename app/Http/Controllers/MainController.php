<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ghost;

class MainController extends Controller
{

    public function index(){
      $ghosts = Ghost::all();

      return view('pages.index', compact('ghosts'));
    }

    // API
    public function getGhosts() {
      $ghosts = Ghost::all();

      return response() -> json([
        'ghosts' => $ghosts
      ]);
    }
}
