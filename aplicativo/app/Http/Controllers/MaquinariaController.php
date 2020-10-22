<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\maquinaria;
use Illuminate\Support\Facades\Gate;

class MaquinariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','mq.index');
        $maquinariasList = maquinaria::get();
        return view('mq/index', [
            'maquinaria' => $maquinariasList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','mq.add');
        return view('mq/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','mq.add');
        maquinaria::create($request->all());
	    return redirect('/maquinarias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maquinaria = maquinaria::findOrFail($id);
	    return view('mq/show', [
		    'maquinaria' => $maquinaria
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
        $maquinaria = maquinaria::findOrFail($id);
	    return view('mq/edit', [
		    'maquinaria' => $maquinaria
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
        maquinaria::findOrFail($id)->update($request->all());
	    return redirect('/maquinarias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        maquinaria::findOrFail($id)->delete();
	    return redirect('/maquinarias');
    }
}