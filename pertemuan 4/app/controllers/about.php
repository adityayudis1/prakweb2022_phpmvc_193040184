<?php

class about{
    public function index($nama = 'Aditya Yudis', $pekerjaan = 'Mahasiswa'){
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }

    public function page(){
        echo 'about/page';
    }
}