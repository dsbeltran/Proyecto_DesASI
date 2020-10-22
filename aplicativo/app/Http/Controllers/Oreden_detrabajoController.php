<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\oreden_detrabajo;
use Illuminate\Support\Facades\Gate;

class Oreden_detrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','ot.index');
        $oreden_detrabajosList = oreden_detrabajo::get();
        return view('ot/index', [
            'oreden_detrabajo' => $oreden_detrabajosList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','ot.add');
        return view('ot/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','ot.add');
        oreden_detrabajo::create($request->all());
	    return redirect('/oreden_detrabajos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $oreden_detrabajo = oreden_detrabajo::findOrFail($id);
	    return view('ot/show', [
		    'oreden_detrabajo' => $oreden_detrabajo
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
        $oreden_detrabajo = oreden_detrabajo::findOrFail($id);
	    return view('ot/edit', [
		    'oreden_detrabajo' => $oreden_detrabajo
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
        oreden_detrabajo::findOrFail($id)->update($request->all());
	    return redirect('/oreden_detrabajos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        oreden_detrabajo::findOrFail($id)->delete();
	    return redirect('/oreden_detrabajos');
    }
}
