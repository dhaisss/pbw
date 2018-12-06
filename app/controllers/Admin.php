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
        $data['laporan']=$this->model('Laporan_model')->getAllLaporan();
        $data['kecamatan'] = $this->model('Kecamatan_model')->getAllKecamatan();
        $this->view('daftarLaporanAdmin',$data);

    }


    public function buatAkunKades(){
        $data['kecamatan'] = $this->model('Kecamatan_model')->getAllKecamatan();
        $this->view('buatAkunKades',$data);

    }

    public function lihatDesa($id){
        $data['desa'] = $this->model('Kelurahan_model')->getDetailbyId($id);
        $data['total'] = $this->model('Kelurahan_model')->getTotalDana($id);
        $data['silpa'] = $this->model('Kelurahan_model')->getSilpa($id);
        $data['belanja'] = $this->model('Kelurahan_model')->getBelanja($id);
        $this->view('lihatDesaAdmin',$data);

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
            $this->redirect('/Admin/daftarLaporanAdmin');
        } else if ($hasilRegis == 0 && $hasilRegis != null) {
            Flasher::setFlash('Laporan', 'Gagal', 'ditambahkan, Cek inputan anda', 'danger');
            $this->redirect('/Admin/buatLaporanAdmin');

        }
    }


}
