<?php

use Illuminate\Database\Seeder;
use App\Ghost;

class GhostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = ['yellow', 'pink', 'red', 'lightblue'];

        for ($i=0; $i < 10; $i++) {
          $newGhost = new Ghost();
          $newGhost -> color = $colors[rand(0,3)];
          $newGhost -> save();
        }
    }
}
