<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisModel extends Model
{

    protected $db;
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getjenis()
    {
        // mengambil data dari database
        $builder = $this->db->table('jenis');
        $query = $builder->get();
        return $query;

        // return $this->db->table('barang')
        //     ->join('kategori', 'kategori.id_kategori=barang.id_kategori')
        //     ->get()->getResultArray();
    }

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    // protected $allowedFields = ['kode_barang', 'nama_barang', 'stok', 'harga_jual'];
}
