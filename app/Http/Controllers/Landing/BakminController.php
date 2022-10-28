<?php

namespace App\Http\Controllers\Landing;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BakminController extends Controller
{
    // Untuk panggil view
    private $views      = 'landing/departemen';
    
    // Untuk keperluan redirect, hubungannya route / file web
    private $url        = 'bakmin';
    
    // Title head
    private $title      = 'Departemen Bakat Minat | Risma JT';

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
        return view($this->views . "/departemenBakmin", $data);
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
