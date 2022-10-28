<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;

use App\Models\UserModel;

class DashboardController extends Controller
{
    // Untuk panggil view
    private $views      = 'admin/dashboard';
    
    // 
    private $url        = 'Dashboard';
    
    // Title head
    private $title      = 'Halaman Dashboard';


    public function __construct()
    {
        $this->mUsers           = new UserModel();
    
    }

    public function index()
    {
        $users                  = $this->mUsers->get();

        $data = [
            'title'             => $this->title,
            'url'               => $this->url,
            'page'              => 'Dashboard',
            'users'             => $users,
        ];
        // View
        return view($this->views . "/index", $data);
        // echo "hood";
    }
}
