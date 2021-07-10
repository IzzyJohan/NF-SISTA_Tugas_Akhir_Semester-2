<?php
class Seminar_ta_model extends CI_Model {

    public function getAll() {
        // SELECT * FROM seminar_ta;
        $query = $this->db->get('seminar_ta');
        return $query;
    }

    public function getAlldosen() {
        // SELECT * FROM dosen;
        $query = $this->db->get('dosen');
        return $query;
    }

    public function getAllkategori() {
        // SELECT * FROM kategori_seminar;
        $query = $this->db->get('kategori_seminar');
        return $query;
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO seminar_ta (semester,tanggal,jam,kategori_seminar_id,nim,nama_mahasiswa,judul,pembimbing_id,
        penguji1_id,penguji2_id,nilai_pembimbing,nilai_penguji1,nilai_penguji2,lokasi,nilai_akhir) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
    }
}

