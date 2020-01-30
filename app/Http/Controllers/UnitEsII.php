<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eseloni;
use App\Eselonii;

class UnitEsII extends Controller
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
        $show = Eselonii::with('esi')->orderBy('id','asc')->paginate(10);
        $esi = Eseloni::all();
        return view('back.unit.esii',["show"=>$show,"esi"=>$esi]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = New Eselonii;
        $post->esi_id=$request->esi_id;
        $post->name = $request->name;
        $post->kd_satker = $request->kd_satker;

        $post->save();

        return back()->withInfo('Satuan Kerja Berhasil ditambahkan...');
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
        $post = Eselonii::find($id);
        $post->esi_id=$request->esi_id;
        $post->name = $request->name;
        $post->kd_satker = $request->kd_satker;

        $post->save();

        return back()->withInfo('Satuan Kerja berhasil diedit...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Eselonii::find($id);
        $category->delete();
        return back()->withInfo('Satuan Kerja berhasil dihapus.... ');
    }
}
