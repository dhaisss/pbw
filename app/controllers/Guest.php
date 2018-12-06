<?php

class Guest extends Controller
{
    public function index(){
        $data['laporan']=$this->model('Laporan_model')->getAllLaporanGuest();
        $this->view('dashboardGuest',$data);

    }

    public function profilGuest(){
        $data['kecamatanUser']=$this->model('Kecamatan_model')->getKecamatanById($_SESSION['kecamatan']);
        $data['kelurahanUser']=$this->model('Kelurahan_model')->getKelurahanId($_SESSION['kelurahan']);
        $data['kecamatan'] = $this->model('Kecamatan_model')->getAllKecamatan();
        $this->view('profilGuest',$data);

    }

    public function buatLaporanGuest(){
        $this->view('buatLaporanGuest');

    }

    public function daftarKadesGuest(){
        $data['kadesGuest']=$this->model('User_model')->getKadesByGuest($_SESSION['kelurahan']);
        $data['kades']=$this->model('User_model')->getKades();


        $this->view('daftarKadesGuest',$data);

    }

    public function detailKades($id){
        $data['desa'] = $this->model('Kelurahan_model')->getDetailbyId($id);
        $data['total'] = $this->model('Kelurahan_model')->getTotalDana($id);
        $data['silpa'] = $this->model('Kelurahan_model')->getSilpa($id);
        $data['belanja'] = $this->model('Kelurahan_model')->getBelanja($id);
        $this->view('lihatDesaGuest',$data);

    }



    public function updateProfilGuest($id){
        $hasilRegis = $this->model('User_model')->update($_POST,$id);

        if ($hasilRegis > 0) {
            Flasher::setFlash('Pendaftaran', 'Berhasil', 'ditambahkan', 'success');
            $this->redirect('/Guest/index');
        } else if ($hasilRegis == 'emailada' && $hasilRegis != null) {
            Flasher::setFlash('Pendaftaran', 'Gagal', 'ditambahkan, Email Telah di gunakan, silahkan gunakan email lainnya', 'danger');
            $this->redirect('/Guest/profilGuest');

        }
        else{
            Flasher::setFlash('Pendaftaran', 'Gagal', 'ditambahkan, Terjadi Kesalahan Jaringan', 'danger');
            $this->redirect('/Guest/profilGuest');
        }

    }


}
