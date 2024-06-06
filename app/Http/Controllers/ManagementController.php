<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all()->where('roleuser', 'Jurnalis');
        return view('admin.manage.data', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.manage.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::insert([
            'name'     => $request->name,
            'email' => $request->email,
            'password' => '',
            'roleuser' => 'Jurnalis',
        ]);
        Alert::success('Succes', 'Akun Berhasil di Tambahkan!');
        return redirect()->route('manage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('users')->where('id', $id)->get();
        return view('admin.manage.edit', compact('data'));
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
        User::where('id', $request->id)->update([
            'name'     => $request->name,
            'email' => $request->email,
            'password' => '',
            'roleuser' => 'Jurnalis',
        ]);
        Alert::info('Edit', 'Akun Berhasil di Edit!');
        return redirect()->route('manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('users')
        ->where('roleuser', 'Jurnalis')
        ->where('id', $id)
        ->delete();
        Alert::error('Deleted', 'Akun Berhasil di Hapus!');
        return redirect()->route('manage');
    }
    public function send($id)
    {
        $data = DB::table('users')->select('email')->where('id', $id)->get();
        $user = User::findOrFail($id);
        Mail::to($data)->send(new SendMail($user));
        Alert::success('Success', 'Send Email Succes!');
        return redirect()->route('manage');
    }
}
