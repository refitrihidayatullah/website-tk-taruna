<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{


    public function index()
    {
        $this->load->view('frontend/header');
        $this->load->view('v_guru');
        $this->load->view('frontend/footer');
    }
}
