<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JavaScript;
use App\PortfolioItem;

class PagesController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function portfolio()
    {
        // get portfolio items and send them to js
        JavaScript::put([
            'portfolio' => PortfolioItem::all()
        ]);

        return view('portfolio');
    }
}
