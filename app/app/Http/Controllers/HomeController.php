<?php

namespace App\Http\Controllers;

use App\Models\Review;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{

    public function helloWord()
    {
        $reviews = Review::all()->all();

        return view("hello-word", ['reviews'=> $reviews]);
    }
}
