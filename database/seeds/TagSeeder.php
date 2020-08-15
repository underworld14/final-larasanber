<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagSeeder extends Seeder
{
    public function run()
    {
        $items = [
            [ 'name' => "Javascript" ],
            [ 'name' => "PHP" ],
            [ 'name' => "Node.JS" ],
            [ 'name' => "React.JS" ],
            [ 'name' => "Python" ],
            [ 'name' => "HTML CSS" ],
            [ 'name' => "SQL" ],
            [ 'name' => "VUE" ],
            [ 'name' => "Java" ],
            [ 'name' => "Android" ],
        ];

        foreach($items as $item) {
            Tag::create($item);
        }
    }
}


