<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('dashboard.admin.mahasiswa', [
            'title' => 'Table Mahasiswa',
            'data' => $data
        ]);
    }

    public function profile()
    {
        $data = User::all();
        return view('layouts.navbar', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validate = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:user|min:3|max:20|',
            'password' => 'required|max:255',
            'password_confirm' => 'required|same:password',
            'nim' => 'required|unique:user',
            'jurusan' => 'required',
            'email' => 'required|email',
            'role' => 'required',
            'image' => 'image|file|max:10000'
        ]);

        if($request->file('image')) {
            $validate['image'] = $request->file('image')->store('profile-images');
        }

        $validate['password'] = Hash::make($request->password);

        User::create($validate);

        return redirect('/dashboard/mahasiswa')->with('success', 'Berhasil menambahkan user');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::findorfail($id);
        return view('dashboard.admin.edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = User::findorfail($id);
        $data->update($request->all());
        return redirect('/dashboard/mahasiswa')->with('success', 'Berhasil mengubah user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $data = User::findorfail($id);
        $data->delete();
        return redirect('/dashboard/mahasiswa')->with('success', 'Berhasil menghapus user');
    }
}
