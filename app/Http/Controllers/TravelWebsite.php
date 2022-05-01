<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TravelWebsite extends Controller
{
    public function getAbout()
    {
        return view("about");
    }

    public function getpackages()
    {
        return view("packages");
    }

     public function getReviews()
    {
        return view("reviews");
    }
    public function getshop()
    {
        return view("shop");
    }
    public function getblogs()
    {
        return view("blogs");
    }

}

