<?php

namespace App\Http\Controllers\Landing;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PersController extends Controller
{
    // Untuk panggil view
    private $views      = 'landing/lembaga';
    
    // Untuk keperluan redirect, hubungannya route / file web
    private $url        = 'pers';
    
    // Title head
    private $title      = 'lembaga pers Jurnalistik dan Desain Sinematografi | Risma JT';

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
        return view($this->views . "/lembagaPers", $data);
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
