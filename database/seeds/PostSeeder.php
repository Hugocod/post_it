<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $post = new Post();
        $post->title = 'titolo di prova' ;
        $post->description = 'questo è un paragrafo di prova per verificare il primo seeder';

        $post->save();



    }
}
