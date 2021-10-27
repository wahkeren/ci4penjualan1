<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\JenisModel;
use App\Models\KategoriModel;
use CodeIgniter\HTTP\Request;

class Barang extends BaseController
{

    protected $BarangModel;
    public function __construct()
    {
        $this->BarangModel = new BarangModel();
    }
    public function index()
    {
        $data['title'] = 'data barang';

        $model = new BarangModel;
        $query = $model->get();
        $data['barang'] = $query->getResult();

        // select data yang di tampilkan di data barang
        $model = new KategoriModel;
        $query = $model->index();
        $data['kategori'] = $query->getResult();

        $model = new JenisModel;
        $query = $model->getjenis();
        $data['jenis'] = $query->getResult();


        // foreach ($all_data->getResult() as $key => $row); {
        //     echo $row->nama_barang;
        // }
        // $barang = $this->BarangModel->findAll();
        // $data = [
        //     'title' => 'data Barang',
        //     // 'barang' => $this->BarangModel->get(),
        // ];

        return view('master/data_barang', $data);
    }

    public function add()
    {

        // $model = new BarangModel;

        $data = [
            'kode_barang' => $this->request->getPost('kode_barang'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'stok' => $this->request->getPost('stok'),
            'harga_jual' => $this->request->getPost('harga_jual'),
            'id_kategori' => $this->request->getPost('id_kategori'),
            'id_jenis' => $this->request->getPost('id_jenis'),
        ];

        $success = $this->BarangModel->tambah($data);
        if ($success) {
            return redirect()->to(base_url('barang'));
        }
    }

    public function delete($id_barang)
    {
        $this->BarangModel->delete($id_barang);
        session()->setFlashdata('pesan', 'data berhasil dihapus');
        return redirect()->to('/barang');
    }

    public function edit()
    {
        $id_barang = $this->request->getPost('id_barang');

        $data = [

            'kode_barang' => $this->request->getPost('kode_barang'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'stok' => $this->request->getPost('stok'),
            'harga_jual' => $this->request->getPost('harga_jual'),
            'id_kategori' => $this->request->getPost('id_kategori'),
            'id_jenis' => $this->request->getPost('id_jenis')
        ];
        $success = $this->BarangModel->ubah($data, $id_barang);
        if ($success) {
            return redirect()->to(base_url('barang'));
        }




        // $data = [
        //     'barang' => $this->BarangModel->get($id_barang)
        // ];
        // return view('barang', $data);
    }


    public function jenis_barang()
    {
        $data['title'] = 'data jenis';

        $model = new JenisModel;
        $query = $model->getjenis();
        $data['jenis'] = $query->getResult();

        return view('master/jenis_barang', $data);
    }
}
