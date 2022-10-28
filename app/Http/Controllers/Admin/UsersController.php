<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Hash;
use Str;
use File;

use App\Models\UserModel;
use App\Models\JabatanModel;
use App\Models\DepartemenModel;

class UsersController extends Controller
{
    // Untuk panggil view
    private $views      = 'admin/pengurus_aktif';
    
    // Untuk keperluan redirect, hubungannya route / file web
    private $url        = 'admin/pengurus_aktif';
    
    // Title head
    private $title      = 'Halaman Users';

    public function __construct()
    {
        // Di isi Construct. Biasanya saya isi untuk Model

        // Panggil disini biar lebih ringkas
        $this->mUsers            = new UserModel();
        $this->mJabatan          = new JabatanModel();
        $this->mDepartemen          = new DepartemenModel();
    }

    public function index()
    {
        $whereuser = [
            'role'      => 1,
            'status'    => 1,
        ]; 
        $users = $this->mUsers->where($whereuser)->get();

        $data = [
            'title'         => $this->title,
            'url'           => $this->url,
            'page'          => 'Data Pengurus Aktif',
            'users'          => $users,
        ];

        // View, menuju file index di dalam folder = admin/mPerpusJurusan
        return view($this->views . "/index", $data);
        // echo "hood";
        // echo json_encode($users); die;
    }

    public function create()
    {
        $jabatan        = $this->mJabatan->get();
        $departemen        = $this->mDepartemen->get();
        $users          = $this->mUsers->get();

        $data = [
            'title'             => $this->title,
            'url'               => $this->url,
            'page'              => 'Tambah Data Pengurus Aktif',
            'jabatan'           => $jabatan,
            'departemen'           => $departemen,
            'users'             => $users,
        ];
        // View, menuju file index di dalam folder = admin/mprovinsi
        return view($this->views . "/create", $data);
        // echo "hood";
    }

    public function store(Request $request)
    {
        if ($request->hasFile('photo')) {
            $file       = $request->file('photo');
            $fileName   = Str::uuid()."-".time().".".$file->extension();
            $file->move( "upload/foto/", $fileName);
        }

        $dataUsers = [
            'foto'          => $fileName,
            'nama'          => $request->nama,
            'username'      => $request->username,
            'password'      => Hash::make($request->password),
            'sandi'         => $request->password,
            'idJabatan'     => $request->idJabatan,
            'idDepartemen'  => $request->idDepartemen,
            'alamat'        => $request->alamat,
            'no_hp'          => $request->no_hp,
            'angkatan'       => $request->angkatan,
            'status'        => 1,
            'role'          => $request->role,
        ];

        // dd($dataUsers); die();
        $this->mUsers->create($dataUsers);

        return redirect("$this->url")->with('sukses', 'Data Pengurus Aktif berhasil di tambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
         // 
         $users          = $this->mUsers->where('id', $id)->first();
         $departemen        = $this->mDepartemen->get();
         $jabatan        = $this->mJabatan->get();

         $data = [
             'title'         => $this->title,
             'url'           => $this->url,
             'page'          => 'Edit Data Pengurus Aktif',
             'id'            => $id,
             'users'         => $users,
             'jabatan'       => $jabatan,
             'departemen'           => $departemen,
         ];
         return view($this->views . "/edit", $data);
         // echo json_encode($sekolah['logo']); die;
    }

    public function update(Request $request)
    {
        // Validasi
        // $validatedData = $request->validate([
        //     'username'  =>  ['required', 'min:3', 'max:255', 'unique:users'],
        // ]);
        if (isset($request->photo)) {
            if ($request->hasFile('photo')) {
                $file       = $request->file('photo');
                $fileName   = Str::uuid()."-".time().".".$file->extension();
                // $file->move(public_path(). "/upload/logo_sekolah/", $fileName);
                $file->move( "upload/foto/", $fileName);
            }
            $dataUsers = [
                'foto'          => $fileName,
                'nama'          => $request->nama,
                'username'      => $request->username,
                'password'      => Hash::make($request->password),
                'sandi'         => $request->password,
                'idJabatan'     => $request->idJabatan,
                'idDepartemen'  => $request->idDepartemen,
                'alamat'        => $request->alamat,
                'no_hp'          => $request->no_hp,
                'angkatan'       => $request->angkatan,
                'status'        => 1,
                'role'          => 1,
            ];
            $this->mUsers->where('id', $request->id)->update($dataUsers);
            return redirect("$this->url")->with('sukses', 'Data Pengurus Aktif berhasil di edit');
            // echo json_encode($dataInfo); die;
        }else{
            $dataUsers = [
                'nama'          => $request->nama,
                'username'      => $request->username,
                'password'      => Hash::make($request->password),
                'sandi'         => $request->password,
                'idJabatan'     => $request->idJabatan,
                'idDepartemen'  => $request->idDepartemen,
                'alamat'        => $request->alamat,
                'no_hp'          => $request->no_hp,
                'angkatan'       => $request->angkatan,
                'status'        => 1,
                'role'          => 1,
            ];
            // dd($dataUsers);
            $this->mUsers->where('id', $request->id)->update($dataUsers);
            return redirect("$this->url")->with('sukses', 'Data Pengurus Aktif berhasil di edit');
            // echo json_encode($dataInfo); die;
        }
    }

    public function destroy($id)
    {
        //
    }
}
