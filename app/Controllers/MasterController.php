<?php

namespace App\Controllers;

use App\Models\Stock;
use App\Models\Customer;
use App\Models\Supplier;

class MasterController extends BaseController
{
    public function masterStock()
    {
        $stock = new Stock();
        $all = $stock->get()->getResultArray();
        $data = [
            'title' =>      'Admin',
            'page'  =>      'master-stock',
            'main'  =>      'master',
            'isi'   =>      'master/master-stock',
            'stock' =>      $all
        ];
        echo view('wrapper', $data);
    }

    public function kirimMasterStock()
    {
        $stockmod = new Stock();
        $send = [
            'kode_stock' => $this->request->getPost("kode"),
            'nama_stock' => $this->request->getPost("nama"),
            'hpp' => $this->request->getPost("hpp"),
            'gudang' => $this->request->getPost("gudang"),
            'satuan' => $this->request->getPost("satuan"),
            'persatuan' => 12,
            'qty_stock_kum' => 0

        ];
        $stockmod->insert($send);
        return redirect()->to('/master-stock');
    }
    public function masterSupplier()
    {
        $supplier = new Supplier();
        $all = $supplier->get()->getResultArray();
        $data = [
            'title' =>      'Admin',
            'page'  =>      'master-supplier',
            'main'  =>      'master',
            'isi'   =>      'master/master-supplier',
            'supplier' =>      $all
        ];
        echo view('wrapper', $data);
    }
    public function kirimMasterSupplier()
    {
        $supmod = new Supplier();
        $send = [
            'kode_supplier' => $this->request->getPost("kode"),
            'nama_supplier' => $this->request->getPost("nama"),
            'lokasi_supplier' => $this->request->getPost("lokasi")


        ];
        $supmod->insert($send);
        return redirect()->to('/master-supplier');
    }

    public function masterCustomer()
    {
        $cust = new Customer();
        $all = $cust->get()->getResultArray();
        $data = [
            'title' =>      'Admin',
            'page'  =>      'master-customer',
            'main'  =>      'master',
            'isi'   =>      'master/master-customer',
            'cust' =>      $all
        ];
        echo view('wrapper', $data);
    }
    public function kirimMasterCustomer()
    {
        $custmod = new Customer();
        $send = [
            'kode_customer' => $this->request->getPost("kode"),
            'nama_customer' => $this->request->getPost("nama"),
            'lokasi_customer' => $this->request->getPost("lokasi"),
            'saldo' => 0

        ];
        $custmod->insert($send);
        return redirect()->to('/master-customer');
    }
}
