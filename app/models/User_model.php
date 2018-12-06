<?php

class User_model {
    private $table = 'users';
    private $db;

    public function __construct()
    {
    $this->db = new Database;
    }

    public function getAllusers()
    {
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function getUsersbyId ($id)
    {
        $this->db->query('SELECT * FROM'. $this->table . 'WHERE id=id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function getUserByEmail($email)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email=:email');
        $this->db->bind('email',$email);
        return $this->db->single();
    }

    public function updateKades($data,$id)
    {

        if ($_SESSION['email'] != $data['email']) {
            $hasilEmail['user'] = $this->getUserByEmail($data['email']);
            if (!empty($hasilEmail['user']['email']) > 0) {
                return 'emailada';
            }
        } else {

            if ($_FILES['foto']['name'] == null) {
                $query = "UPDATE `users` SET `nama`=:nama,`email`=:email,`alamat`=:alamat,`noKTP`=:noKTP,`noTelepon`=:noTelepon WHERE id=" . $id;

                $this->db->query($query);


                $this->db->bind('nama', $data['name']);
                $this->db->bind('email', $data['email']);
                $this->db->bind('alamat', $data['alamat']);
                $this->db->bind('noKTP', $data['noKTP']);
                $this->db->bind('noTelepon', $data['noTelepon']);

                $this->db->execute();

                $_SESSION['nama'] = $data['name'];
                $_SESSION['email'] = $data['email'];

                $_SESSION['noTelepon'] =$data['noTelepon'];

                $_SESSION['alamat'] =$data['alamat'];
                $_SESSION['noKTP'] =$data['noKTP'];

                return $this->db->rowCount();

            } else {
                $nama = $_FILES['foto']['name'];
                $asal = $_FILES['foto']['tmp_name'];
                $namaFile = 'image/' . basename($nama);
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
                    $query = "UPDATE `users` SET `nama`=:nama,`email`=:email,`alamat`=:alamat,`noKTP`=:noKTP,`noTelepon`=:noTelepon,`foto`=:foto WHERE id=" . $id;


                    $this->db->query($query);

                    $this->db->bind('nama', $data['name']);
                    $this->db->bind('email', $data['email']);
                    $this->db->bind('alamat', $data['alamat']);
                    $this->db->bind('noKTP', $data['noKTP']);
                    $this->db->bind('noTelepon', $data['noTelepon']);
                    $this->db->bind('foto', $nama);

                    $this->db->execute();

                    $_SESSION['nama'] = $data['name'];
                    $_SESSION['email'] = $data['email'];
                    $_SESSION['foto'] = $nama;
                    $_SESSION['noTelepon'] =$data['noTelepon'];
                    $_SESSION['alamat'] =$data['alamat'];
                    $_SESSION['noKTP'] =$data['noKTP'];

                    return $this->db->rowCount();

                }
            }
        }
    }

