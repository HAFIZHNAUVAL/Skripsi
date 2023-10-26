<?php

namespace App\Controllers;

use App\Models\HomeModel;
use App\Models\TestimonialModel;

class Home extends BaseController
{
    protected $HomeModel;
    protected $TestimonialModel;


    public function __construct()
    {
        $this->HomeModel = new HomeModel();
        $this->TestimonialModel = new TestimonialModel();
    }
    public function index()
    {
        if (session('id')) {
            return redirect()->to(site_url('Admin/dashboard'));
        }

        $home = $this->HomeModel->findAll();
        $testimoni = $this->TestimonialModel->findAll();

        $data = [
            'title' => 'Home',
            'home' => $home,
            'testimoni' => $testimoni
        ];
        return view('pages/index', $data);
    }
    // public function show_home()
    // {

    //     $home = $this->HomeModel->findAll();

    //     $data = [
    //         'title' => 'Home',
    //         'home' => $home
    //     ];

    //     echo view('pages/template/header');
    //     echo view('pages/admin/home/show_home', $data);
    //     echo view('pages/template/footer');
    // }
    public function layanan()
    {

        $data = [
            'title' => 'Struktur Desa',
        ];

        return view('pages/struktur', $data);
    }
}
