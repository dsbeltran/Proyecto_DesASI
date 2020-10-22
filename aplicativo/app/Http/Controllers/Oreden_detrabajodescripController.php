<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\oreden_detrabajodescrip;
use Illuminate\Support\Facades\Gate;

class Oreden_detrabajodescripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','otdes.index');
        $oreden_detrabajodescripsList = oreden_detrabajodescrip::get();
        return view('otdes/index', [
            'oreden_detrabajodescrip' => $oreden_detrabajodescripsList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','otdes.add');
        return view('otdes/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','otdes.add');
        oreden_detrabajodescrip::create($request->all());
	    return redirect('/oreden_detrabajodescrips');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $oreden_detrabajodescrip = oreden_detrabajodescrip::findOrFail($id);
	    return view('otdes/show', [
		    'oreden_detrabajodescrip' => $oreden_detrabajodescrip
	    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $oreden_detrabajodescrip = oreden_detrabajodescrip::findOrFail($id);
	    return view('otdes/edit', [
		    'oreden_detrabajodescrip' => $oreden_detrabajodescrip
	    ]);
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
        oreden_detrabajodescrip::findOrFail($id)->update($request->all());
	    return redirect('/oreden_detrabajodescrips');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        oreden_detrabajodescrip::findOrFail($id)->delete();
	    return redirect('/oreden_detrabajodescrips');
    }
}
