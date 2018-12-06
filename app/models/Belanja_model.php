<?php

class Belanja_model {
    private $table = 'belanja';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function insertBelanja($data)
    {

            $query = "INSERT INTO " . $this->table . " 
                  (`idBelanja`, `rincian`, `belanja`, `bidang`, `kelurahan`, `tanggalBelanja`)
                  VALUES ('', :rincian , :belanja , :bidang , :kelurahan ,  curdate() )";


            $this->db->query($query);

            $this->db->bind('rincian', $data['rincian']);
            $this->db->bind('belanja', $data['belanja']);
            $this->db->bind('kelurahan', $_SESSION['kelurahan']);
            $this->db->bind('bidang', $data['bidang']);

            $this->db->execute();

            return $this->db->rowCount();

        }

    public function getBelanjaById($id)
    {
        $this->db->query('SELECT * FROM `belanja` bl JOIN bidang bd ON bd.idBidang=bl.bidang WHERE idBelanja=:id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
    public function updateBelanja($data,$id)
    {

            $query = "UPDATE `belanja` SET `belanja`= ".$data['belanja'].", `rincian`= '".$data['rincian']."', `bidang`= ".$data['bidang']." WHERE idBelanja = ".$id;
            $this->db->query($query);


            $this->db->execute();

            return $this->db->rowCount();



            }




}