<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function home()
    {
        $title =[
            'judul'=> 'ini halaman home'
        ];
        return view('Home',$title);
    }

    public function blog()
    {   $title =[
        'judul'=> 'ini halaman blog'
    ];
        return view('Blog',$title);
    }

    public function kontak()
    {  $title =[
        'judul'=> 'ini halaman kontak'
    ];
        return view('Kontak',$title);
    }

}
