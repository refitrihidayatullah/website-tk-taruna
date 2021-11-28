<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('M_admin_profile');
    }


    public function index()
    {

        $data['tampildata'] = $this->M_admin_profile->tampil_home_1()->result_array();
        $data['tampildata2'] = $this->M_admin_profile->tampil_home_2()->result_array();
        $data['tampildata3'] = $this->M_admin_profile->tampil_home_3()->result_array();
        $data['tampildata4'] = $this->M_admin_profile->tampil_home_4()->result_array();
        $data['info'] = $this->M_admin_profile->tampil_data_info();
        $this->load->view('frontend/header');
        $this->load->view('v_profile_sekolah', $data);
        $this->load->view('frontend/footer');
    }
}
