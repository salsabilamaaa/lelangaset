<?php

namespace App\Controllers;

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

        if ($this->request->getMethod() === 'POST') {
            $rules = [
                'bukti' => [
                    'label' => 'Gambar',
                    'rules' => 'uploaded[bukti]|is_image[bukti]|max_size[bukti, 2048]'
                ]
            ];

            if ($this->validate($rules)) {
                $bukti = $this->request->getFile('bukti');
                $bukti->move('uploads');

                redirect()->back()->with('success', 'Berhasil diunggah');
            }
        }
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
        return view('pages/formlelang', $data);
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
