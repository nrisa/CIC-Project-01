<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komisi extends CI_Controller 
{

    public function index()
    {
        $data['title'] = 'B-community';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('komisi/komisi', $data);
        $this->load->view('templates/footer');
    }

    public function statement()
    {
        $data['title'] = 'B-community';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('komisi/statement', $data);
        $this->load->view('templates/footer');
    }

    public function wallet()
    {
        $data['title'] = 'B-community';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('komisi/wallet', $data);
        $this->load->view('templates/footer');
    }

    public function withdraw()
    {
        $data['title'] = 'B-community';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('komisi/withdraw', $data);
        $this->load->view('templates/footer');
    }
}
