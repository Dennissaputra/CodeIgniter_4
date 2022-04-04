<?php

namespace App\Controllers;
use App\Models\PortoModel;
use App\Models\pengalamanmodel;

class Home extends BaseController
{
    protected $PortoModel;
    protected $pengalamanmodel;
    public function __construct()
    {
        $this->PortoModel = new PortoModel();
        $this->pengalamanmodel = new pengalamanmodel();
    }
    public function index()
    {
        $Porto = $this->PortoModel->findAll();
        $pengalaman = $this->pengalamanmodel->findAll();
        $data = [
            'title' => 'CV | Belajar CI4',
            'page' => 'home',
            'porto' => $Porto,
            'pengalaman' => $pengalaman
        ];
        return view('home', $data);
    }
}