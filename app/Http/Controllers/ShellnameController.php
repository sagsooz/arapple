<?php

namespace App\Http\Controllers;

use App\Models\Shellname;
use Illuminate\Http\Request;

class ShellnameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shells = Shellname::all();
        return view('admin.shells.index',['shells' => $shells]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shells.create');
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
            'name' => 'required',
            'title' => 'required',
        ]);
        $shell = Shellname::create([
            'name' => $request->name,
            'title' => $request->title,
        ]);
        return redirect(route('shells.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shellname  $shellname
     * @return \Illuminate\Http\Response
     */
    public function show(Shellname $shellname)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shellname  $shellname
     * @return \Illuminate\Http\Response
     */
    public function edit(Shellname $shell)
    {
        return view('admin.shells.edit',['shellname' => $shell]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shellname  $shellname
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Shellname $shell)
    {
        $validated = $request->validate([
            'name' => 'required',
            'title' => 'required',
        ]);
        $shell->name = $request->name;
        $shell->title = $request->title;
        $shell->save();
        dd('ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shellname  $shellname
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shellname $shell)
    {
        // dd($shell);
    }
}
