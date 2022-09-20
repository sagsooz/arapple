<?php

namespace App\Http\Controllers;

use App\Models\Myshell;
use Illuminate\Http\Request;

class MyshellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $access = Myshell::all();
        return view('admin.myshells.index',['access' => $access]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.myshells.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'sitename' => 'required',
            'link' => 'required',
        ]);
        $myshell = Myshell::create([
            'sitename' => $request->name,
            'link' => $request->title,
        ]);
        return redirect(route('myshell.index'));
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Myshell  $myshell
     * @return \Illuminate\Http\Response
     */
    public function show(Myshell $myshell)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Myshell  $myshell
     * @return \Illuminate\Http\Response
     */
    public function edit(Myshell $myshell)
    {
        return view('admin.myshells.edit',['myshells' => $myshell])
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Myshell  $myshell
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Myshell $myshell)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Myshell  $myshell
     * @return \Illuminate\Http\Response
     */
    public function destroy(Myshell $myshell)
    {
        //
    }
}
