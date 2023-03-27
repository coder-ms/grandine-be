<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
//use App\Functions\Helpers;
use App\Models\Practice;

class PracticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $practices = config('practices.practices');

        foreach ($practices as $practice) { //$key => 

            $new_practice = new Practice();
            $new_practice->plate = $practice['plate'];
            // $new_practice->slug = Helpers::generateSlug($practice->);
            $new_practice->slug = Str::slug($new_practice->plate, '-');
            $new_practice->model = $practice['model'];
            $new_practice->color = $practice['color'];
            $new_practice->immatricolation = $practice['immatricolation'];
            $new_practice->cover = $practice['cover'];
            $new_practice->save();
        }
    }
}