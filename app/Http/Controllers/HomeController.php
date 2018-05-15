<?php

namespace App\Http\Controllers;

use App\ListItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_items = ListItem::where('user_id', Auth::user()->secret_id);
        return view('home', ['list_items' => $list_items->where('completed', 0)->get(), 'count' => $list_items->where('completed', 1)->count()]);
    }
}
