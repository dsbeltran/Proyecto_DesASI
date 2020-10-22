<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estandar_de_produccion;
use Illuminate\Support\Facades\Gate;

class Estandar_de_produccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','es.index');
        $estandar_de_produccionsList = estandar_de_produccion::get();
        return view('es/index', [
            'estandar_de_produccion' => $estandar_de_produccionsList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','es.add');
        return view('es/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','es.add');
        estandar_de_produccion::create($request->all());
	    return redirect('/estandar_de_produccions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estandar_de_produccion = estandar_de_produccion::findOrFail($id);
	    return view('es/show', [
		    'estandar_de_produccion' => $estandar_de_produccion
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
        $estandar_de_produccion = estandar_de_produccion::findOrFail($id);
	    return view('es/edit', [
		    'estandar_de_produccion' => $estandar_de_produccion
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
        estandar_de_produccion::findOrFail($id)->update($request->all());
	    return redirect('/estandar_de_produccions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        estandar_de_produccion::findOrFail($id)->delete();
	    return redirect('/estandar_de_produccions');
    }
}
