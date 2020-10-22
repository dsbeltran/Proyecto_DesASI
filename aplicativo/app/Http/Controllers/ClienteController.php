<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;
use Illuminate\Support\Facades\Gate;

class ClienteController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','c.index');
        $clientesList = cliente::get();
        return view('c/index', [
            'Cliente' => $clientesList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','c.add');
        return view('c/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','c.add');
        cliente::create($request->all());
        return redirect('/Cliente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $cli_id
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        $clientes = cliente::orderBy('cli_id')->get();
        return view('c.show', compact('clientes','cli_id'));
        /*
        $clientes = cliente::findOrFail($cliente->cli_id);
        return view('c/show', [
            'clientes' => $clientes
        ]);
        */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $cli_id
     * @return \Illuminate\Http\Response
     */
    public function edit(cliente $clientes)
    {
        /*$clientes = cliente::findOrFail($cli_id);
        return view('c/edit', ['cliente' => $clientes]);*/
        $clientes = cliente::orderBy('cli_id')->get();
        //return $roles;
        return view('c/edit', compact('clientes','cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $cli_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cliente $cliente)
    {
        cliente::findOrFail($cli_id)->update($request->all());
        return redirect('/Cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $cli_id
     * @return \Illuminate\Http\Response
     */
    public function destroy(cliente $cliente)
    {
        cliente::findOrFail($cli_id)->delete();
	    return redirect('/Cliente');
    }

}

