<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TweetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $tweets = Tweet::latest()->paginate(10);

        return view('Components.tweets',compact('tweets'));
    }

    public function create()
    {

        return view('Components.create');
    }

    public function store(Request $request)
    {
        auth()->user()->tweet()->create($request->all());


        return redirect('tweets');
    }

}
