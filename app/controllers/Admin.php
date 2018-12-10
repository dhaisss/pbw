<?php

class Admin extends Controller
{


    public function index(){
        $data['user']=$this->model('User_model')->getAllusers();
        $data['pengguna']=$this->model('User_model')->getPengguna();
        $data['laporan']=$this->model('Laporan_model')->getLaporan();
        $data['post']=$this->model('Laporan_model')->getPost();
        $this->view('dashboardAdmin',$data);

    }

    public function hapusUser($id){
        $data['user']=$this->model('User_model')->getAllusers();
        $data['deleteUser']=$this->model('User_model')->deleteUser($id);
        $data['deleteLaporan']=$this->model('Laporan_model')->deleteAllLaporan($id);
        $data['pengguna']=$this->model('User_model')->getPengguna();
        $data['laporan']=$this->model('Laporan_model')->getLaporan();
        $data['post']=$this->model('Laporan_model')->getPost();
        $this->view('dashboardAdmin',$data);

    }

    public function daftarKades(){
        $data=$this->model('User_model')->getKades();
        $this->view('daftarKadesAdmin',$data);

    }

    public function laporanSaya($id){
        $data['laporan']=$this->model('Laporan_model')->getLaporanById($id);
        $this->view('laporanSayaAdmin',$data);

    }

    public function lihatAktifitas($id){
        $data['laporan']=$this->model('Laporan_model')->getLaporanById($id);
        $this->view('lihatAktifitas',$data);

    }

    public function editLaporan($id){
        $data['laporan']=$this->model('Laporan_model')->getLaporanId($id);
        $data['kecamatan'] = $this->model('Kecamatan_model')->getAllKecamatan();
        $this->view('editLaporanAdmin',$data);

    }

    public function updateLaporan($id){
        $hasilRegis = $this->model('Laporan_model')->updateLaporanAdmin($_POST,$id);

        if ($hasilRegis > 0) {
            Flasher::setFlash('Perubahan', 'Berhasil', 'dilakukan', 'success');
            $id = $_SESSION['id_user'];

            $this->redirect('/Admin/LaporanSaya/'.$id);
        }
        else{
            Flasher::setFlash('Perubahan', 'Gagal', 'diubah, Terjadi Kesalahan Jaringan', 'danger');
            $this->redirect('/Admin/index');
        }

    }

    public function deleteLaporan($id){
        $data['delete']=$this->model('Laporan_model')->deleteLaporan($id);
        $data['laporan']=$this->model('Laporan_model')->getAllLaporan();
        $data['kecamatan'] = $this->model('Kecamatan_model')->getAllKecamatan();
        $this->view('daftarLaporanAdmin',$data);
    }

    public function deleteLaporanSaya($id){
        $data['delete']=$this->model('Laporan_model')->deleteLaporan($id);
        $data['laporan']=$this->model('Laporan_model')->getLaporanById($id);
        // $this->view('laporanSayaGuest',$data);
        $this->redirect('/Admin/laporanSaya/'. $_SESSION['id_user']);


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
        $kelurahan = $this->model('User_model')->getUserKelurahan($_POST);
    if ($kelurahan['total']==0){
        $hasilRegis = $this->model('User_model')->registerKades($_POST);
        if ($hasilRegis > 0) {
            Flasher::setFlash('Pendaftaran', 'Berhasil', 'ditambahkan', 'success');
            $this->redirect('/Admin/daftarKades');
        } else if ($hasilRegis == 'emailada' && $hasilRegis != null) {
            Flasher::setFlash('Pendaftaran', 'Gagal', 'ditambahkan, Email Telah di gunakan, silahkan gunakan email lainnya', 'danger');
            $this->redirect('/Admin/buatAkunKades');

        }
    }
    else{
        Flasher::setFlash('Pendaftaran', 'Gagal', 'ditambahkan, Kelurahan Yang Dimaksud Telah memiliki kepala desa', 'danger');
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
