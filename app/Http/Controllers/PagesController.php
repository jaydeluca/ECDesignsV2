<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JavaScript;

class PagesController extends Controller
{
    public function index()
    {

        JavaScript::put([
            'test' => 'yup'
        ]);

        return view('welcome');
    }
}
