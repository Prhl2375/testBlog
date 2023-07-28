<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\Category::factory()->create([
             'name' => 'life'
         ]);
         \App\Models\Category::factory()->create([
             'name' => 'travel'
         ]);
         \App\Models\Category::factory()->create([
             'name' => 'work'
         ]);
         \App\Models\Category::factory()->create([
             'name' => 'balance'
         ]);
         \App\Models\Post::factory()->create([
             'title' => 'My travel to india',
             'available' => '1',
             'category_id' => '2',
             'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aut eum facere facilis hic ipsam iusto modi quasi suscipit totam? Excepturi exercitationem fugit illum libero nesciunt nobis praesentium soluta voluptate!</p>'
         ]);
         \App\Models\Post::factory()->create([
             'title' => 'About my life',
             'available' => '1',
             'category_id' => '1',
             'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aut eum facere facilis hic ipsam iusto modi quasi suscipit totam? Excepturi exercitationem fugit illum libero nesciunt nobis praesentium soluta voluptate!</p>'
         ]);
         \App\Models\Post::factory()->create([
             'title' => 'How to work',
             'available' => '1',
             'category_id' => '3',
             'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aut eum facere facilis hic ipsam iusto modi quasi suscipit totam? Excepturi exercitationem fugit illum libero nesciunt nobis praesentium soluta voluptate!</p>'
         ]);
    }
}
