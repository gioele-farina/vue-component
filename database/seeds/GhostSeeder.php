<?php

use Illuminate\Database\Seeder;
use App\Color;
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

      for ($i=0; $i < 10; $i++) {
        $newGhost = new Ghost();
        $color = Color::inRandomOrder() -> first();
        $newGhost -> color() -> associate($color);
        $newGhost -> save();
      }

    }
}
