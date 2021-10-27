<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class Kategori extends BaseController
{

    protected $KategoriModel;
    public function __construct()
    {
        $this->KategoriModel = new KategoriModel();
    }

    public function index()
    {
        $data['title'] = 'data kategori';

        $model = new kategoriModel;
        $query = $model->index();
        $data['kategori'] = $query->getResult();

        return view('master/kategori_barang', $data);
        // return view('master/data_barang', $data);
    }


    public function add()
    {

        // $model = new BarangModel;

        $data = [
            'nama_kategori' => $this->request->getPost('nama_kategori')

        ];

        $success = $this->KategoriModel->tambah($data);
        if ($success) {
            return redirect()->to(base_url('kategori'));
        }
    }

    public function edit()
    {

        $id_kategori = $this->request->getPost('id_kategori');

        $data = [

            'nama_kategori' => $this->request->getPost('nama_kategori'),

        ];
        $success = $this->KategoriModel->ubah($data, $id_kategori);
        if ($success) {
            return redirect()->to(base_url('kategori'));
        }
    }
}
