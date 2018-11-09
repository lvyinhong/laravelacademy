<?php
/**
 * Created by PhpStorm.
 * User: lyh
 * Date: 2018/11/8
 * Time: 11:47 PM
 */

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    public function run()
    {
        App\Post::truncate();
        factory(App\Post::class, 20)->create();
    }
}