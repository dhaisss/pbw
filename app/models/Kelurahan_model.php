<?php

class Kelurahan_model
{
    private $table = 'kelurahan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKelurahan()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getKelurahanbyId($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE kecamatan=:id');
        $this->db->bind(':id', $id);
        return $this->db->resultSet();
    }

    public function getKelurahanId($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idKelurahan=:id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function getDetailbyId($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' kl JOIN kecamatan kc ON kc.idKecamatan = kl.kecamatan WHERE idKelurahan=:id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function getTotalDana($id)
    {
        $this->db->query('SELECT (danaDesa+alokasiDana+pendapatan+pajakDaerah) As total ' . $this->table . ' kl JOIN kecamatan kc ON kc.idKecamatan = kl.kecamatan WHERE idKelurahan=:id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function getSilpa($id)
    {
        $this->db->query('SELECT (danaDesa+alokasiDana+pendapatan+pajakDaerah)-SUM(belanja) FROM Belanja bl JOIN kelurahan kl ON kl.idKelurahan = bl.kelurahan WHERE kelurahan=:id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function getBelanja($id)
    {
        $this->db->query('SELECT * FROM Belanja bl JOIN kelurahan kl ON kl.idKelurahan = bl.kelurahan JOIN bidang b ON bl.bidang = b.idBidang  WHERE kelurahan=:id');
        $this->db->bind(':id', $id);
        return $this->db->resultSet();
    }
    public function getRincian1($id){
        $this->db->query('SELECT * FROM Belanja bl JOIN kelurahan kl ON kl.idKelurahan = bl.kelurahan JOIN bidang b ON bl.bidang = b.idBidang  WHERE kelurahan=:id AND bidang = 1');
        $this->db->bind(':id', $id);
        return $this->db->resultSet();
    }
    public function getRincian2($id){
        $this->db->query('SELECT * FROM Belanja bl JOIN kelurahan kl ON kl.idKelurahan = bl.kelurahan JOIN bidang b ON bl.bidang = b.idBidang  WHERE kelurahan=:id AND bidang = 2');
        $this->db->bind(':id', $id);
        return $this->db->resultSet();
    }
    public function getRincian3($id){
        $this->db->query('SELECT * FROM Belanja bl JOIN kelurahan kl ON kl.idKelurahan = bl.kelurahan JOIN bidang b ON bl.bidang = b.idBidang  WHERE kelurahan=:id AND bidang = 3');
        $this->db->bind(':id', $id);
        return $this->db->resultSet();
    }
    public function getRincian4($id){
        $this->db->query('SELECT * FROM Belanja bl JOIN kelurahan kl ON kl.idKelurahan = bl.kelurahan JOIN bidang b ON bl.bidang = b.idBidang  WHERE kelurahan=:id AND bidang = 4');
        $this->db->bind(':id', $id);
        return $this->db->resultSet();
    }



}