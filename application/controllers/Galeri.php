<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{


    public function index()
    {
        $this->load->view('frontend/header');
        $this->load->view('v_galeri');
        $this->load->view('frontend/footer');
    }
}
