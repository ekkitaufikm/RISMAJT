<?php

namespace App\Http\Controllers\Landing;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Untuk panggil view
    private $views      = 'landing/service';
    
    // Untuk keperluan redirect, hubungannya route / file web
    private $url        = 'service';
    
    // Title head
    private $title      = 'Service | Risma JT';

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
