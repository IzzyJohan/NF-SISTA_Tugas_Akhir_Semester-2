<?php
class Penilaian_model extends CI_Model {

    public function getAll() {
        // SELECT * FROM penilaian;
        $query = $this->db->get('penilaian');
        return $query;
    }
}