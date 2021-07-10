<?php
class Dosen_model extends CI_Model {

    public function getAll() {
        // SELECT * FROM dosen;
        $query = $this->db->get('dosen');
        return $query;
    }

    public function findById($id){
        $query = $this->db->get_where('dosen', array('id' => $id));
        return $query->row();
        //SELECT * FROM dosen where id = 1;
    }

    public function simpan($data)
    {
        //INSERT INTO dosen (nidn, nama) VALUES ('111', 'Budi')
        $sql = "INSERT INTO dosen (nidn,nama) VALUES (?,?)";
        //$this->db->query($sql, array('111', 'budi'));
        $this->db->query($sql, $data);
    }

    public function update($data){
        // UPDATE dosen SET nidn='111', nama='budi', WHERE id='1'
        $sql = "UPDATE dosen SET nidn=?,nama=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function delete($data){
        $sql = "DELETE FROM dosen WHERE id=?";
        $this->db->query($sql, $data);
    }
}
