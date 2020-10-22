<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gerente;
use Illuminate\Support\Facades\Gate;

class GerenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','g.index');
        $gerentesList = gerente::get();
        return view('g/index', [
            'gerentes' => $gerentesList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','g.add');
        return view('g/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','g.add');
        gerente::create($request->all());
	    return redirect('/gerentes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gerentes = gerente::findOrFail($id);
	    return view('g/show', [
		    'gerentes' => $gerentes
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
        $gerentes = gerente::findOrFail($id);
	    return view('g/edit', [
		    'gerentes' => $gerentes
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
        gerente::findOrFail($id)->update($request->all());
	    return redirect('/gerentes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        gerente::findOrFail($id)->delete();
	    return redirect('/gerentes');
    }
}
