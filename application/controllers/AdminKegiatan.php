<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminKegiatan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        // $this->load->model('m_admin_kegiatan');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['halaman'] = "Keg Pembelajaran";
        $this->load->view('backend/header', $data);
        $this->load->view('admin/kegiatan/v_kegiatan');
        $this->load->view('backend/footer');
    }
}
