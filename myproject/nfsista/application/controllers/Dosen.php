<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

    public function index()
	{
        $this->load->model('dosen_model', 'dosen');
        $data['list_dosen']=$this->dosen->getAll();

        $this->load->view('header');
        $this->load->view('dosen/index', $data);
        $this->load->view('footer');
	}

    public function create()
	{
        $data[]='';
        $this->load->view('header');
        $this->load->view('dosen/form', $data);
        $this->load->view('footer');
	}

    public function save()
	{
        $this->load->model('dosen_model', 'dosen');
        $_nidn = $this->input->post('nidn');
        $_nama = $this->input->post('nama');
        $_idedit = $this->input->post('idedit');

        $data_dosen['nidn']=$_nidn; //? 1
        $data_dosen['nama']=$_nama; //? 2

        if (!empty($_idedit)){ //update
            $data_dosen['id']=$_idedit; //? 3
            $this->dosen->update($data_dosen);

        }
        else{ //data baru
            $this->dosen->simpan($data_dosen);
        }

        redirect('dosen', 'refresh');

        $data['list_dosen']=$this->dosen->getAll();
        
        /*
        $this->load->view('header');
        $this->load->view('dosen/index', $data);
        $this->load->view('footer');*/ // dirubah ke redirect
	}

    public function edit($id)
    {
        $this->load->model('dosen_model', 'dosen');
        $obj_dosen = $this->dosen->findById($id);
        $data['objdosen'] = $obj_dosen;

        $this->load->view('header');
        $this->load->view('dosen/edit',$data);
        $this->load->view('footer');
    }

    public function delete($id){
        $this->load->model('dosen_model', 'dosen');
        $data_dosen['id']=$id;
        // pastikan role diperkenankan
        $this->dosen->delete($data_dosen);
        redirect('dosen','refresh');
    }
}
