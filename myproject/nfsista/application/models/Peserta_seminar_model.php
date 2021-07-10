<?php
class Peserta_seminar_model extends CI_Model {
    
    public function getAll() {
        // SELECT * FROM peserta_seminar;
        $query = $this->db->get('peserta_seminar');
        return $query;
    }

    public function findById($id){
        $query = $this->db->get_where('peserta_seminar', array('id' => $id));
        return $query->row();
        //SELECT * FROM peserta_seminar where id = 1;
    }

    public function getAllseminar() {
        // SELECT * FROM seminar_ta;
        $query = $this->db->get('seminar_ta');
        return $query;
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO peserta_seminar (nim,nama,seminar_id,kehadiran) VALUES (?,?,?,?)";
        $this->db->query($sql, $data);
    }

    public function update($data){
        // UPDATE peserta_seminar SET ...
        $sql = "UPDATE peserta_seminar SET nim=?,nama=?,seminar_id=?,kehadiran=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function delete($data){
        $sql = "DELETE FROM peserta_seminar WHERE id=?";
        $this->db->query($sql, $data);
    }
}
