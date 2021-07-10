<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta_seminar extends CI_Controller {

    public function index()
	{
        $this->load->model('peserta_seminar_model', 'peserta_seminar');
        $data['list_peserta_seminar']=$this->peserta_seminar->getAll();

        $this->load->view('header');
        $this->load->view('peserta_seminar/index', $data);
        $this->load->view('footer');
	}

    public function tambah()
	{
        $this->load->model('peserta_seminar_model', 'peserta_seminar');
        $data['list_seminar']=$this->peserta_seminar->getAllseminar();

        $this->load->view('header');
        $this->load->view('peserta_seminar/tambah', $data);
        $this->load->view('footer');
	}

    public function save()
	{
        $this->load->model('peserta_seminar_model', 'peserta_seminar');
        $_nim = $this->input->post('nim');
        $_nama = $this->input->post('nama');
        $_seminar_id = $this->input->post('seminar_id');
        $_kehadiran = $this->input->post('kehadiran');
        $_idedit = $this->input->post('idedit');
    
        $data_peserta_seminar['nim']=$_nim; 
        $data_peserta_seminar['nama']=$_nama; 
        $data_peserta_seminar['seminar_id']=$_seminar_id;
        $data_peserta_seminar['kehadiran']=$_kehadiran;

        if (!empty($_idedit)){ //update
            $data_peserta_seminar['id']=$_idedit; //? 3
            $this->peserta_seminar->update($data_peserta_seminar);

        }
        else{ //data baru
            $this->peserta_seminar->simpan($data_peserta_seminar);
        }

        redirect('peserta_seminar', 'refresh');
        $data['list_peserta_seminar']=$this->peserta_seminar->getAll();
    }

    public function edit($id)
    {
        $this->load->model('peserta_seminar_model', 'peserta_seminar');
        $data['list_seminar']=$this->peserta_seminar->getAllseminar();
        $obj_peserta_seminar = $this->peserta_seminar->findById($id);
        $data['objpeserta_seminar'] = $obj_peserta_seminar;

        $this->load->view('header');
        $this->load->view('peserta_seminar/edit',$data);
        $this->load->view('footer');
    }

    public function delete($id){
        $this->load->model('peserta_seminar_model', 'peserta_seminar');
        $data_peserta_seminar['id']=$id;
        // pastikan role diperkenankan
        $this->peserta_seminar->delete($data_peserta_seminar);
        redirect('peserta_seminar', 'refresh');
    }
}