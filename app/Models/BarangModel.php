<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table      = 'barang';
    protected $primaryKey = 'id_barang';

    protected $db;
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table($this->table);
    }

    public function get()
    {
        // mengambil data dari database
        $builder = $this->db->table('barang');

        $builder->select('barang.id_barang, kode_barang, nama_barang, stok, harga_jual, nama_kategori, nama_jenis');
        $builder->join('kategori', 'kategori.id_kategori = barang.id_kategori');
        $builder->join('jenis', 'jenis.id = barang.id_jenis');

        $query = $builder->get();
        return $query;

        // return $this->db->table('barang')
        //     ->join('kategori', 'kategori.id_kategori=barang.id_kategori')
        //     ->get()->getResultArray();

    }
    // public function getkategori()
    // {
    //     $builder = $this->db->table('kategori');
    //     $query = $builder->get();
    //     return $query;
    // }

    public function tambah($data)
    {
        return $this->db->table('barang')->insert($data);
    }


    public function ubah($data, $id_barang)
    {
        return $this->builder->update($data, ['id_barang' => $id_barang]);
    }

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    // protected $allowedFields = ['kode_barang', 'nama_barang', 'stok', 'harga_jual'];
}
