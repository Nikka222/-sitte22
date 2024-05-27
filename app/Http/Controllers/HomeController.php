<?php

namespace App\Http\Controllers;
use App\Models\Content;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contentItems = Content::all();
        return view('home', compact("contentItems"));
      
    }
    public function edit($id)
    {
        $content = Content::find($id);
        return view('home.edit', compact('content'));
    }
}
