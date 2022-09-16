<?php

namespace App\Controllers;

use App\Models\BuktiModel;

class Controller extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Lelang Aset Kota Jogja'
        ];
        return view('pages/home', $data);
    }

    public function lelang_saya()
    {
        $data = [
            'title' => 'Lelang Saya | Lelang Aset Kota Jogja'
        ];

        // $this->Bukti_Model->save([
        //     'gambar' => $this->request->getVar('gambar')
        // ]);
        return view('pages/lelangsaya', $data);
    }

    public function detail_produk()
    {
        $data = [
            'title' => 'Detail Produk Lelang | Lelang Aset Kota Jogja'
        ];
        return view('pages/detailproduk', $data);
    }

    public function daftar_lelang()
    {
        $data = [
            'title' => 'Daftar Lelang | Lelang Aset Kota Jogja'
        ];
        return view('pages/daftarlelang', $data);
    }

    public function payment()
    {
        $data = [
            'title' => 'Pembayaran Lelang | Lelang Aset Kota Jogja'
        ];
        return view('pages/payment', $data);
    }

    public function upload_bukti()
    {
        $data = [
            'title' => 'Unggah Bukti | Lelang Aset Kota Jogja'
        ];

        return view('pages/unggahbukti', $data);
    }

    public function profil()
    {
        $data = [
            'title' => 'Profil | Lelang Aset Kota Jogja'
        ];
        return view('pages/profil', $data);
    }

    public function pelelangan()
    {
        $data = [
            'title' => 'Lelang Saya | Lelang Aset Kota Jogja'
        ];
        return view('pages/penawaran', $data);
    }

    public function hasil_lelang()
    {
        $data = [
            'title' => 'Lelang Saya | Lelang Aset Kota Jogja'
        ];
        return view('pages/hasillelang', $data);
    }

    public function bantuan()
    {
        $data = [
            'title' => 'Bantuan | Lelang Aset Kota Jogja'
        ];
        return view('pages/bantuan', $data);
    }
}
