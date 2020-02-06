<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eselonii;
use App\Temuanbpk;


class TemuanBpkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = Temuanbpk::all();
        $now = date('Y');
        return view('back.bpk.list',["show"=>$show,"now"=>$now]);
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
        return view('back.bpk.input')->withNow($now)->withEsii($esii);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uploadedFile = $request->file('berkas');

        if($uploadedFile==null){
            $file = Temuanbpk::insert([
                'esi_id' => $request->esi,
                'esii_id' => $request->satker,
                'tahun' => $request->thn,
                'no_rhs' => $request->norhs,
                'temuan' => $request->temuan,
                'kerugian_negara' => $request->rugi_negara,
                'tindak_lanjut' => $request->tl,
                'sisa' => $request->rugi_negara  - $request->tl,
                'keterangan' => $request->ket,
                'sktjm' => "",
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ]);
          }else{
            $path = $uploadedFile->store('public/bpk');
            $file = Temuanbpk::insert([
                'esi_id' => $request->esi,
                'esii_id' => $request->satker,
                'tahun' => $request->thn,
                'no_rhs' => $request->norhs,
                'temuan' => $request->temuan,
                'kerugian_negara' => $request->rugi_negara,
                'tindak_lanjut' => $request->tl,
                'sisa' => $request->rugi_negara - $request->tl,
                'keterangan' => $request->ket,
                'sktjm' => $path,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ]);
            }
            return back()->withInfo('Temuan baru berhasil disimpan.... ');

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
        $post = Temuanbpk::find($id);
        $post->esi_id=$request->esi;
        $post->esii_id=$request->satker;
        $post->tahun=$request->thn;
        $post->no_rhs=$request->norhs;
        $post->temuan=$request->temuan;
        $post->kerugian_negara=$request->rugi_negara;
        $post->tindak_lanjut=$request->tl;
        $post->sisa=$request->rugi_negara  - $request->tl;
        $post->keterangan=$request->ket;

        $uploadedFile = $request->file('berkas');
        if($uploadedFile==null){
            $post->sktjm = "";
        }else{
            $post->sktjm = $uploadedFile->store('public/bpk');
        }
        $post->save();
        return back()->withInfo('Temuan baru berhasil diubah.... ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Temuanbpk::find($id);
        $del->delete();
        return back()->withInfo('Temuan berhasil dihapus.... ');
    }
}
