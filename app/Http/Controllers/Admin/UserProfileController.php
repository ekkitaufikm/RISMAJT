<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\UserModel;
use App\Models\UserProfile;
 

use Illuminate\Support\Facades\Hash;

class UsersProfileController extends Controller
{
     // Untuk panggil view
     private $views      = 'pages/table_list';
    
     // Untuk keperluan redirect, hubungannya route / file web
     private $url        = 'pages/table_list';
     
    //  // Title head
    //  private $title      = 'Halaman Users Profile';
  
     public function __construct()
     {
         // Di isi Construct. Biasanya saya isi untuk Model
 
         // Panggil disini biar lebih ringkas
         $this->mUsers          = new UserProfile();
 
     }
 
     public function index() 
     {
         //
     }
 
     public function create()
     {
 
        // $users               = $this->mUsers->where('id', $id)->first();
        // $data = [
        //      'title'         => $this->title,
        //      'url'           => $this->url,
        //      'page'          => 'Tambah Data Users Profile',
        //      'id'            => $id,
        //      'users'         => $users,
             
        //  ];
  
        //  // View, menuju file index di dalam folder = admin/mPerpusJurusan
        //  return view($this->views . "/create", $data);
     }
 
     public function store(Request $request)
     {
        //  // masuk sini hasil form create
        //  // dd($request->all()); // buat cek data, gantinya echo json_encode
 
        //  $dataUserProfile = [
        //      'idUser'               => session()->get('idUser'),
        //      'nama'                 => $request->nama,
        //      'alamat'               => $request->alamat,
        //      'jk'                   => $request->jk,
 
        //  ];
        //  // echo json_encode($dataUserProfile); die;
        //  $this->mProfile->create($dataUserProfile);
 
        //  return redirect("$this->url")->with('sukses', 'Data User profile berhasil di tambahkan');
     }
 
     public function show($id)
     {
        // Get Data
        // $users                       = $this->mUsers->where('id', $id)->first();
        $profile                     = $this->mUsers->where('id_anggota', $id)->first();

        $data = [
            'title'                 => $this->title,
            'url'                   => $this->url,
            'page'                  => 'detail profile',
            // 'users'                 => $users,
            'user'               => $user,
        ];
        return view($this->views . "/table_list", $data);
     }
 
     public function edit($id)
     {
        //  // Get Data
        //  $user = $this->mUsers->where('id', $id)->first();
        //  $profile = $this->mProfile->where('idUser', $id)->first();
        //  // echo json_encode($user); die;
        //  $data = [ 
        //      'title'         => $this->title,
        //      'url'           => $this->url,
        //      'page'          => 'Edit Data Users Profile',
        //      'id'            => $id,
        //      'user'          => $user,
        //      'profile'       => $profile,
        //  ];
        //  return view($this->views . "/edit", $data);
     }
 
     public function update(Request $request, $id)
     {
        // $profile = $this->mProfile->where('idUser', $id)->first();
        // // echo json_encode($users); die;
        // if(isset($profile)){
        //     // jika ada users 
        //     $dataUserProfile = [
        //         'nama'                 => $request->nama,
        //         'alamat'               => $request->alamat,
        //         'jk'                   => $request->jk,

        //     ];
        //     $this->mProfile->where('id', $profile['id'])->update($dataUserProfile);

        //     return redirect("admin/users")->with('sukses', 'Data Users Profile berhasil di edit');

        // }else
        // {
        //     // 
        //     $dataUserProfile = [
        //         'idUser'               => $id,
        //         'nama'                 => $request->nama,
        //         'alamat'               => $request->alamat,
        //         'jk'                   => $request->jk,

        //     ];
        //     $this->mProfile->create($dataUserProfile);
        //     return redirect("admin/users")->with('sukses', 'Data Users Profile berhasil di edit');
        // }

     }
 
     public function destroy($id)
     {
         //
     }
 
}
