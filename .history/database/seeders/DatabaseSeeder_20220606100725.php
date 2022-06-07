<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        User::create([
            'name'=> 'Mark Rufallo',
            'email'=> 'hulkrupalo@gmail.com',
            'password'=> bcrypt('12345')
        ]);
        Category::create([
            'name' => 'Tutorial',
            'slug'=>'tutorial'
        ]);
        Category::create([
            'name' => 'Berita',
            'slug'=>'berita'
        ]);
        Post::create([
            'title'=>'Judul Pertama',
            'slug'=>'judul-pertama',
            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere animi quaerat doloremque quis quia deserunt magni nisi illum aliquam praesentium obcaecati, velit sit vero illo ad sequi ipsam',
            'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere animi quaerat doloremque quis quia deserunt magni nisi illum aliquam praesentium obcaecati, velit sit vero illo ad sequi ipsam. Quibusdam harum excepturi rem quidem facilis id, error rerum temporibus voluptatem amet dolores at ducimus labore ea culpa</p><p> quisquam, esse unde soluta, atque eaque. Nam laboriosam illum officiis temporibus porro quis nulla reiciendis consectetur veritatis delectus, rerum iste culpa praesentium magnam ea accusantium voluptates laudantium cupiditate corporis esse sequi? Vero mollitia architecto pariatur quisquam deleniti omnis natus saepe non quia blanditiis</p><p>. Excepturi ipsum similique saepe consequuntur quos ducimus illum incidunt aspernatur nam, error pariatur voluptatum molestias. Dolorum libero, dicta perspiciatis quasi alias consectetur fugit molestias delectus cupiditate natus odio dignissimos quisquam repellendus.</p>',
            'category_id'=>1,
            'user_id'=>1,
            'img_blog'=>'ahha2.png'

        ]);
        Post::create([
            'title'=>'Judul Kedua',
            'slug'=>'judul-kedua',
            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere animi quaerat doloremque quis quia deserunt magni nisi illum aliquam praesentium obcaecati, velit sit vero illo ad sequi ipsam',
            'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere animi quaerat doloremque quis quia deserunt magni nisi illum aliquam praesentium obcaecati, velit sit vero illo ad sequi ipsam. Quibusdam harum excepturi rem quidem facilis id, error rerum temporibus voluptatem amet dolores at ducimus labore ea culpa</p><p> quisquam, esse unde soluta, atque eaque. Nam laboriosam illum officiis temporibus porro quis nulla reiciendis consectetur veritatis delectus, rerum iste culpa praesentium magnam ea accusantium voluptates laudantium cupiditate corporis esse sequi? Vero mollitia architecto pariatur quisquam deleniti omnis natus saepe non quia blanditiis</p><p>. Excepturi ipsum similique saepe consequuntur quos ducimus illum incidunt aspernatur nam, error pariatur voluptatum molestias. Dolorum libero, dicta perspiciatis quasi alias consectetur fugit molestias delectus cupiditate natus odio dignissimos quisquam repellendus.</p>',
            'category_id'=>1,
            'user_id'=>1,
            'img_blog'=>'ahha2.png'
        ]);
        Post::create([
            'title'=>'Judul Ketiga',
            'slug'=>'judul-ketiga',
            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere animi quaerat doloremque quis quia deserunt magni nisi illum aliquam praesentium obcaecati, velit sit vero illo ad sequi ipsam',
            'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere animi quaerat doloremque quis quia deserunt magni nisi illum aliquam praesentium obcaecati, velit sit vero illo ad sequi ipsam. Quibusdam harum excepturi rem quidem facilis id, error rerum temporibus voluptatem amet dolores at ducimus labore ea culpa</p><p> quisquam, esse unde soluta, atque eaque. Nam laboriosam illum officiis temporibus porro quis nulla reiciendis consectetur veritatis delectus, rerum iste culpa praesentium magnam ea accusantium voluptates laudantium cupiditate corporis esse sequi? Vero mollitia architecto pariatur quisquam deleniti omnis natus saepe non quia blanditiis</p><p>. Excepturi ipsum similique saepe consequuntur quos ducimus illum incidunt aspernatur nam, error pariatur voluptatum molestias. Dolorum libero, dicta perspiciatis quasi alias consectetur fugit molestias delectus cupiditate natus odio dignissimos quisquam repellendus.</p>',
            'category_id'=>2,
            'user_id'=>1,
            'img_blog'=>'ahha2.png'
        ]);
        Post::create([
            'title'=>'Judul Keempat',
            'slug'=>'judul-keempat',
            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere animi quaerat doloremque quis quia deserunt magni nisi illum aliquam praesentium obcaecati, velit sit vero illo ad sequi ipsam',
            'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere animi quaerat doloremque quis quia deserunt magni nisi illum aliquam praesentium obcaecati, velit sit vero illo ad sequi ipsam. Quibusdam harum excepturi rem quidem facilis id, error rerum temporibus voluptatem amet dolores at ducimus labore ea culpa</p><p> quisquam, esse unde soluta, atque eaque. Nam laboriosam illum officiis temporibus porro quis nulla reiciendis consectetur veritatis delectus, rerum iste culpa praesentium magnam ea accusantium voluptates laudantium cupiditate corporis esse sequi? Vero mollitia architecto pariatur quisquam deleniti omnis natus saepe non quia blanditiis</p><p>. Excepturi ipsum similique saepe consequuntur quos ducimus illum incidunt aspernatur nam, error pariatur voluptatum molestias. Dolorum libero, dicta perspiciatis quasi alias consectetur fugit molestias delectus cupiditate natus odio dignissimos quisquam repellendus.</p>',
            'category_id'=>2,
            'user_id'=>1,
            'img_blog'=>'ahha2.png'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
