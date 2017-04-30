<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JavaScript;
use App\PortfolioItem;

class PagesController extends Controller
{
    public function index()
    {

        // get portfolio items and send them to js
        JavaScript::put([
            'portfolio' => PortfolioItem::all()
        ]);

        return view('welcome');
    }
}
