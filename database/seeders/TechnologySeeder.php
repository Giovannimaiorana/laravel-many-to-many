<?php

namespace Database\Seeders;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{

    public function run()
    {
        $technologies = ['Php','Laravel','Js','Vue','React','Css','Html'];
        foreach ($technologies as $technology){
            $newTechnology = new Technology();
            $newTechnology->name = $technology;
            $newTechnology->slug = Str::slug($technology, '-');
            $newTechnology->save();

        }
    }
}
