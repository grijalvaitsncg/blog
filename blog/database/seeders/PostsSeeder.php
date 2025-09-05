<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('posts')->insert([
            "title"=>'Cómo cuidar las suculentas',
            "descripcion"=>'Aprende como cuidar y como regarlas',
            "img"=>"default.jpg",
            "content"=>"Contenido del post",
            "likes"=>0,
            "slug"=>"como-cuidar-suculentas",
            "user_id"=>1,
            "category_id"=>1,
            'created_at'=>date('Y-m-d h:m:s')
        ]);
         DB::table('posts')->insert([
            "title"=>'Oreja de elefante',
            "descripcion"=>'Aprende como cuidar y como regarlas',
            "img"=>"default.jpg",
            "content"=>"Contenido del post",
            "likes"=>0,
            "slug"=>"oreja-elefante",
            "user_id"=>1,
            "category_id"=>1,
            'created_at'=>date('Y-m-d h:m:s')
        ]);
    }
}
