<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->sentence(rand(1, 4)), "."),
        'content' => $faker->text($maxNbChars = 500),
       // 'content' => $faker->paragraphs(rand(3, 7), true),
        'user_id' => factory(User::class)
    ];
});