    public function update($data,$id)
    {

        if ($_SESSION['email'] != $data['email']) {
            $hasilEmail['user'] = $this->getUserByEmail($data['email']);
            if (!empty($hasilEmail['user']['email']) > 0) {
                return 'emailada';
            }
        } else {

            if ($_FILES['foto']['name'] == null) {
                $query = "UPDATE `users` SET `nama`=:nama,`email`=:email,`alamat`=:alamat,`kecamatan`=:kecamatan,`kelurahan`=:kelurahan,`noKTP`=:noKTP,`noTelepon`=:noTelepon WHERE id=" . $id;

                $this->db->query($query);


                $this->db->bind('nama', $data['name']);
                $this->db->bind('email', $data['email']);
                $this->db->bind('alamat', $data['alamat']);
                $this->db->bind('kecamatan', $data['kecamatan']);
                $this->db->bind('kelurahan', $data['kelurahan']);
                $this->db->bind('noKTP', $data['noKTP']);
                $this->db->bind('noTelepon', $data['noTelepon']);

                $this->db->execute();

                    $_SESSION['nama'] = $data['name'];
                    $_SESSION['email'] = $data['email'];
                    $_SESSION['kelurahan'] = $data['kelurahan'];
                    $_SESSION['noTelepon'] =$data['noTelepon'];
                    $_SESSION['kecamatan'] =$data['kecamatan'];
                    $_SESSION['alamat'] =$data['alamat'];
                    $_SESSION['noKTP'] =$data['noKTP'];

                return $this->db->rowCount();

            } else {
                $nama = $_FILES['foto']['name'];
                $asal = $_FILES['foto']['tmp_name'];
                $namaFile = 'image/' . basename($nama);
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
                    $query = "UPDATE `users` SET `nama`=:nama,`email`=:email,`alamat`=:alamat,`kecamatan`=:kecamatan,`kelurahan`=:kelurahan,`noKTP`=:noKTP,`noTelepon`=:noTelepon,`foto`=:foto WHERE id=" . $id;


                    $this->db->query($query);

                    $this->db->bind('nama', $data['name']);
                    $this->db->bind('email', $data['email']);
                    $this->db->bind('alamat', $data['alamat']);
                    $this->db->bind('kecamatan', $data['kecamatan']);
                    $this->db->bind('kelurahan', $data['kelurahan']);
                    $this->db->bind('noKTP', $data['noKTP']);
                    $this->db->bind('noTelepon', $data['noTelepon']);
                    $this->db->bind('foto', $nama);

                    $this->db->execute();

                        $_SESSION['nama'] = $data['name'];
                        $_SESSION['email'] = $data['email'];
                        $_SESSION['foto'] = $nama;
                        $_SESSION['kelurahan'] = $data['kelurahan'];
                        $_SESSION['noTelepon'] =$data['noTelepon'];
                        $_SESSION['kecamatan'] =$data['kecamatan'];
                        $_SESSION['alamat'] =$data['alamat'];
                        $_SESSION['noKTP'] =$data['noKTP'];

                    return $this->db->rowCount();

                }
            }
        }
    }

    public function register($data){
        $password = password_hash($data['password'], PASSWORD_DEFAULT);

        $hasilEmail['user'] = $this->getUserByEmail($data['email']);
        if (!empty($hasilEmail['user']['email']) > 0) {
            return 'emailada' ;
        }
        $query = "INSERT INTO users 
                  VALUES 
                  ('', :nama, :email, :alamat, :kecamatan, :kelurahan, :level, :noKTP, :noTelepon, :password, :foto )";


        $this->db->query($query);

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('kecamatan', $data['kecamatan']);
        $this->db->bind('kelurahan', $data['kelurahan']);
        $this->db->bind('level', 3);
        $this->db->bind('noKTP', $data['noktp']);
        $this->db->bind('noTelepon', '-');
        $this->db->bind('password', $password);
        $this->db->bind('foto', 'foto.jpg');

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function registerKades($data){
        $password = password_hash($data['password'], PASSWORD_DEFAULT);

        $hasilEmail['user'] = $this->getUserByEmail($data['email']);
        if (!empty($hasilEmail['user']['email']) > 0) {
            return 'emailada' ;
        }
        $query = "INSERT INTO users 
                  VALUES 
                  ('', :nama, :email, :alamat, :kecamatan, :kelurahan, :level, :noKTP, :noTelepon, :password, :foto )";


        $this->db->query($query);

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('kecamatan', $data['kecamatan']);
        $this->db->bind('kelurahan', $data['kelurahan']);
        $this->db->bind('level', 2);
        $this->db->bind('noKTP', $data['noKTP']);
        $this->db->bind('noTelepon', '-');
        $this->db->bind('password', $password);
        $this->db->bind('foto', 'foto.jpg');

        $this->db->execute();

        return $this->db->rowCount();

    }


    public function loginUser($data)
    {
        $dataUser = $this->getHash($data['email']);
        if (password_verify($data['password'], $dataUser['password'])) {

            $_SESSION['id_user'] = $dataUser['id'];
            $_SESSION['nama'] = $dataUser['nama'];
            $_SESSION['email'] = $dataUser['email'];
            $_SESSION['level'] = $dataUser['level'];
            $_SESSION['foto'] = $dataUser['foto'];
            $_SESSION['kelurahan'] = $dataUser['kelurahan'];
            $_SESSION['noTelepon'] =$dataUser['noTelepon'];
            $_SESSION['kecamatan'] =$dataUser['kecamatan'];
            $_SESSION['alamat'] =$dataUser['alamat'];
            $_SESSION['noKTP'] =$dataUser['noKTP'];
            return 1;
        }else{
            return 0;
        }
    }

    public function getHash($email)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email=:email');
        $this->db->bind('email',$email);
        return $this->db->single();
    }

    public function getKades()
    {
        $this->db->query('SELECT * FROM '. $this->table.' u JOIN kelurahan kl ON 
        kl.idKelurahan = u.kelurahan JOIN kecamatan kc ON kc.idKecamatan=u.kecamatan Where level = 2');
        return $this->db->resultSet();
    }

    public function getKadesByGuest($id)
    {
        $this->db->query('SELECT * FROM '. $this->table.' u JOIN kelurahan kl ON 
        kl.idKelurahan = u.kelurahan JOIN kecamatan kc ON kc.idKecamatan=u.kecamatan Where level = 2 AND u.kelurahan ='.$id);
        return $this->db->single();
    }


}