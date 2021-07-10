<?php
class Detail_penilaian_model extends CI_Model {

    public function getAll() {
        // SELECT * FROM detail_penilainan;
        $query = $this->db->get('detail_penilaian');
        return $query;
    }
    
    public function findById($id){
        $query = $this->db->get_where('detail_penilaian', array('id' => $id));
        return $query->row();
        //SELECT * FROM detail_penilaian where id = 1;
    }

    public function getAllseminar() {
        $query = $this->db->get('seminar_ta');
        return $query;
    }

    public function getAlldosen() {
        $query = $this->db->get('dosen');
        return $query;
    }

    public function getAllpenilaian() {
        $query = $this->db->get('penilaian');
        return $query;
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO detail_penilaian (dosen_id,seminar_id,penilaian_id,nilai) VALUES (?,?,?,?)";
        $this->db->query($sql, $data);
    }
}