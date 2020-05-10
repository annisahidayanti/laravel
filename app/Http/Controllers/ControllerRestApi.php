<?php

namespace App\Http\Controllers;

use App\Laravel;
use Illuminate\Http\Request;

class ControllerRestApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Laravel = \App\Laravel::all();

    if(count($Laravel) > 0){ //mengecek apakah Laravel kosong atau tidak
        $res['message'] = "Success!";
        $res['values'] = $Laravel;
        return response($res);
    }
    else{
        $res['message'] = "Empty!";
        return response($res);
    }
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
        
        $name = $request->input('name');
        $is_done = $request->input("is_done");

        $Laravel = new \App\Laravel();
        $Laravel->name = $name;
        $Laravel->is_done = $is_done;
    
        if($Laravel->save()){
            $res['message'] = "Success!";
            $res['value'] = "$Laravel";
            return response($res);
        }
    
    }  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
{
    $Laravel = \App\Laravel::where('id',$id)->get();

    if(count($Laravel) > 0){ //mengecek apakah Laravel kosong atau tidak
        $res['message'] = "Success!";
        $res['values'] = $Laravel;
        return response($res);
    }
    else{
        $res['message'] = "Failed!";
        return response($res);
    }
}
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    


/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    $name = $request->input("name");
        $is_done = $request->input("is_done");

        $Laravel = \App\Laravel::where('id',$id)->first();
        $Laravel->name = $name;
        $Laravel->is_done = $is_done;

        if($Laravel->save()){
            $res['message'] = "Success!";
            $res['value'] = "$Laravel";
            return response($res);
            }
    else{
        $res['message'] = "Failed!";
        return response($res);
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function destroy($id)
    {
        $Laravel = \App\Laravel::where('id',$id)->first();

        if($laravel->delete()){
        $res['message'] = "Success!";
        $res['value'] = "$laravel";
        return response($res);
        }
        else{
        $res['message'] = "Failed!";
        return response($res);
        }
    }
}
