<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $images = [];
        $keys= config('images');

        if( $keys ) {
            foreach ( $keys as $key => $value ) {
                if( $key != "hit" && $key != "miss" && $key != "size") {
                    $images[$key] = $value;
                }
            }
        }

        return view('Dashboard.home', compact('images'));
    }
}
