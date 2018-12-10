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

    public function laporanSaya($id){
        $data['laporan']=$this->model('Laporan_model')->getLaporanById($id);
        $this->view('laporanSayaGuest',$data);

    }

    public function deleteLaporanGuest($id){
        $data['delete']=$this->model('Laporan_model')->deleteLaporan($id);
        $data['laporan']=$this->model('Laporan_model')->getLaporanById($id);
        // $this->view('laporanSayaGuest',$data);
        $this->redirect('/Guest/laporanSaya/'. $_SESSION['id_user']);


    }


    public function editLaporanGuest($id){
        $data['laporan']=$this->model('Laporan_model')->getLaporanId($id);
        $this->view('editLaporanGuest',$data);

    }

    public function updateLaporan($id){
        $hasilRegis = $this->model('Laporan_model')->updateLaporanGuest($_POST,$id);

        if ($hasilRegis > 0) {
            Flasher::setFlash('Perubahan', 'Berhasil', 'dilakukan', 'success');
            $id = $_SESSION['id_user'];

            $this->redirect('/Guest/LaporanSaya/'.$id);
        }
        else{
            Flasher::setFlash('Perubahan', 'Gagal', 'diubah, Terjadi Kesalahan Jaringan', 'danger');
            $this->redirect()->back();
        }

    }

    public function buatLaporan(){
		    $data['kecamatanUser']=$this->model('Kecamatan_model')->getKecamatanById($_SESSION['kecamatan']);
        $data['kelurahanUser']=$this->model('Kelurahan_model')->getKelurahanId($_SESSION['kelurahan']);
		    $data['kecamatan'] = $this->model('Kecamatan_model')->getAllKecamatan();
        $this->view('buatLaporanGuest', $data);

    }

    public function buatLaporanGuest()
    {
        $hasilRegis = $this->model('Laporan_model')->insertLaporanGuest($_POST);

        if ($hasilRegis > 0) {
            Flasher::setFlash('Laporan', 'Berhasil', 'ditambahkan', 'success');
            $this->redirect('/Guest/dashboardGuest');
        } else if ($hasilRegis == 0 && $hasilRegis != null) {
            Flasher::setFlash('Laporan', 'Gagal', 'ditambahkan, Cek inputan anda', 'danger');
            $this->redirect('/Guest/buatLaporanGuest');

        }
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
