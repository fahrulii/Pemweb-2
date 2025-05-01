<?php

namespace App\Controllers;

class page extends BaseController
{
    public function nama(): string
    {
        return view('data/halaman_page');
    }


    public function musik(): string
    {
        return view('data/music');
    }


    public function asall(): string
    {
        return view('data/asal');
    }


    public function makanann(): string
    {
        return view('page/halaman_makanan');
    }
}
