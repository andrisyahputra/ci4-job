<?php

namespace App\Controllers;

use App\Models\Lowongan\Lowongan;

class Home extends BaseController
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
    public function index(): string
    {
        $lowongan = new Lowongan;
        $data['lowongans'] = $lowongan->findAll();
        $data['jumlahRekomLokers'] = $this->db->table('lowongans')->countAllResults();
        return view('home', $data);
    }
}

