<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eselonii;
use App\Temuanitjen;

class TemuanItjenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = Temuanitjen::all();
        $now = date('Y');
        return view('back.itjen.list',["show"=>$show,"now"=>$now]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $now = date('Y');
        $esii = Eselonii::all();
        return view('back.itjen.input',["esii"=>$esii,"now"=>$now]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Temuanitjen;
        $post->esi_id = $request->esi;
        $post->esii_id = $request->satker;
        $post->tahun_periksa = $request->thn;
        $post->uraian = $request->uraian;
        $post->no_rhs = $request->norhs;
        $post->kerugian_negara = $request->rugi_negara;
        $post->tindak_lanjut = $request->tl;
        $post->sisa = $request->rugi_negara - $request->tl;
        $post->keterangan = $request->ket;
        $uploadedFile = $request->file('berkas');
        if($uploadedFile==null){
            $post->sktjm = "";
        }else{
            $post->sktjm = $uploadedFile->store('public/itjen');
        }
        $post->save();
        return back()->withInfo('Temuan baru berhasil ditambahkan.... ');
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
        $post = Temuanitjen::find($id);
        $post->esi_id=$request->esi;
        $post->esii_id=$request->satker;
        $post->tahun_periksa=$request->thn;
        $post->no_rhs=$request->norhs;
        $post->uraian=$request->uraian;
        $post->kerugian_negara=$request->rugi_negara;
        $post->tindak_lanjut=$request->tl;
        $post->sisa=$request->rugi_negara  - $request->tl;
        $post->keterangan=$request->ket;

        $uploadedFile = $request->file('berkas');
        if($uploadedFile==null){
            $post->sktjm = "";
        }else{
            $post->sktjm = $uploadedFile->store('public/itjen');
        }
        $post->save();
        return back()->withInfo('Temuan berhasil diubah.... ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Temuanitjen::find($id);
        $del->delete();
        return back()->withInfo('Temuan berhasil dihapus.... ');
    }
}
