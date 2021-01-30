<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Comment;
use Faker\Generator as Faker;


class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Prendere tutti post && 3x commenti per ogni Post
        $posts = Post::all();

        // DUE LOOP SU UNA COLLEZIONE DI ARRAY
        foreach ($posts as $post) {

            for ($i=0; $i < 3; $i++) {
                // 1. Creazione Instanza
                $newComment = new Comment();
                // 2. Dati colonne
                $newComment->post_id = $post->id;  // FK -> id posts
                $newComment-> author = $faker->userName();
                $newComment->text = $faker->sentence(10);
                // 3. Salvataggio
                $newComment->save();
            }
           // -----> se lascio tutto fuori dal Ciclo FOR avrò la generazione di un commento per ogni post <-----
        }
    }
}
