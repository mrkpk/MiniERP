<?php

namespace App\Models;

use CodeIgniter\Model;

class Supplier extends Model
{
    protected $table            = 'supplier';
    protected $primaryKey    = 'id_supplier';
    protected $allowedFields = ['kode_supplier', 'nama_supplier', 'lokasi_supplier', 'saldo'];
}
