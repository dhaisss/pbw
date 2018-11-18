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
        $this->db->bind('kelurahan', 1);
        $this->db->bind('level', 3);
        $this->db->bind('noKTP', $data['noktp']);
        $this->db->bind('noTelepon', '0');
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
}