<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post_title' => $faker->sentence(10),
        'user_id' => $faker->numberBetween($min = 1, $max = 2),
        'post_user_name' => $faker->randomElement($array = array ('Edem Dumenu','Cathy Odametey','Selase Dumenu')),
        'post_user_picture' => $faker->randomElement($array = array ('uploads/J9gNPeOlZtLOUHu7i5nud3gluB9w4CyqpxHdBdvT.jpeg',
            'uploads/kOCioUs2QRfHb51jXhrzklEjf3xeVSCpoXyeS6Al.jpeg','uploads/sPH4AqXRryloDOzC5vTCHAC4p3Xy0ZmRf7tNRrW2.jpeg')),
        'post_category' => $faker->randomElement($array = array ('all','scholarship','loan','other')),
        'post_content' => $faker->paragraph(2),
        'post_comment_count' => $faker->numberBetween($min = 1, $max = 10),
        'post_view_count' => $faker->numberBetween($min = 1, $max = 10),
        'post_likes' => $faker->numberBetween($min = 1, $max = 10),
        'post_dislikes' => $faker->numberBetween($min = 1, $max = 5),
    ];
});
