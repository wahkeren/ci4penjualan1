<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanModel extends Model
{

    protected $table      = 'penjualan';


    protected $db;
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function invoice_no()
    {

        $sql = $this->db->table('penjualan');
        $sql = "SELECT MAX(MID(invoice,9,4)) as invoice_no
        FROM penjualan
        WHERE MID(invoice,3,6) = DATE_FORMAT(CURDATE(), '%y%m%d')";

        $query = $this->db->query($sql);

        if ($query->getNumRows() > 0) {
            $row = $query->getRow();
            $n = ((int)$row->invoice_no) + 1;
            $no = sprintf("%'.04d", $n);
        } else {
            $no = "0001";
        }
        $invoice = "KM" . date('ymd') . $no;
        return $invoice;
    }
}
