<?php

class Home extends Controller{
    public function index(){
        if (!isset($_SESSION['level'])) {
            $this->view('index');
        }else{
            if ($_SESSION['level'] == '1') {

                $this->view('dashboardAdmin');
            }else if($_SESSION['level'] == '2'){
                $data['laporan']=$this->model('Laporan_model')->getAllLaporan();
                $this->view('dashboardKades',$data);
            }
            else if($_SESSION['level'] == '3'){
                $data['laporan']=$this->model('Laporan_model')->getAllLaporanGuest();
                $this->view('dashboardGuest',$data);
            }
        }



    }

    public function Login(){
        $this->view('Log');

    }
    public function Register()
    {
        $data['kecamatan'] = $this->model('Kecamatan_model')->getAllKecamatan();
        $this->view('reg',$data);

    }

    public function getKelurahan($id) {
        $kelurahan = $this->model('Kelurahan_model')->getKelurahanbyId($id);
        echo json_encode($kelurahan);
    }

    public function insert()
    {
        $hasilRegis = $this->model('User_model')->register($_POST);

        if ($hasilRegis > 0) {
            Flasher::setFlash('Pendaftaran', 'Berhasil', 'ditambahkan', 'success');
            $this->redirect('/Home/login');
        } else if ($hasilRegis == 'emailada' && $hasilRegis != null) {
            Flasher::setFlash('Pendaftaran', 'Gagal', 'ditambahkan, Email Telah di gunakan, silahkan gunakan email lainnya', 'danger');
            $this->redirect('/Home/register');

        }
    }
    public function masuk()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!empty(trim($email)) && !empty(trim($password))) {

            if ($this->model('User_model')->loginUser($_POST) > 0) {

                if ($_SESSION['level'] == '1') {
                    Flasher::setFlash('Login','Berhasil','Selamat Datang','success');
                    $this->view('dashboardAdmin');
                }else if($_SESSION['level'] == '2'){
                    Flasher::setFlash('Login','Berhasil','Selamat Datang','success');
                    $data['laporan']=$this->model('Laporan_model')->getAllLaporan();
                    $this->view('dashboardKades',$data);
                }else if($_SESSION['level'] == '3'){
                    Flasher::setFlash('Login','Berhasil','Selamat Datang','success');
                    $data['laporan']=$this->model('Laporan_model')->getAllLaporanGuest();
                    $this->view('dashboardGuest',$data);
                }else{
                    Flasher::setFlash('Login','Gagal','Type anda tidak di temukan','success');
                    $this->redirect('/Home/login');
                }
            }else{
                Flasher::setFlash('Login','Gagal','Ada kesalahan Silahkan Chek inputan anda','danger');
                $this->redirect('/Home/login');
            }
        }else{
            Flasher::setFlash('Login','Gagal','Silahkan Chek inputan anda','danger');
            $this->redirect('/Home/login');
        }
    }
    public function logout()
    {
        session_destroy();
        $this->redirect('/Home');
    }

}