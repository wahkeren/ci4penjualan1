<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table($this->table);
    }

    public function index()
    {
        // mengambil data dari database

        $builder = $this->db->table('kategori');
        $query = $builder->get();
        return $query;
    }

    public function tambah($data)
    {
        return $this->db->table('kategori')->insert($data);
    }

    public function ubah($data, $id_kategori)
    {
        return $this->builder->update($data, ['id_kategori' => $id_kategori]);
    }
}
