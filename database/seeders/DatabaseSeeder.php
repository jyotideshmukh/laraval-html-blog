<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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

        /*$this->call([
            //UserSeeder::class,
            CategorySeeder::class,
            BlogSeeder::class
        ]);*/

        \App\Models\User::truncate();
        \App\Models\Category::truncate();
        \App\Models\Blog::truncate();
        $user = \App\Models\User::create(['name'=>'Jyoti Deshmukh',
            'email'=>'jyotipawar2003@gmail.com',
            'password'=>bcrypt('password')]);
       // \App\Models\Blog::factory(10)->create();

        \App\Models\Blog::factory(10)->create(
            [
                'user_id'=>$user->id
            ]
        );

//        $family = \App\Models\Category::create(
//            ['name'=>'Family',
//            'slug'=>'family']);
//        $personal = \App\Models\Category::create(
//            ['name'=>'Personal',
//                'slug'=>'personal']);
//        $work = \App\Models\Category::create(
//            ['name'=>'Work',
//                'slug'=>'work']);
//
//        \App\Models\Blog::create([
//            //
//            'title'=>'My first Post',
//            'slug'=>'first-post',
//            'excerpt'=>'<p>Non hac quos excepturi architecto metus conubia earum! Voluptate nisl habitant sequi</p>',
//            'body'=>"<p>Sequi magni pede, minus consequat, incidunt! Iusto id cumque adipisicing reiciendis, iaculis beatae bibendum, aliquid sagittis totam ad alias nihil, quis hendrerit minus earum feugiat, interdum maecenas pulvinar hendrerit elit quas totam officiis vero suspendisse quibusdam, leo integer aptent deserunt? Repudiandae occaecat! Sunt, veniam beatae facere pharetra magnis. Repellendus bibendum. Potenti distinctio, dis vel lacus laboriosam lectus, sit parturient nullam, molestie tincidunt per inceptos? Vulputate quidem libero vivamus architecto ullam et feugiat? Porro accumsan cupidatat hac semper nostrum felis adipisicing, vehicula sollicitudin pulvinar occaecati, pellentesque molestiae iure officia. Reprehenderit urna at. Corporis iusto nascetur habitasse, purus placeat nemo ac culpa.</p>
//",
//            'category_id'=>$family->id,
//            'user_id'=>$user->id
//
//        ]);
//
//        \App\Models\Blog::create([
//            //
//            'title'=>'My second Post',
//            'slug'=>'second-post',
//            'excerpt'=>'<p>Non hac quos excepturi architecto metus conubia earum! Voluptate nisl habitant sequi</p>',
//            'body'=>"<p>Sequi magni pede, minus consequat, incidunt! Iusto id cumque adipisicing reiciendis, iaculis beatae bibendum, aliquid sagittis totam ad alias nihil, quis hendrerit minus earum feugiat, interdum maecenas pulvinar hendrerit elit quas totam officiis vero suspendisse quibusdam, leo integer aptent deserunt? Repudiandae occaecat! Sunt, veniam beatae facere pharetra magnis. Repellendus bibendum. Potenti distinctio, dis vel lacus laboriosam lectus, sit parturient nullam, molestie tincidunt per inceptos? Vulputate quidem libero vivamus architecto ullam et feugiat? Porro accumsan cupidatat hac semper nostrum felis adipisicing, vehicula sollicitudin pulvinar occaecati, pellentesque molestiae iure officia. Reprehenderit urna at. Corporis iusto nascetur habitasse, purus placeat nemo ac culpa.</p>
//",
//            'category_id'=>$personal->id,
//            'user_id'=>$user->id
//
//        ]);
//
//        \App\Models\Blog::create([
//            //
//            'title'=>'My Third Post',
//            'slug'=>'third-post',
//            'excerpt'=>'<p>Non hac quos excepturi architecto metus conubia earum! Voluptate nisl habitant sequi</p>',
//            'body'=>"<p>Sequi magni pede, minus consequat, incidunt! Iusto id cumque adipisicing reiciendis, iaculis beatae bibendum, aliquid sagittis totam ad alias nihil, quis hendrerit minus earum feugiat, interdum maecenas pulvinar hendrerit elit quas totam officiis vero suspendisse quibusdam, leo integer aptent deserunt? Repudiandae occaecat! Sunt, veniam beatae facere pharetra magnis. Repellendus bibendum. Potenti distinctio, dis vel lacus laboriosam lectus, sit parturient nullam, molestie tincidunt per inceptos? Vulputate quidem libero vivamus architecto ullam et feugiat? Porro accumsan cupidatat hac semper nostrum felis adipisicing, vehicula sollicitudin pulvinar occaecati, pellentesque molestiae iure officia. Reprehenderit urna at. Corporis iusto nascetur habitasse, purus placeat nemo ac culpa.</p>
//",
//            'category_id'=>$family->id,
//            'user_id'=>$user->id
//
//        ]);
//
//        \App\Models\Blog::create([
//            //
//            'title'=>'My forth Post',
//            'slug'=>'forth-post',
//            'excerpt'=>'<p>Non hac quos excepturi architecto metus conubia earum! Voluptate nisl habitant sequi</p>',
//            'body'=>"<p>Sequi magni pede, minus consequat, incidunt! Iusto id cumque adipisicing reiciendis, iaculis beatae bibendum, aliquid sagittis totam ad alias nihil, quis hendrerit minus earum feugiat, interdum maecenas pulvinar hendrerit elit quas totam officiis vero suspendisse quibusdam, leo integer aptent deserunt? Repudiandae occaecat! Sunt, veniam beatae facere pharetra magnis. Repellendus bibendum. Potenti distinctio, dis vel lacus laboriosam lectus, sit parturient nullam, molestie tincidunt per inceptos? Vulputate quidem libero vivamus architecto ullam et feugiat? Porro accumsan cupidatat hac semper nostrum felis adipisicing, vehicula sollicitudin pulvinar occaecati, pellentesque molestiae iure officia. Reprehenderit urna at. Corporis iusto nascetur habitasse, purus placeat nemo ac culpa.</p>
//",
//            'category_id'=>$work->id,
//            'user_id'=>$user->id
//
//        ]);
//
//        \App\Models\Blog::create([
//            //
//            'title'=>'My fifth Post',
//            'slug'=>'fifth-post',
//            'excerpt'=>'<p>Non hac quos excepturi architecto metus conubia earum! Voluptate nisl habitant sequi</p>',
//            'body'=>"<p>Sequi magni pede, minus consequat, incidunt! Iusto id cumque adipisicing reiciendis, iaculis beatae bibendum, aliquid sagittis totam ad alias nihil, quis hendrerit minus earum feugiat, interdum maecenas pulvinar hendrerit elit quas totam officiis vero suspendisse quibusdam, leo integer aptent deserunt? Repudiandae occaecat! Sunt, veniam beatae facere pharetra magnis. Repellendus bibendum. Potenti distinctio, dis vel lacus laboriosam lectus, sit parturient nullam, molestie tincidunt per inceptos? Vulputate quidem libero vivamus architecto ullam et feugiat? Porro accumsan cupidatat hac semper nostrum felis adipisicing, vehicula sollicitudin pulvinar occaecati, pellentesque molestiae iure officia. Reprehenderit urna at. Corporis iusto nascetur habitasse, purus placeat nemo ac culpa.</p>
//",
//            'category_id'=>$work->id,
//            'user_id'=>$user->id
//
//        ]);

    }
}
