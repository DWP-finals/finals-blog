<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
        public function index() //GET
    {


        return view('article');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()    //GET
    {
        return view('article.create');
    }
}
