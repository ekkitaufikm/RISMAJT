<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\MPengumuman; 

use Illuminate\Support\Facades\Hash;

class PengumumanController extends Controller
{
    // Untuk panggil view
    private $views      = 'pengumuman';
    private $url        = 'pengumuman';
    private $title      = 'Data Pengumuman';


    public function __construct()
    {
        // Di isi Construct
        $this->mPengumuman     = new MPengumuman();
      //   $this->mMasuk                = new MMasuk();
      //   $this->mTransaksi           = new MTransaksi();
      //   $this->mBioMinilarva        = new MBioMinilarva();

    }

    public function index()
    {
        $pengumuman = $this->mPengumuman->get();

        $data = [
            'title'             => $this->title,
            'url'               => $this->url,
            'page'              => 'Data Pengumuman',
            'pengumuman'   => $pengumuman,

        ];
        return view($this->views . "/index", $data);
     }
 
     public function create()
    {
        // $masuk = $this->mMasuk->get();
        // $transaksi = $this->mTransaksi->get();

        $data = [
            'title'         => $this->title,
            'url'           => $this->url,
            'page'          => 'Tambah Data Ayak Magot',
            // 'transaksi'     => $transaksi,
            // 'masuk'         => $masuk,

        ];

        // View, menuju file index di dalam folder = admin/mPerpusJurusan
        return view($this->views . "/create", $data);
        // echo "hood";
    }

    public function store()
    {
        //
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
