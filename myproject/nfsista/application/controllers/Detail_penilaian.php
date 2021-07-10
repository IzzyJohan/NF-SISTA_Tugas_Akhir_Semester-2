<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_penilaian extends CI_Controller {

    public function index()
	{
        $this->load->model('detail_penilaian_model', 'detail_penilaian');
        $data['list_detail_penilaian']=$this->detail_penilaian->getAll();

        $this->load->view('header');
        $this->load->view('detail_penilaian/index', $data);
        $this->load->view('footer');
	}

    public function tambah()
	{
        $this->load->model('detail_penilaian_model', 'detail_penilaian');
        $data['list_seminar']=$this->detail_penilaian->getAllseminar();

        $this->load->model('detail_penilaian_model', 'detail_penilaian');
        $data['list_dosen']=$this->detail_penilaian->getAlldosen();

        $this->load->model('detail_penilaian_model', 'detail_penilaian');
        $data['list_penilaian']=$this->detail_penilaian->getAllpenilaian();

        $this->load->view('header');
        $this->load->view('detail_penilaian/tambah', $data);
        $this->load->view('footer');
	}

    public function save()
	{
        $this->load->model('detail_penilaian_model', 'detail_penilaian');
        $_dosen_id = $this->input->post('dosen_id');
        $_seminar_id = $this->input->post('seminar_id');
        $_penilaian_id = $this->input->post('penilaian_id');
        $_nilai = $this->input->post('nilai');
    
        $data_detail_penilaian['dosen_id']=$_dosen_id;
        $data_detail_penilaian['seminar_id']=$_seminar_id; 
        $data_detail_penilaian['penilaian_id']=$_penilaian_id;
        $data_detail_penilaian['nilai']=$_nilai;

        $this->detail_penilaian->simpan($data_detail_penilaian);

        redirect('detail_penilaian', 'refresh');
        $data['list_detail_penilaian']=$this->detail_penilaian->getAll();

    }
}