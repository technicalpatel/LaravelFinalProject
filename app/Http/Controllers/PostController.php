<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostModel;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('postinsert');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PostModel::insert(["post_type"=>$request->post_type,
            "post_name"=>$request->post_name,
            "post_date"=>$request->post_date,
            "post_time"=>$request->post_time]);

        $data=PostModel::all();

        return view('postview',compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $data=PostModel::where('id',$id)->get(); 
        return view('postedit',compact('data'));
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
        PostModel::where('id',$id)->update(["post_type"=>$request->post_type,
            "post_name"=>$request->post_name,
            "post_date"=>$request->post_date,
            "post_time"=>$request->post_time]);
        
        $data=PostModel::all();

        return view('postview',compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PostModel::find($id)->delete();
          $data=PostModel::all();

        return view('postview',compact('data'));
       
    }

    public function viewall()
    {
        $data=PostModel::all();
        return view('postview',compact('data'));
    }

    public function rela()
    {
        $data=PostModel::find(2)->with('cmt')->get();
        return view('relationpage',compact('data'));
    }
}
