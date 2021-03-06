<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eseloni;

class UnitEsI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $show=Eseloni::all();
        return view('back.unit.esi',["show"=>$show]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $esi = new Eseloni;
        $esi->name = $request->name;
        $esi->save();
        return redirect()->back()->withInfo('Unit Eselon I Berhasil ditambahkan...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $esi = Eseloni::find($id);
        $esi->name = $request->name;
        $esi->save();

        return redirect()->back()->withInfo('Unit Eselon I Berhasil diubah...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $esi = Eseloni::find($id);
        $esi->delete();
        return redirect()->back()->withInfo('Unit Eselon I Berhasil dihapus...');
    }
}
