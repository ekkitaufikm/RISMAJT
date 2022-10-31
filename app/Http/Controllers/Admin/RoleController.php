<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\RoleModel;

class RoleController extends Controller
{
    // Untuk panggil view
    private $views      = 'admin/role';
    
    // 
    private $url        = 'admin/role';
    
    // Title head
    private $title      = 'Halaman Data Role';


    public function __construct()
    {
        // Di isi Construct
        $this->mRole         = new RoleModel();
    }
    
    public function index()
    {
        $role = $this->mRole->get();

        $data = [
            'title'       => $this->title,
            'url'         => $this->url,
            'page'        => 'Data Role',
            'role'     => $role,
        ];
        // View
        return view($this->views . "/index", $data);
        // echo "hood";
        // dd(session()->all());
    }

    public function create()
    {
        $data = [
            'title'         => $this->title,
            'url'           => $this->url,
            'page'          => 'Tambah Data Role',
        ];
        // View, menuju file index di dalam folder = admin/mprovinsi
        return view($this->views . "/create", $data);
        // echo "hood";
    }

    public function store(Request $request)
    {
        $dataRole = [
            'nama'      => $request->nama,
        ];
        $this->mRole->create($dataRole);

        return redirect("$this->url")->with('sukses', 'Data Role berhasil di tambahkan');
    }

    public function show($id)
    {
        // 
        
    }

    public function edit($id)
    {
        // Get Data
        $role      = $this->mRole->where('id', $id)->first();

        $data = [
            'title'     => $this->title,
            'url'       => $this->url,
            'page'      => 'Edit Data Role',
            'id'        => $id,
            'role'   => $role,
        ];
        return view($this->views . "/edit", $data);
    }

    public function update(Request $request, $id)
    {
        // Validasi
        $dataRole = [
            'nama'      => $request->nama,
        ];
        $this->mRole->where('id', $request->id)->update($dataRole);

        // Response
        return redirect("$this->url")->with('sukses', 'Data Role berhasil di edit');
        // dd($request->all());
    }

    public function destroy($id)
    {
        //
    }
}
