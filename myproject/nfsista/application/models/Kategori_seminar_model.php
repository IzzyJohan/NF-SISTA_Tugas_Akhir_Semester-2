<?php
class Kategori_seminar_model extends CI_Model {

    public function getAll() {
        // SELECT * FROM kategori_seminar;
        $query = $this->db->get('kategori_seminar');
        return $query;
    }
}