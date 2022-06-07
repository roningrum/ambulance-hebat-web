<?php

namespace App\Models;

class Post
{
    private static $aha_blogs =[
        [
            "title" => "Kriteria Kegawatdaruratan Ambulance Hebat",
            "author" => "Admin",
            "slug"=>"Kriteria-kegawatdaruratan",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus aut hic doloribus inventore explicabo vitae earum quae necessitatibus adipisci, facilis a odit dolorem dolore. Voluptatibus iste laborum atque dolore non quod nihil perspiciatis porro ullam pariatur eius asperiores, fuga natus, fugit deserunt ut doloremque aperiam vel! Nostrum libero aperiam, ipsam architecto vel corporis, quas voluptate assumenda modi cupiditate inventore ratione incidunt reprehenderit nobis exercitationem! Magni nisi quaerat laborum dolorem reprehenderit voluptate. Illum suscipit vel perferendis aliquam natus laudantium minus quibusdam?",
            "img-article" =>"ahha2.png"
        ],
        [
            "title" => "Kriteria Kegawatdaruratan Ambulance Hebat",
            "author" => "Admin",
            "slug"=>"Kriteria-kegawatdaruratan",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus aut hic doloribus inventore explicabo vitae earum quae necessitatibus adipisci, facilis a odit dolorem dolore. Voluptatibus iste laborum atque dolore non quod nihil perspiciatis porro ullam pariatur eius asperiores, fuga natus, fugit deserunt ut doloremque aperiam vel! Nostrum libero aperiam, ipsam architecto vel corporis, quas voluptate assumenda modi cupiditate inventore ratione incidunt reprehenderit nobis exercitationem! Magni nisi quaerat laborum dolorem reprehenderit voluptate. Illum suscipit vel perferendis aliquam natus laudantium minus quibusdam?",
            "img-article" =>"ahha2.png"
        ],
    ];
    public static function all()
    {
        return self::$aha_blog;
    }
}
