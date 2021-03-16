<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller {
    public function index() {
        $dresses = Dress::all();
        $data = [
            'dresses' => $dresses
        ];
        return view('home', $data);
    }
}
