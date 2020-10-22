<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\empleado;
use Illuminate\Support\Facades\Gate;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','e.index');
        $empleadosList = empleado::get();
        return view('e/index', [
            'empleados' => $empleadosList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','e.add');
        return view('e/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','e.add');
        empleado::create($request->all());
        return redirect('/empleados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $cli_i
     * @return \Illuminate\Http\Response
     */
    public function show($cli_id)
    {
        $empleados = empleado::findOrFail($cli_id);
        return view('e/show', [
            'empleados' => $empleados
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $cli_i
     * @return \Illuminate\Http\Response
     */
    public function edit($cli_id)
    {
        $empleados = empleado::findOrFail($cli_id);
        return view('e/edit', [
            'empleado' => $empleados
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $cli_i
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cli_i)
    {
        empleado::findOrFail($cli_i)->update($request->all());
        return redirect('/empleados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        empleado::findOrFail($id)->delete();
        return redirect('/empleados');
    }
}

