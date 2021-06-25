<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ADMIN');
    }

    public function index()
    {
        $title = 'Manajemen Pengguna';
        $list = User::all();

        return view('admin.user.list', compact('title', 'list'));
    }

    public function show($id)
    {
        $title = 'Manajemen Pengguna';
        $user = User::find($id);

        return view('admin.user.show', compact('title', 'user'));
    }

    public function update(Request $request, $id)
    {
        // dd($request, $id);
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $updateUser = User::where('id', $id)
                            ->update([
                                'name' => $request->name,
                                'email' => $request->email
                            ]);

        if ($updateUser) {
            return redirect('/admin/user')->with('message', 'Data pengguna berhasil diperbarui!');
        } else {
            return redirect('/admin/user')->with('err', 'Data pengguna gagal diperbarui!');
        }
    }

    public function delete($id)
    {
        User::destroy($id);
        return redirect('/admin/user')->with('message', 'Pengguna berhasil dihapus!');
    }

}
