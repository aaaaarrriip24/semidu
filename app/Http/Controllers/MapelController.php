<?php

namespace App\Http\Controllers;

use App\Models\MapelModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $data = MapelModel::all();
        return view('admin.mapel.data',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mapel.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        MapelModel::insert([
            'mata_pelajaran' => $request->mata_pelajaran,
        ]);
        Alert::success('Succes', 'Mata Pelajaran Berhasil di Tambahkan!');
        return redirect()->route('mapel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('mapel')->where('id', $id)->get();
        return view('admin.mapel.edit', compact('data'));
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
        MapelModel::where('id', $request->id)->update([
            'mata_pelajaran' => $request->mata_pelajaran,
        ]);
        Alert::info('Edit', 'Mata Pelajaran Berhasil di Edit!');
        return redirect()->route('mapel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('mapel')
        ->where('id', $id)
        ->delete();
        Alert::error('Deleted', 'Mata Pelajaran Berhasil di Hapus!');
        return redirect()->route('mapel');
    }
}
