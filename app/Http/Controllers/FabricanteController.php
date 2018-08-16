<?php

namespace App\Http\Controllers;

use App\Model\Fabricante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class FabricanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $fabricantes = DB::table('fabricantes')->orderBy('nome_fabricante');
//        return view('fabricante.index',compact('fabricantes'));
        return view('fabricante.index');
    }
    public function anyData(){
        $fabricantes = DB::table('fabricantes')->orderBy('nome_fabricante');
        return DataTables::of($fabricantes)->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fabricante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fabricante = Fabricante::create($request->all());
        return redirect('fabricante');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fabricante  $fabricante
     * @return \Illuminate\Http\Response
     */
    public function show(Fabricante $fabricante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fabricante  $fabricante
     * @return \Illuminate\Http\Response
     */
    public function edit(Fabricante $id)
    {
        $fabricante = Fabricante::find($id);
        return view('fabricante.show', ['data' => $fabricante]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fabricante  $fabricante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contato = Fabricante::find($id);
        $contato->fill($request->all());
        $contato->update();
        return redirect('fabricante');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fabricante  $fabricante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fabricante::destroy($id);
        return redirect('fabricante');
    }
}
