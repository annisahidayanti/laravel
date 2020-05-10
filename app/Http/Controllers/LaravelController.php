<?php

namespace App\Http\Controllers;

use App\Laravel;
use Illuminate\Http\Request;


class LaravelController extends Controller

{
    public function index() {
        $Laravel = Laravel::orderBy('created_at', 'asc')->get();
        
        return view('tasks')->with('Laravel', $Laravel);
    }

    public function add(Request $request) {
        $Laravel = new Laravel();
        $Laravel->name = $request->name;
        $Laravel->save();
        return redirect("/");
    }

    public function edit($id) {
        $Laravel = Laravel::find($id);
        return view('/edit', compact('Laravel', 'id'));
    }

        Public function update(Request $request, $id) {
        $Laravel = Laravel::find($id);
        $Laravel->name = $request->get('newName');
        $Laravel->save();
        return redirect("/");
    }


        public function del (Laravel $id) {
        $id->delete();
        return redirect("/");
    }
}