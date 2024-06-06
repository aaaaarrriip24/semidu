<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function home()
    {
        $data = ArtikelModel::all();
        return view('welcome',compact('data'));
    }
    public function index()
    {
        $data = DB::table('artikel as a')
        ->join('users as u', 'a.penulis_id', '=', 'u.id')
        ->select('a.*', 'u.name as name')
        ->get();
        return view('admin.artikel.data',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.artikel.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $art = new ArtikelModel();

        $file = $request->file('foto');
        $nama_file = time()."_".$file->getClientOriginalName();
        $file->move(public_path().'/fotoArtikel/', $nama_file);
        $name = $nama_file;

        $art->penulis_id = Auth::user()->id; 
        $art->judul = $request->judul; 
        $art->deskripsi = $request->deskripsi; 
        $art->tanggal = date('Y-m-d', strtotime($request->tanggal));
        $art->tipe = $request->tipe; 
        $art->foto = $name;
        $art->save();

        Alert::success('Succes', 'Artikel Berhasil di Tambahkan!');
        return redirect()->route('artikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ArtikelModel::where('id', $id)->get();
        return view('admin.artikel.edit', compact('data'));
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
    public function update(Request $request)
    {
        if(!empty($request->foto)){
            $file = $request->file('foto');
            $nama_file = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/fotoArtikel/', $nama_file);
            $name = $nama_file;  
        }

        ArtikelModel::where('id', $request->id )
        ->update([
            'penulis_id' => Auth::user()->id,
            'judul'      => $request->judul,
            'deskripsi'  => $request->deskripsi,
            'foto'       => (!empty($request->foto) ? $name : $request->foto_lama ),
            'tanggal'    => date('Y-m-d', strtotime($request->tanggal)),
            'tipe'  => $request->tipe,
            ]);
        Alert::success('Succes', 'Artikel Berhasil di Edit!');
        return redirect()->route('artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ArtikelModel::where('id', $id)->delete();
        Alert::error('Hapus', 'Artikel Berhasil di Hapus!');
        return redirect()->route('artikel');
    }
}
