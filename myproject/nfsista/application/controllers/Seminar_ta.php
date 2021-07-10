<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seminar_ta extends CI_Controller {

    public function index()
	{
        $this->load->model('seminar_ta_model', 'seminar_ta');
        $data['list_seminar_ta']=$this->seminar_ta->getAll();

        $this->load->view('header');
        $this->load->view('seminar_ta/index', $data);
        $this->load->view('footer');
	}

    public function daftar()
	{
        $this->load->model('seminar_ta_model', 'seminar_ta');
        $data['list_dosen']=$this->seminar_ta->getAlldosen();

        $this->load->model('seminar_ta_model', 'seminar_ta');
        $data['list_kategori_seminar']=$this->seminar_ta->getAllkategori();

        $data[]='';
        $this->load->view('header');
        $this->load->view('seminar_ta/daftar', $data);
        $this->load->view('footer');
	}

    public function save()
	{
        $this->load->model('seminar_ta_model', 'seminar_ta');
        $_semester = $this->input->post('semester');
        $_tanggal = $this->input->post('tanggal');
        $_jam = $this->input->post('jam');
        $_kategori_seminar_id = $this->input->post('kategori_seminar_id');
        $_nim = $this->input->post('nim');
        $_nama_mahasiswa = $this->input->post('nama_mahasiswa');
        $_judul = $this->input->post('judul');
        $_pembimbing_id = $this->input->post('pembimbing_id');
        $_penguji1_id = $this->input->post('penguji1_id');
        $_penguji2_id = $this->input->post('penguji2_id');
        $_nilai_pembimbing = $this->input->post('nilai_pembimbing');
        $_nilai_penguji1 = $this->input->post('nilai_penguji1');
        $_nilai_penguji2 = $this->input->post('nilai_penguji2');
        $_lokasi = $this->input->post('lokasi');
        $_nilai_akhir = $this->input->post('nilai_akhir');

        $data_seminar_ta['semester']=$_semester; 
        $data_seminar_ta['tanggal']=$_tanggal; 
        $data_seminar_ta['jam']=$_jam;
        $data_seminar_ta['kategori_seminar_id']=$_kategori_seminar_id;
        $data_seminar_ta['nim']=$_nim;
        $data_seminar_ta['nama_mahasiswa']=$_nama_mahasiswa;
        $data_seminar_ta['judul']=$_judul;
        $data_seminar_ta['pembimbing_id']=$_pembimbing_id;
        $data_seminar_ta['penguji1_id']=$_penguji1_id;
        $data_seminar_ta['penguji2_id']=$_penguji2_id;
        $data_seminar_ta['nilai_pembimbing']=$_nilai_pembimbing;         
        $data_seminar_ta['nilai_penguji1']=$_nilai_penguji1;
        $data_seminar_ta['nilai_penguji2']=$_nilai_penguji2;
        $data_seminar_ta['lokasi']=$_lokasi;
        $data_seminar_ta['nilai_akhir']=$_nilai_akhir;

        $this->seminar_ta->simpan($data_seminar_ta);
        redirect('seminar_ta', 'refresh');
    }
         
        /*if (!empty($_idedit)){ //update
            $data_dosen['id']=$_idedit; //? 3
            $this->dosen->update($data_dosen);

        }
        else{ //data baru
            $this->dosen->simpan($data_dosen);
        }*/
}
