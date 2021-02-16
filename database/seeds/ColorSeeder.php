<?php

use Illuminate\Database\Seeder;
use App\Color;


class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = ['green', 'orange', 'pink', 'red', 'blue'];

        foreach ($colors as $color) {
          $newColor = new Color();
          $newColor -> name = $color;
          $newColor -> save();
        }
      }
}
