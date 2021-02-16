<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ghost;

class MainController extends Controller
{

    public function index(){
      return view('pages.index');
    }

    // API
    public function getGhosts() {
      $ghosts = Ghost::all();

      return response() -> json([
        'ghosts' => $ghosts
      ]);
    }
}
