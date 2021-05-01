<?php

class Pengembalian_m extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_pengembalian');
        $query = $this->db->get();
        return $query;
    }

    public function getByID($id){
        $this->db->select('*');
        $this->db->from('tb_pengembalian');
        $this->db->where('pengembalianID', $id);
        $query = $this->db->get();
        return $query;
    }

    

    public function addBuku($post){
        $params = array(     
            'bukuNo' => $post['noBuku'],
            'bukuNama' => $post['namaBuku'],
            'bukuKategori' => $post['kategoriBuku'],
        );
        $query = $this->db->insert('tb_pengembalian', $params);
        return $query;
    }

    public function updateBuku($post){
        $params = array(     
            'bukuNo' => $post['noBuku'],
            'bukuNama' => $post['namaBuku'],
            'bukuKategori' => $post['kategoriBuku'],
        );
        $this->db->where('pengembalianID', $post['idBuku']);
        $query = $this->db->update('tb_pengembalian', $params);
        return $query;
    }

    public function delBuku($id){
        $this->db->where('pengembalianID', $id);
        $this->db->delete('tb_pengembalian');
    }

    

    

}



?>