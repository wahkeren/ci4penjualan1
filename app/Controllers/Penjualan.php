<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\PenjualanModel;
use App\Controllers\User;

class Penjualan extends BaseController
{
    protected $PenjualanModel;
    public function __construct()
    {
        $this->PenjualanModel = new PenjualanModel();
    }

    public function index()
    {

        $data['title'] = 'Penjualan';

        return view('penjualan/index', $data);
    }

    public function transaksi()
    {
        $data['title'] = 'Transaksi';

        $model = new BarangModel;
        $query = $model->get();
        $data['barang'] = $query->getResult();

        $model = new PenjualanModel;
        $data['invoice'] = $model->invoice_no();

        // $model = new User;
        // $query = $model->index();
        // $data['users'] = ->getResult();

        return view('penjualan/transaksi', $data);
    }
}
