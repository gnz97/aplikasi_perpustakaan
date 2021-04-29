<?php

class Buku_m extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_buku');
        $query = $this->db->get();
        return $query;
    }

    public function getByID($id){
        $this->db->select('*');
        $this->db->from('tb_buku');
        $this->db->where('bukuID', $id);
        $query = $this->db->get();
        return $query;
    }

    

    public function addBuku($post){
        $params = array(     
            'bukuNo' => $post['noBuku'],
            'bukuNama' => $post['namaBuku'],
            'bukuKategori' => $post['kategoriBuku'],
        );
        $query = $this->db->insert('tb_buku', $params);
        return $query;
    }

    public function updateBuku($post){
        $params = array(     
            'bukuNo' => $post['noBuku'],
            'bukuNama' => $post['namaBuku'],
            'bukuKategori' => $post['kategoriBuku'],
        );
        $this->db->where('bukuID', $post['idBuku']);
        $query = $this->db->update('tb_buku', $params);
        return $query;
    }

    public function delBuku($id){
        $this->db->where('bukuID', $id);
        $this->db->delete('tb_buku');
    }

    

    

}



?>