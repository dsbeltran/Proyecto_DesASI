<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\venta_descripcion;
use Illuminate\Support\Facades\Gate;

class Venta_descripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','vdes.index');
        $venta_descripcionsList = venta_descripcion::get();
        return view('vdes/index', [
            'venta_descripcion' => $venta_descripcionsList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','vdes.add');
        return view('vdes/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','vdes.add');
        venta_descripcion::create($request->all());
	    return redirect('/venta_descripcions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $venta_descripcion = venta_descripcion::findOrFail($id);
	    return view('vdes/show', [
		    'venta_descripcion' => $venta_descripcion
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
        $venta_descripcion = venta_descripcion::findOrFail($id);
	    return view('vdes/edit', [
		    'venta_descripcion' => $venta_descripcion
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
        venta_descripcion::findOrFail($id)->update($request->all());
	    return redirect('/venta_descripcions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        venta_descripcion::findOrFail($id)->delete();
	    return redirect('/venta_descripcions');
    }
}
