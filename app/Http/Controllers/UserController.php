<?php

namespace App\Http\Controllers;

use App\models\Kelas;
use App\models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new userModel();
        $this->kelasModel = new kelas();
    }

    public function store(Request $request)
    {
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'kelas_id' => $request->input('kelas_id'),
        ]);
        return redirect()->to('/user');
    }



    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser()
        ];
        return view('list_user', $data);
    }



    public function create()
    {
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];
        return view('create_user', $data);
    }

    public function edit($id)
    {
        $user = UserModel::findOrFail($id);

        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();

        return view('edit_user', ['title' => 'Edit Pengguna', 'user' => $user, 'kelas' => $kelas]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|string',
            'kelas_id' => 'required|exists:kelas,id'
        ]);

        $user = UserModel::findOrFail($id);
        $user->update([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'kelas_id' => $request->input('kelas_id'),
        ]);
        return redirect()->to('/user')->with('success', 'Data berhasil diperbaharui');
    }

    public function destroy($id)
    {
        $user = UserModel::findOrFail($id);
        $user->delete();


        return redirect()->to('/user')->with('success', 'Data berhasil dihapus');
    }
}
