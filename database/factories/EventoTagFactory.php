<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Blogmodels\EventoTag::class, function (Faker $faker) {
    
    $title = $faker->sentence(4);

    return [
        
        'evento_id' 	=> rand(1,20),
        'tag_id' 	=> rand(1,50),
        
    ];
});
