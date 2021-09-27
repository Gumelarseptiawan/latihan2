<?php
class latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. Selamat Belajar Web Programming";
        //$this->load->view(view-latihan);

    }


    public function penjumlahan($n1, $n2)
    {
        $this->load ->model('model_latihan1');
        $hasil = $this->model_latihan1->jumlah($n1, $n2);
        echo "Hasil Penjumlahan Dari" . $n1 ." + " . " = "
        .$hasil;
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil']  = $this->model_latiha1->jumalah($n1, $n2);
        
        $this->load->view('view-latihan1' , $data);
    }

}