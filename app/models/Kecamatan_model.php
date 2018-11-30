<?php

class Kecamatan_model {
    private $table = 'kecamatan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKecamatan()
    {
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }


    public function getKecamatanById($id)
    {
        $this->db->query('SELECT * FROM '. $this->table.' WHERE idKecamatan = '.$id);
        return $this->db->single();
    }

}