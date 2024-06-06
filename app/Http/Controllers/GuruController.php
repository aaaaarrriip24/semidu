<?php

namespace App\Http\Controllers;

use App\Models\GuruModel;
use App\Models\KelasModel;
use App\Models\MapelModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $data = DB::table('guru as g')
        ->join('kelas as k', 'g.kelas_id', '=', 'k.id')
        ->join('mapel as m', 'g.mapel_id', '=', 'm.id')
        ->select('g.*', 'k.kelas as kelas', 'm.mata_pelajaran as mapel')
        ->get();
        return view('admin.guru.data',compact('data'));
    }
    public function profil()
    {
        $data = DB::table('guru as g')
        ->join('kelas as k', 'g.kelas_id', '=', 'k.id')
        ->join('mapel as m', 'g.mapel_id', '=', 'm.id')
        ->select('g.*', 'k.kelas as kelas', 'm.mata_pelajaran as mapel')
        ->get();
        return view('profilguru',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mapel = MapelModel::all();
        $kelas = KelasModel::all();
        return view('admin.guru.add', compact('mapel', 'kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('foto');
        $nama_file = time()."_".$file->getClientOriginalName();
        $file->move(public_path().'/foto_guru/', $nama_file);
        $name = $nama_file;

        GuruModel::insert([
            'nama' => $request->nama,
            'foto' => $name,
            'jabatan' => $request->jabatan,
            'kelas_id' => $request->kelas_id,
            'mapel_id' => $request->mapel_id,
        ]);
        Alert::success('Succes', 'Guru Berhasil di Tambahkan!');
        return redirect()->route('guru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mapel = MapelModel::all();
        $kelas = KelasModel::all();
        $data = DB::table('guru as g')
        ->join('kelas as k', 'g.kelas_id', '=', 'k.id')
        ->join('mapel as m', 'g.mapel_id', '=', 'm.id')
        ->select('g.*', 'k.kelas as kelas', 'm.mata_pelajaran as mapel')
        ->where('g.id', $id)
        ->get();
        return view('admin.guru.edit', compact('data', 'mapel', 'kelas'));
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
            $file->move(public_path().'/foto_guru/', $nama_file);
            $name = $nama_file;  
        }
        GuruModel::where('id', $request->id)->update([
            'nama' => $request->nama,
            'foto' => (!empty($request->foto) ? $name : $request->foto_lama),
            'jabatan' => $request->jabatan,
            'kelas_id' => $request->kelas_id,
            'mapel_id' => $request->mapel_id,
        ]);
        Alert::info('Edit', 'Guru Berhasil di Edit!');
        return redirect()->route('guru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('guru')
        ->where('id', $id)
        ->delete();
        Alert::error('Deleted', 'Guru Berhasil di Hapus!');
        return redirect()->route('guru');
    }
}
