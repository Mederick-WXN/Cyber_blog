<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;

class GuestController extends Controller
{
    public function blog_index() {
        return Redirect::to('/');
    }

    public function post_index($slug) {
        return Redirect::to('/');
    }
}
