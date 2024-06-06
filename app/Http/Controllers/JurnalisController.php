<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class JurnalisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $art->tanggal_posting = date('Y-m-d', strtotime($request->tanggal_posting));
        $art->foto = $name;
        $art->save();

        Alert::success('Succes', 'Artikel Berhasil di Tambahkan!');
        return redirect()->route('artikel');
    }
}
