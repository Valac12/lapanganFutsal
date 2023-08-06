<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dataAdmin', [
            'judul' => 'Kelola Admin',
            'posts' => User::where('id_level', '1')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_user' => 'required|max:50',
            'username' => 'required|min:6|max:10|unique:users',
            'password' => 'required|min:7|max:10',
            'no_telp' => 'required',
            'id_level' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        session()->flash('success', 'Data Berhasil Ditambahkan!!');
        return redirect('/adminData');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.adminData', [
            'id' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama_user' => 'required|max:50',
            'username' => 'required|min:6|max:10|unique:users',
            'password' => 'required|min:7|max:10',
            'no_telp' => 'required',
            'id_level' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        User::where('id', $id)->update($validatedData);
        session()->flash('success', 'Admin berhasil Diubah!!');
        return redirect('/adminData');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        session()->flash('success', 'Data Berhasil Dihapus!');
        return redirect('/adminData');
    }
}
