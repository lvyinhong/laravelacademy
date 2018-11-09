<?php
/**
 * Created by PhpStorm.
 * User: lyh
 * Date: 2018/11/8
 * Time: 11:41 PM
 */

use Faker\Generator as Faker;

$factory->define(App\Post::class, function ($faker) {
    return [
        'title' => $faker->sentence(mt_rand(3, 10)),
        'content' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
        'published_at' => $faker->dateTimeBetween('-1 month', '+3 days'),
    ];
});