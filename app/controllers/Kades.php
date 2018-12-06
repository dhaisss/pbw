<?php

class Kades extends Controller
{
    public function index(){
        $data['laporan']=$this->model('Laporan_model')->getAllLaporan();

        $this->view('dashboardKades',$data);

    }
    public function profilKades(){
        $data['kecamatanUser']=$this->model('Kecamatan_model')->getKecamatanById($_SESSION['kecamatan']);
        $data['kelurahanUser']=$this->model('Kelurahan_model')->getKelurahanId($_SESSION['kelurahan']);
        $data['kecamatan'] = $this->model('Kecamatan_model')->getAllKecamatan();
        $this->view('profilKades',$data);

    }

    public function laporanSaya($id){
        $data['laporan']=$this->model('Laporan_model')->getLaporanById($id);
        $this->view('laporanSayaKades',$data);

    }

    public function buatRincian(){

        $this->view('buatBelanja');

    }

    public function insertRincian(){
        $hasilRegis = $this->model('Belanja_model')->insertBelanja($_POST);

        if ($hasilRegis > 0) {
            Flasher::setFlash('Rincian belanja', 'Berhasil', 'ditambahkan', 'success');
            $this->redirect('/Kades/rincianBelanja/'.$_SESSION['kelurahan']);
        } else if ($hasilRegis == 0 && $hasilRegis != null) {
            Flasher::setFlash('Rincian', 'Gagal', 'ditambahkan, Cek inputan anda', 'danger');
            $this->redirect('/Kades/buatRincian');

        }

    }

    public function ubahBelanja($id){
        $data['belanja']=$this->model('Belanja_model')->getBelanjaById($id);
        $this->view('ubahBelanja',$data);

    }


    public function tentangDesa($id){
        $data['kelurahan']=$this->model('Kelurahan_model')->getKelurahanId($id);
        $this->view('tentangDesaKades',$data);

    }

    public function updateBelanja($id){
        $hasilRegis = $this->model('Belanja_model')->updateBelanja($_POST,$id);

        if ($hasilRegis > 0) {
            Flasher::setFlash('Perubahan', 'Berhasil', 'dilakukan', 'success');
            $id = $_SESSION['kelurahan'];
            $this->redirect('/Kades/rincianBelanja/'.$id);
        }
        else{
            Flasher::setFlash('Perubahan', 'Gagal', 'diubah, Terjadi Kesalahan Jaringan', 'danger');
            $this->redirect()->back();
        }

    }

    public function updateTentang($id){

        $hasilRegis = $this->model('Kelurahan_model')->updateTentang($_POST,$id);

        if ($hasilRegis > 0) {
            Flasher::setFlash('Perubahan', 'Berhasil', 'dilakukan', 'success');
            $id = $_SESSION['kelurahan'];
            $this->redirect('/Kades/rincianBelanja/'.$id);
        }
        else{
            Flasher::setFlash('Perubahan', 'Gagal', 'diubah, Terjadi Kesalahan Jaringan', 'danger');
            $this->redirect()->back();
        }

    }



    public function rincianBelanja($id){
        $data['rincian1']=$this->model('Kelurahan_model')->getRincian1($id);
        $data['rincian2']=$this->model('Kelurahan_model')->getRincian2($id);
        $data['rincian3']=$this->model('Kelurahan_model')->getRincian3($id);
        $data['rincian4']=$this->model('Kelurahan_model')->getRincian4($id);

        $this->view('rincianBelanjaKades',$data);

    }

    public function deleteLaporanKades($id){
        $data['delete']=$this->model('Laporan_model')->deleteLaporan($id);
        $data['laporan']=$this->model('Laporan_model')->getLaporanById($id);
        $this->view('laporanSayaKades',$data);

    }

    public function editLaporanKades($id){
        $data['laporan']=$this->model('Laporan_model')->getLaporanId($id);
        $this->view('editLaporanKades',$data);

    }

    public function updateLaporan($id){
        $hasilRegis = $this->model('Laporan_model')->updateLaporan($_POST,$id);

        if ($hasilRegis > 0) {
            Flasher::setFlash('Perubahan', 'Berhasil', 'dilakukan', 'success');
            $id = $_SESSION['id_user'];

            $this->redirect('/Kades/LaporanSaya/'.$id);
        }
        else{
            Flasher::setFlash('Perubahan', 'Gagal', 'diubah, Terjadi Kesalahan Jaringan', 'danger');
            $this->redirect()->back();
        }

    }

    public function buatLaporan(){
        $data['kecamatanUser']=$this->model('Kecamatan_model')->getKecamatanById($_SESSION['kecamatan']);
        $data['kelurahanUser']=$this->model('Kelurahan_model')->getKelurahanId($_SESSION['kelurahan']);
        $this->view('buatLaporanKades',$data);

    }
    public function buatLaporanKades()
    {
        $hasilRegis = $this->model('Laporan_model')->insertLaporanKades($_POST);

        if ($hasilRegis > 0) {
            Flasher::setFlash('Laporan', 'Berhasil', 'ditambahkan', 'success');
            $this->redirect('/Kades/dashboardKades');
        } else if ($hasilRegis == 0 && $hasilRegis != null) {
            Flasher::setFlash('Laporan', 'Gagal', 'ditambahkan, Cek inputan anda', 'danger');
            $this->redirect('/Kades/buatLaporanKades');

        }
    }


    public function updateProfilKades($id){
        $hasilRegis = $this->model('User_model')->updateKades($_POST,$id);

        if ($hasilRegis > 0) {
            Flasher::setFlash('Pendaftaran', 'Berhasil', 'ditambahkan', 'success');
            $this->redirect('/Kades/index');
        } else if ($hasilRegis == 'emailada' && $hasilRegis != null) {
            Flasher::setFlash('Pendaftaran', 'Gagal', 'ditambahkan, Email Telah di gunakan, silahkan gunakan email lainnya', 'danger');
            $this->redirect('/Kades/profilGuest');

        }
        else{
            Flasher::setFlash('Pendaftaran', 'Gagal', 'ditambahkan, Terjadi Kesalahan Jaringan', 'danger');
            $this->redirect('/Kades/profilGuest');
        }

    }
}