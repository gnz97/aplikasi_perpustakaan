<?php

class Buku_m extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_buku');
        $query = $this->db->get();
        return $query;
    }

}



?>