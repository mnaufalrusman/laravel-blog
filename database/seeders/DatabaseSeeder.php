<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        Post::factory(20)->create();

        // User::create([
        //     'name' => 'Muhammad Naufal Rusman',
        //     'email' => 'naufal@gmail.com',
        //     'password' => bcrypt('12345678')
        // ]);

        // User::create([
        //     'name' => 'Dhea Ariyani',
        //     'email' => 'dhea@gmail.com',
        //     'password' => bcrypt('12345678')
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum, voluptas, deleniti ullam fugiat nesciunt obcaecati impedit neque ea ipsa perspiciatis corrupti est nam deserunt repudiandae saepe aperiam modi suscipit blanditiis? Nostrum cupiditate, ut iure nemo,',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum, voluptas, deleniti ullam fugiat nesciunt obcaecati impedit neque ea ipsa perspiciatis corrupti est nam deserunt repudiandae saepe aperiam modi suscipit blanditiis? Nostrum cupiditate, ut iure nemo, quibusdam in possimus officiis recusandae provident dolorem necessitatibus commodi, fugit aliquam minus suscipit neque incidunt repellat. Iusto modi est amet necessitatibus eos ut laborum mollitia quasi libero dolores vitae omnis incidunt eum autem nobis, ducimus aliquid cum cumque rerum ipsam tempora ullam! Reprehenderit, at perspiciatis!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum, voluptas, deleniti ullam fugiat nesciunt obcaecati impedit neque ea ipsa perspiciatis corrupti est nam deserunt repudiandae saepe aperiam modi suscipit blanditiis? Nostrum cupiditate, ut iure nemo,',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum, voluptas, deleniti ullam fugiat nesciunt obcaecati impedit neque ea ipsa perspiciatis corrupti est nam deserunt repudiandae saepe aperiam modi suscipit blanditiis? Nostrum cupiditate, ut iure nemo, quibusdam in possimus officiis recusandae provident dolorem necessitatibus commodi, fugit aliquam minus suscipit neque incidunt repellat. Iusto modi est amet necessitatibus eos ut laborum mollitia quasi libero dolores vitae omnis incidunt eum autem nobis, ducimus aliquid cum cumque rerum ipsam tempora ullam! Reprehenderit, at perspiciatis!',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum, voluptas, deleniti ullam fugiat nesciunt obcaecati impedit neque ea ipsa perspiciatis corrupti est nam deserunt repudiandae saepe aperiam modi suscipit blanditiis? Nostrum cupiditate, ut iure nemo,',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum, voluptas, deleniti ullam fugiat nesciunt obcaecati impedit neque ea ipsa perspiciatis corrupti est nam deserunt repudiandae saepe aperiam modi suscipit blanditiis? Nostrum cupiditate, ut iure nemo, quibusdam in possimus officiis recusandae provident dolorem necessitatibus commodi, fugit aliquam minus suscipit neque incidunt repellat. Iusto modi est amet necessitatibus eos ut laborum mollitia quasi libero dolores vitae omnis incidunt eum autem nobis, ducimus aliquid cum cumque rerum ipsam tempora ullam! Reprehenderit, at perspiciatis!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
