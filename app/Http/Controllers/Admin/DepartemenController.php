<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\DepartemenModel;

class DepartemenController extends Controller
{
    // Untuk panggil view
    private $views      = 'admin/departemen';
    
    // 
    private $url        = 'admin/departemen';
    
    // Title head
    private $title      = 'Halaman Data Departemen';


    public function __construct()
    {
        // Di isi Construct
        $this->mDepartemen         = new DepartemenModel();
    }
    
    public function index()
    {
        $departemen = $this->mDepartemen->get();

        $data = [
            'title'       => $this->title,
            'url'         => $this->url,
            'page'        => 'Data Departemen',
            'departemen'     => $departemen,
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
            'page'          => 'Tambah Data Departemen',
        ];
        // View, menuju file index di dalam folder = admin/mprovinsi
        return view($this->views . "/create", $data);
        // echo "hood";
    }

    public function store(Request $request)
    {
        $dataDepartemen = [
            'nama'      => $request->nama,
        ];
        $this->mDepartemen->create($dataDepartemen);

        return redirect("$this->url")->with('sukses', 'Data Departemen berhasil di tambahkan');
    }

    public function show($id)
    {
        // 
        
    }

    public function edit($id)
    {
        // Get Data
        $departemen      = $this->mDepartemen->where('id', $id)->first();

        $data = [
            'title'     => $this->title,
            'url'       => $this->url,
            'page'      => 'Edit Data Departemen',
            'id'        => $id,
            'departemen'   => $departemen,
        ];
        return view($this->views . "/edit", $data);
    }

    public function update(Request $request, $id)
    {
        // Validasi
        $dataDepartemen = [
            'nama'      => $request->nama,
        ];
        $this->mDepartemen->where('id', $request->id)->update($dataDepartemen);

        // Response
        return redirect("$this->url")->with('sukses', 'Data Departemen berhasil di edit');
        // dd($request->all());
    }

    public function destroy($id)
    {
        //
    }
}
