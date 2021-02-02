<?php

namespace Database\Seeders;

use App\Models\Level;
use App\Models\Location;
use App\Models\Perfil;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        Level::factory(10)->create();
        User::factory(10)->create();
        Perfil::factory(10)->create();
        Location::factory(10)->create();


        

//         \App\Models\User::factory()->count(5)->create()->each(function($user){

//             $perfil= $user->perfil()->save(\App\Models\Perfil::factory()->create()->make());

//            $perfil->location()->save(factory\App\Models\Location::factory()->create()->make());

//            $user->group()->attach($this->array(rand(1,3)));


//    });
   
        
    }

    // public function array($max){
    //     $value=[];
    //     for ($i=1 ; $i < $max ; $i+1) { 
    //         $value[]=$i;
    //         return $value;
    //     }
       
    // }

    
    
}

