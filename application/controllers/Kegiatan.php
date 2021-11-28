<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{


    public function index()
    {
        $this->load->view('frontend/header');
        $this->load->view('v_kegiatan');
        $this->load->view('frontend/footer');
    }
}
