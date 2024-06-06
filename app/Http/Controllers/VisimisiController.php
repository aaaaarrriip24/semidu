<?php

namespace App\Http\Controllers;

use App\Models\Visimisi;
use Illuminate\Http\Request;
use Alert;
use DB;

class VisimisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Visimisi::all();
        return view('admin.visimisi.data',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.visimisi.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Visimisi::insert([
            'deskripsi' => $request->deskripsi,
            'tipe' => $request->tipe,
        ]);
        Alert::success('Succes', 'Visi Misi Berhasil di Tambahkan!');
        return redirect()->route('visimisi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('visimisi')->where('id', $id)->first();
        return view('admin.visimisi.edit', compact('data'));
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
        Visimisi::where('id', $request->id)->update([
            'deskripsi' => $request->deskripsi,
            'tipe' => $request->tipe,
        ]);
        Alert::info('Edit', 'Visi Misi Berhasil di Edit!');
        return redirect()->route('visimisi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('visimisi') ->where('id', $id) ->delete();
        Alert::error('Deleted', 'Visi Misi Berhasil di Hapus!');
        return redirect()->route('visimisi');
    }
}
