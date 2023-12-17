<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        //create 5 posts but all from the user created above
        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

        // $user = \App\Models\User::factory()->create();

    //     $personal = \App\Models\Category::create([
    //         'name' => 'Personal',
    //         'slug' => 'personal'
    //     ]);

    //    $family =  \App\Models\Category::create([
    //         'name' => 'Family',
    //         'slug' => 'family'
    //     ]);


    //     $work = \App\Models\Category::create([
    //         'name' => 'Work',
    //         'slug' => 'work'
    //     ]);

    //     \App\Models\Post::create([
    //         'user_id' => $user->id,
    //         'category_id' => $family->id,
    //         'title' => 'My Family Post',
    //         'slug' => 'my-first-post',
    //         'excerpt' => 'lorem ipsum dolar sit amet',
    //         'body' => 'llentesque feugiat molestie est ut tempus. Nullam semper ac lorem eu finibus. Fusce interdum porttitor scelerisque. Integer molestie ipsum metus. Cras eu lacus nisl. In hac habitasse platea dictumst. Etiam rhoncus aliquam justo sed vehicula. Nunc nec metus quis nulla dictum vulputate nec at ipsum. Donec a ultricies lacus. Vivamus et suscipit enim, nec bibendum m'
    //     ]);
        
        // \App\Models\User::create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => bcrypt('password'),
        // ]);
    }
}
