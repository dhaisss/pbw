<?php

class Laporan_model {
    private $table = 'laporan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllLaporan()
    {
        $this->db->query('SELECT * FROM '. $this->table.' 
        l JOIN users u ON u.id = l.users JOIN kelurahan kh ON kh.idKelurahan = l.kelurahan 
        JOIN kecamatan kc ON kc.idKecamatan = l.kecamatan JOIN level lv ON lv.idLevel=u.level order by l.updated_at desc');
        return $this->db->resultSet();
    }

    public function getAllLaporanGuest()
    {
        $this->db->query('SELECT * FROM '. $this->table.' 
        l JOIN users u ON u.id = l.users JOIN kelurahan kh ON kh.idKelurahan = l.kelurahan 
        JOIN kecamatan kc ON kc.idKecamatan = l.kecamatan WHERE status=2 order by l.updated_at desc');
        return $this->db->resultSet();
    }

    public function deleteLaporan($id)
    {
        $this->db->query('DELETE FROM `laporan` WHERE idLaporan = :id');
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getLaporanById($id)
    {
        $this->db->query('SELECT * FROM laporan l JOIN users u ON u.id = l.users JOIN kelurahan kh ON kh.idKelurahan = l.kelurahan JOIN kecamatan kc ON kc.idKecamatan = l.kecamatan WHERE u.id = :id order by l.updated_at desc');

        $this->db->bind(':id', $id);

        return $this->db->resultSet();
    }

    public function getLaporanId($id)
    {
        $this->db->query('SELECT * FROM laporan l JOIN users u ON u.id = l.users JOIN kelurahan kh ON kh.idKelurahan = l.kelurahan JOIN kecamatan kc ON kc.idKecamatan = l.kecamatan JOIN status s ON s.idStatus=l.status WHERE idLaporan = :id order by l.updated_at desc');

        $this->db->bind(':id', $id);

        return $this->db->single();
    }


    public function insertLaporanAdmin($data)
    {

        $nama = $_FILES['foto']['name'];
        $asal = $_FILES['foto']['tmp_name'];
        $namaFile = 'laporan/' . basename($nama);
        $time = time();

        $ex = strtolower(pathinfo($nama, PATHINFO_EXTENSION));
        if ($ex != "jpg" && $ex != "png" && $ex != "jpeg") {
            return 0;
        } else {
            if (file_exists($namaFile)) {
                if ($ex == "jpg") {
                    $namaFile = str_replace(".jpg", "", $namaFile);
                    $namaFile = $namaFile . "_" . $time . ".jpg";
                    $nama = str_replace(".jpg", "", $nama);
                    $nama = $nama . "_" . $time . ".jpg";
                } else if ($ex == "png") {
                    $namaFile = str_replace(".png", "", $namaFile);
                    $namaFile = $namaFile . "_" . $time . ".png";
                    $nama = str_replace(".png", "", $nama);
                    $nama = $nama . "_" . $time . ".png";
                } else if ($ex == "jpeg") {
                    $namaFile = str_replace(".jpeg", "", $namaFile);
                    $namaFile = $namaFile . "_" . $time . ".jpeg";
                    $nama = str_replace(".jpeg", "", $nama);
                    $nama = $nama . "_" . $time . ".jpeg";
                }
            }

            move_uploaded_file($asal, $namaFile);
            $query = "INSERT INTO " . $this->table . " 
                  (`idLaporan`, `laporan`, `fotoLaporan`, `status`, `users`, `kecamatan`, `kelurahan`, `created_at`, 
                  `updated_at`) VALUES ('', :laporan , :fotoLaporan , :status , :users , :kecamatan , :kelurahan , curdate() , curdate() )";


            $this->db->query($query);

            $this->db->bind('laporan', $data['laporan']);
            $this->db->bind('fotoLaporan', $nama);
            $this->db->bind('status', $data['status']);
            $this->db->bind('users', $_SESSION['id_user']);
            $this->db->bind('kecamatan', $data['kecamatan']);
            $this->db->bind('kelurahan', $data['kelurahan']);


            $this->db->execute();


            return $this->db->rowCount();

        }
    }

        public function insertLaporanKades($data)
        {

            $nama = $_FILES['foto']['name'];
            $asal = $_FILES['foto']['tmp_name'];
            $namaFile = 'laporan/' . basename($nama);
            $time = time();

            $ex = strtolower(pathinfo($nama, PATHINFO_EXTENSION));
            if ($ex != "jpg" && $ex != "png" && $ex != "jpeg") {
                return 0;
            } else {
                if (file_exists($namaFile)) {
                    if ($ex == "jpg") {
                        $namaFile = str_replace(".jpg", "", $namaFile);
                        $namaFile = $namaFile . "_" . $time . ".jpg";
                        $nama = str_replace(".jpg", "", $nama);
                        $nama = $nama . "_" . $time . ".jpg";
                    } else if ($ex == "png") {
                        $namaFile = str_replace(".png", "", $namaFile);
                        $namaFile = $namaFile . "_" . $time . ".png";
                        $nama = str_replace(".png", "", $nama);
                        $nama = $nama . "_" . $time . ".png";
                    } else if ($ex == "jpeg") {
                        $namaFile = str_replace(".jpeg", "", $namaFile);
                        $namaFile = $namaFile . "_" . $time . ".jpeg";
                        $nama = str_replace(".jpeg", "", $nama);
                        $nama = $nama . "_" . $time . ".jpeg";
                    }
                }

                move_uploaded_file($asal, $namaFile);
                $query = "INSERT INTO " . $this->table . " 
                  (`idLaporan`, `laporan`, `fotoLaporan`, `status`, `users`, `kecamatan`, `kelurahan`, `created_at`, 
                  `updated_at`) VALUES ('', :laporan , :fotoLaporan , :status , :users , :kecamatan , :kelurahan , curdate() , curdate() )";


                $this->db->query($query);

                $this->db->bind('laporan', $data['laporan']);
                $this->db->bind('fotoLaporan', $nama);
                $this->db->bind('status', $data['status']);
                $this->db->bind('users', $_SESSION['id_user']);
                $this->db->bind('kecamatan', $_SESSION['kecamatan']);
                $this->db->bind('kelurahan', $_SESSION['kelurahan']);

                $this->db->execute();


                return $this->db->rowCount();

            }

        }

    public function updateLaporan($data,$id)
    {

            if ($_FILES['foto']['name'] == null) {
                $query = "UPDATE `laporan` SET `laporan`= :laporan,`status`=:status, `updated_at`= curdate() WHERE idLaporan = :id";
                $this->db->query($query);


                $this->db->bind('laporan', $data['laporan']);
                $this->db->bind('status', $data['status']);
                $this->db->bind(':id', $id);
                $this->db->execute();
                return $this->db->rowCount();

            } else if ($_FILES['foto']['name'] != null){

                $nama = $_FILES['foto']['name'];
                $asal = $_FILES['foto']['tmp_name'];
                $namaFile = 'laporan/' . basename($nama);
                $time = time();

                $ex = strtolower(pathinfo($nama, PATHINFO_EXTENSION));
                if ($ex != "jpg" && $ex != "png" && $ex != "jpeg") {
                    return 0;
                } else {
                    if (file_exists($namaFile)) {
                        if ($ex == "jpg") {
                            $namaFile = str_replace(".jpg", "", $namaFile);
                            $namaFile = $namaFile . "_" . $time . ".jpg";
                            $nama = str_replace(".jpg", "", $nama);
                            $nama = $nama . "_" . $time . ".jpg";
                        } else if ($ex == "png") {
                            $namaFile = str_replace(".png", "", $namaFile);
                            $namaFile = $namaFile . "_" . $time . ".png";
                            $nama = str_replace(".png", "", $nama);
                            $nama = $nama . "_" . $time . ".png";
                        } else if ($ex == "jpeg") {
                            $namaFile = str_replace(".jpeg", "", $namaFile);
                            $namaFile = $namaFile . "_" . $time . ".jpeg";
                            $nama = str_replace(".jpeg", "", $nama);
                            $nama = $nama . "_" . $time . ".jpeg";
                        }
                    }

                    move_uploaded_file($asal, $namaFile);
                    $query = "UPDATE `laporan` SET `laporan`='".$data['laporan']."',`fotoLaporan`='".$nama."',`status`=".$data['status'].",`updated_at`=curdate() WHERE idLaporan= ".$id." ";

                    $this->db->query($query);


                    $this->db->execute();

                    return $this->db->rowCount();

                }
            }

}
}