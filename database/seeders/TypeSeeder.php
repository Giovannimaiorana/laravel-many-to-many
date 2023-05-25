<?php

namespace Database\Seeders;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;



class TypeSeeder extends Seeder
{
    public function run()
    {
        $types = ['Privato','Aziendale','Cliente Privato','Test'];
        foreach ($types as $type){
            $newType = new Type();
            $newType->name = $type;
            $newType->slug = Str::slug($type,'-');
            $newType->save();
        }
    }
}
