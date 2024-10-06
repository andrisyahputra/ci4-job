<?php

namespace App\Controllers\Lowongan;

use App\Controllers\BaseController;
use App\Models\Kategori\Kategori;
use App\Models\Lowongan\Lowongan;
use CodeIgniter\HTTP\ResponseInterface;

class LowonganController extends BaseController
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
    public function detail($id)
    {
        $lowongans = new Lowongan;
        $lowongan = $lowongans->find($id);

        // / Menggunakan query native dengan parameter binding
        $sql = "SELECT * FROM lowongans WHERE id != ? AND kategori = ? ORDER BY id DESC LIMIT 5";
        $rekomLokers = $this->db->query($sql, [$id, $lowongan['kategori']])->getResult();

        $jumlahRekomLokers = $this->db->table('lowongans')->where('id!=', $id)->where('kategori', $lowongan['kategori'])->countAllResults();
        // dd($rekomLokers);
        // dd($jumlahRekomLokers);
        $kategoris = new Kategori;
        $kategoris = $kategoris->findAll();
        return view('lowongan/detail', compact('lowongan', 'rekomLokers', 'jumlahRekomLokers', 'kategoris'));
    }
    public function kategori($nama)
    {
        $sql = "SELECT * FROM lowongans WHERE kategori = ? ORDER BY id DESC LIMIT 5";
        $kategoriLoker = $this->db->query($sql, [$nama])->getResult();

        $jumlahKategoriLoker = $this->db->table('lowongans')->where('kategori=', $nama)->countAllResults();
        return view('lowongan/kategori', compact('kategoriLoker', 'jumlahKategoriLoker', 'nama'));
    }
}
