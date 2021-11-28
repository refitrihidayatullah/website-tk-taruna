<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('M_admin');
        $this->load->library('form_validation');
    }


    // controller admin dashboard
    public function index()
    {
        $data['halaman'] = "Dashboard";
        $data['admin'] = $this->M_admin->tampil_data()->result_array();
        $data['status'] = $this->M_admin->tampil_status()->result_array();
        $this->load->view('backend/header', $data);
        $this->load->view('admin/v_admin', $data);
        $this->load->view('backend/footer');
    }
    public function tambah()
    {
        $data['admin'] = $this->M_admin->tampil_data()->result_array();
        $data['status'] = $this->M_admin->tampil_status()->result_array();

        $this->M_admin->proses_tambah();
        $this->load->view('backend/header');
        $this->load->view('admin/v_admin', $data);
        $this->load->view('backend/footer');
    }
}
