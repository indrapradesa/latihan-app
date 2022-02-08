<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

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

        User::create([
            'name' => 'Indra Pradesa',
            'username' => 'indrapradesa',
            'email' => 'indrapradesa77@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Yanti',
        //     'email' => 'yanti@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.Aut tempore illum esse ipsum id mollitia vero aliquid sit magni iste deserunt nam accusantium',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Aut tempore illum esse ipsum id mollitia vero aliquid sit magni iste deserunt nam accusantium, quos vitae corrupti hic odio illo, totam aperiam dolor reprehenderit? Quis alias possimus odit cupiditate deserunt rerum laudantium voluptates autem, nisi amet ex iure neque quae veniam facere fugiat aperiam accusamus optio modi, culpa repellendus est? Illo debitis ipsam cumque maiores assumenda officiis voluptatibus.</p><p>Itaque, temporibus expedita? Facere doloremque adipisci hic doloribus, eius beatae ut nostrum sapiente veritatis modi ipsum incidunt maxime praesentium blanditiis tempore culpa at voluptas. Eligendi consequatur voluptas recusandae, laudantium officiis error possimus quas. Quaerat velit distinctio molestiae! Mollitia voluptatibus rem quam voluptate. Excepturi, iste saepe! In eum cupiditate, impedit nisi aliquam id suscipit odio a. Soluta culpa aut vero dolorum odio quis sint laudantium fugiat consequuntur error ad itaque tempore numquam tempora, cumque iure nisi quisquam quasi molestiae recusandae? Reprehenderit rem error reiciendis!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.Aut tempore illum esse ipsum id mollitia vero aliquid sit magni iste deserunt nam accusantium',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Aut tempore illum esse ipsum id mollitia vero aliquid sit magni iste deserunt nam accusantium, quos vitae corrupti hic odio illo, totam aperiam dolor reprehenderit? Quis alias possimus odit cupiditate deserunt rerum laudantium voluptates autem, nisi amet ex iure neque quae veniam facere fugiat aperiam accusamus optio modi, culpa repellendus est? Illo debitis ipsam cumque maiores assumenda officiis voluptatibus.</p><p>Itaque, temporibus expedita? Facere doloremque adipisci hic doloribus, eius beatae ut nostrum sapiente veritatis modi ipsum incidunt maxime praesentium blanditiis tempore culpa at voluptas. Eligendi consequatur voluptas recusandae, laudantium officiis error possimus quas. Quaerat velit distinctio molestiae! Mollitia voluptatibus rem quam voluptate. Excepturi, iste saepe! In eum cupiditate, impedit nisi aliquam id suscipit odio a. Soluta culpa aut vero dolorum odio quis sint laudantium fugiat consequuntur error ad itaque tempore numquam tempora, cumque iure nisi quisquam quasi molestiae recusandae? Reprehenderit rem error reiciendis!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.Aut tempore illum esse ipsum id mollitia vero aliquid sit magni iste deserunt nam accusantium',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Aut tempore illum esse ipsum id mollitia vero aliquid sit magni iste deserunt nam accusantium, quos vitae corrupti hic odio illo, totam aperiam dolor reprehenderit? Quis alias possimus odit cupiditate deserunt rerum laudantium voluptates autem, nisi amet ex iure neque quae veniam facere fugiat aperiam accusamus optio modi, culpa repellendus est? Illo debitis ipsam cumque maiores assumenda officiis voluptatibus.</p><p>Itaque, temporibus expedita? Facere doloremque adipisci hic doloribus, eius beatae ut nostrum sapiente veritatis modi ipsum incidunt maxime praesentium blanditiis tempore culpa at voluptas. Eligendi consequatur voluptas recusandae, laudantium officiis error possimus quas. Quaerat velit distinctio molestiae! Mollitia voluptatibus rem quam voluptate. Excepturi, iste saepe! In eum cupiditate, impedit nisi aliquam id suscipit odio a. Soluta culpa aut vero dolorum odio quis sint laudantium fugiat consequuntur error ad itaque tempore numquam tempora, cumque iure nisi quisquam quasi molestiae recusandae? Reprehenderit rem error reiciendis!</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.Aut tempore illum esse ipsum id mollitia vero aliquid sit magni iste deserunt nam accusantium',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Aut tempore illum esse ipsum id mollitia vero aliquid sit magni iste deserunt nam accusantium, quos vitae corrupti hic odio illo, totam aperiam dolor reprehenderit? Quis alias possimus odit cupiditate deserunt rerum laudantium voluptates autem, nisi amet ex iure neque quae veniam facere fugiat aperiam accusamus optio modi, culpa repellendus est? Illo debitis ipsam cumque maiores assumenda officiis voluptatibus.</p><p>Itaque, temporibus expedita? Facere doloremque adipisci hic doloribus, eius beatae ut nostrum sapiente veritatis modi ipsum incidunt maxime praesentium blanditiis tempore culpa at voluptas. Eligendi consequatur voluptas recusandae, laudantium officiis error possimus quas. Quaerat velit distinctio molestiae! Mollitia voluptatibus rem quam voluptate. Excepturi, iste saepe! In eum cupiditate, impedit nisi aliquam id suscipit odio a. Soluta culpa aut vero dolorum odio quis sint laudantium fugiat consequuntur error ad itaque tempore numquam tempora, cumque iure nisi quisquam quasi molestiae recusandae? Reprehenderit rem error reiciendis!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
