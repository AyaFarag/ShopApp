<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Auth;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
       {
        if (Auth::check())
            {
         
       $userposts = App\post::orderBy('idPosts','desc')
                              ->get();
       return view('posts',['posts'=>$userposts , 'title' => 'Timeline']);
            }
            else
            {
                return redirect()->route('login');        
            }
        }


    public function search()
    { 
        $keyword = $_GET["keyword"];
        $userposts = App\post::where("content","like","%".$keyword."%")
                              ->orderBy('idPosts','desc')
                              ->get();
       return view('displayPosts',['posts'=>$userposts , 'title' => 'Timeline']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $mypost = new App\post();
        $mypost->Content = $request->input('postContent');
        $mypost->Owner_id = 0;
        $mypost->Parent_id = 1;
        $mypost->save();
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $mypost = App\post::find($id);
        return view("EditPost",['mypost'=>$mypost , 'title' => 'Edit Page']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $toupdate = App\post::find($id);
        $toupdate->Content = $request->input('postContent');
        $toupdate->save();
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
      //  App\post::destroy($id);
        $todelete = App\post::find($id); 
        $todelete->delete();
        return redirect()->route('posts.index');
         
    }
}
