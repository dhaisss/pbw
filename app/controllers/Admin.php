<?php

class Admin extends Controller
{
    public function index(){
        $this->view('dashboardAdmin');

    }

    public function daftarKades(){
        $data=$this->model('User_model')->getKades();
        $this->view('daftarKadesAdmin',$data);

    }

    public function buatLaporanAdmin(){
        $data['kecamatan'] = $this->model('Kecamatan_model')->getAllKecamatan();
        $this->view('buatLaporanAdmin',$data);

    }

    public function daftarLaporanAdmin(){
        $data=$this->model('Laporan_model')->getAllLaporan();
        $this->view('daftarLaporanAdmin',$data);

    }

    public function buatAkunKades(){
        $data['kecamatan'] = $this->model('Kecamatan_model')->getAllKecamatan();
        $this->view('buatAkunKades',$data);

    }



    public function insert()
    {
        $hasilRegis = $this->model('User_model')->registerKades($_POST);

        if ($hasilRegis > 0) {
            Flasher::setFlash('Pendaftaran', 'Berhasil', 'ditambahkan', 'success');
            $this->redirect('/Admin/daftarKades');
        } else if ($hasilRegis == 'emailada' && $hasilRegis != null) {
            Flasher::setFlash('Pendaftaran', 'Gagal', 'ditambahkan, Email Telah di gunakan, silahkan gunakan email lainnya', 'danger');
            $this->redirect('/Admin/buatAkunKades');

        }
    }

    public function buatLaporan()
    {   echo($_POST);
        $hasilRegis = $this->model('Laporan_model')->insertLaporanAdmin($_POST);

        if ($hasilRegis > 0) {
            Flasher::setFlash('Laporan', 'Berhasil', 'ditambahkan', 'success');
            $this->redirect('/Admin/dashboardAdmin');
        } else if ($hasilRegis == 0 && $hasilRegis != null) {
            Flasher::setFlash('Laporan', 'Gagal', 'ditambahkan, Cek inputan anda', 'danger');
            $this->redirect('/Admin/buatLaporanAdmin');

        }
    }


}