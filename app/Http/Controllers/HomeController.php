<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /**
        * COURSES
        */

        $courses    = json_decode(file_get_contents('https://hasanikenglish.com/api/courses'), true);
        $blogs      = json_decode(file_get_contents('https://hasanikenglish.com/api/blogs'), true);
        $teams      = json_decode(file_get_contents('https://hasanikenglish.com/api/team'), true);

        return view('homepage', compact('courses','blogs','teams'));

    }

    //END
}
