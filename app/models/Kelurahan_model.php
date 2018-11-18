<?php

class Kelurahan_model {
    private $table = 'kelurahan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKelurahan()
    {
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function getKelurahanbyId ($id)
    {
        $this->db->query('SELECT * FROM'. $this->table . 'WHERE id=id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }
}