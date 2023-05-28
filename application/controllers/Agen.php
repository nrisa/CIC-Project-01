<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agen extends CI_Controller 
{

    public function index()
    {
        $data['title'] = 'Angga Web';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('agen/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function list()
    {
        $data['title'] = 'Angga Web';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('agen/list', $data);
        $this->load->view('templates/footer');
    }

    public function jaringan()
    {
        $data['title'] = 'Angga Web';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('agen/jaringan', $data);
        $this->load->view('templates/footer');
    }

    public function pohon()
    {
        $data['title'] = 'Angga Web';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('agen/pohon', $data);
        $this->load->view('templates/footer');
    }
}