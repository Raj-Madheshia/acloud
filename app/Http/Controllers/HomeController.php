<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requests;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/homepage');
    }
    public function create()
    {
        return view('pages/request');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'item-name' => 'required',
            'count'  => 'required',
        ]);
        // $post = new Post;
        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();

        $requests =  new Requests;
        $requests->item_name =$request->input('itme-name');
        $requests->count =$request->input('count');
        $requests->user_id = $user_id;
        $requests->request_type = 0;
        $requests->count = 0;

        return redirect("/1");
        
    }
}
