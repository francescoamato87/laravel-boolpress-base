<?php

use Illuminate\Database\Seeder;
use App\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */

     // public function run()

     // {   // SOLO SE REALMENTE RICHIESTO PUOI UTILIZZARE IL TRUNCATE PER RIMUOVER I RECORD PRECEDENTI!!!!!!!!!!!!!!!!!!!
        // Post::truncate();
        // A T T E N Z I O N E azione con risultato permanente !!!!!!!!!!!!!!!!!!!!!!!!!!


        //****
        // FAKERS, NOT FUCKERS (dati fake)
        //


        // BASIC WAY
        // **
        // $posts = [
        //     [
        //         'title' => 'My post Lorem',
        //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     ],
        //     [
        //         'title' => 'Second post Lorem',
        //         'body' => 'Atque ipsam fugiat quia accusantium quo, molestias quod at ut eligendi veritatis suscipit illo error consequatur! Possimus sapiente tempore maxime distinctio explicabo.',

        //     ],
        //     [
        //         'title' => 'Third post Lorem',
        //         'body' => 'Molestias quod at ut eligendi veritatis suscipit illo error consequatur! Possimus sapiente tempore maxime distinctio explicabo.',

        //     ],
        // ];

        // foreach ($posts as $post) {
        //     // Creazione istanza da modello
        //     $newPost = new Post();

        //     // popolazione properties dell'instanza (col db)
        //     $newPost ->title = $post ['title'];
        //     $newPost ->body = $post ['body'];
        //     $newPost ->slug = Str::slug($post ['title'],'-');

        //     // Salvataggio record (instanza) nel DB
        //     $newPost->save();
        // }
    // }

public function run(Faker $faker)
{
    // **| FAKER
    for ($i=0; $i < 10 ; $i++) {
        $title = $faker->text(50);

        $newPost = new Post;

        $newPost->title = $title;
        $newPost->body = $faker->paragraphs(2, true);
        $newPost->slug = Str::slug($title, '-');

        // SALVATAGGIO
        $newPost->save();

    }



}

}


