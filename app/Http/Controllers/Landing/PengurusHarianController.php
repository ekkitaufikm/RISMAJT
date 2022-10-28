<?php

namespace App\Http\Controllers\Landing;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PengurusHarianController extends Controller
{
    // Untuk panggil view
    private $views      = 'landing/pengurus_harian';
    
    // Untuk keperluan redirect, hubungannya route / file web
    private $url        = 'pengurus_harian';
    
    // Title head
    private $title      = 'Pengurus Harian | Risma JT';

    public function __construct()
    {
        //

    }

    public function index()
    {
        $data = [
            'title'         => $this->title,
            'url'           => $this->url,
        ];
        // View
        return view($this->views . "/index", $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
