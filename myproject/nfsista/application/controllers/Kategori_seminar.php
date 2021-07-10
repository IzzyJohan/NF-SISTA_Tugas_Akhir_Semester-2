<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_seminar extends CI_Controller {

    public function index()
	{
        $this->load->model('kategori_seminar_model', 'kategori_seminar');
        $data['list_kategori_seminar']=$this->kategori_seminar->getAll();

        $this->load->view('header');
        $this->load->view('kategori_seminar/index', $data);
        $this->load->view('footer');
	}
}