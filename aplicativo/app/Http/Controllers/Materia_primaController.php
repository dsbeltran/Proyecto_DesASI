<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\materia_prima;
use Illuminate\Support\Facades\Gate;

class Materia_primaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','mt.index');
        $materia_primasList = materia_prima::get();
        return view('mt/index', [
            'materia_prima' => $materia_primasList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','mt.add');
        return view('mt/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','mt.add');
        materia_prima::create($request->all());
	    return redirect('/materia_primas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materia_prima = materia_prima::findOrFail($id);
	    return view('mt/show', [
		    'materia_prima' => $materia_prima
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
        $materia_prima = materia_prima::findOrFail($id);
	    return view('mt/edit', [
		    'materia_prima' => $materia_prima
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
        materia_prima::findOrFail($id)->update($request->all());
	    return redirect('/materia_primas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        materia_prima::findOrFail($id)->delete();
	    return redirect('/materia_primas');
    }
}
