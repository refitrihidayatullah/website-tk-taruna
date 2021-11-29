<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminProfile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('m_admin_profile');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['halaman'] = "Profile Sekolah";
        $data['total_info'] = $this->m_admin_profile->total_data_info();
        $data['total'] = $this->m_admin_profile->total_data();
        $data['tampil_info'] = $this->m_admin_profile->tampil_data_info();
        $data['tampil_content'] = $this->m_admin_profile->tampil_data_content()->result_array();
        $this->load->view('backend/header', $data);
        $this->load->view('admin/profile/v_profile_sekolah', $data);
        $this->load->view('backend/footer');
    }
    public function tambah()
    {
        $this->load->view('backend/header');
        $this->load->view('admin/profile/v_tambah_profile');
        $this->load->view('backend/footer');
    }
    public function tambah_info()
    {
        $this->form_validation->set_rules('informasi', 'Data Informasi', 'required');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $this->m_admin_profile->tambah_data_info();
            $this->session->set_flashdata('flashinfo', 'Berhasil ditambahkan');
            redirect('AdminProfile');
        }
    }
    public function ubah($id)
    {
        $data['tampilall'] = $this->m_admin_profile->getDataByid($id);
        $data['halaman'] = "ubah data";
        $this->form_validation->set_rules('judul_profile', 'Judul content', 'required');
        $this->form_validation->set_rules('deskripsi_profile', 'Deskripsi content', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/header', $data);
            $this->load->view('admin/profile/v_ubah_profile', $data);
            $this->load->view('backend/footer');
        } else {
            $this->m_admin_profile->ubah();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('AdminProfile');
        }
    }
    public function proses_edit_foto()
    {
        $this->m_admin_profile->edit_foto();
    }
    public function proses_edit_info()
    {
        $this->form_validation->set_rules('informasi', 'Informasi', 'required');
        if ($this->form_validation->run() == false) {

            $this->session->set_flashdata('flashinfo', 'terjadi kesalahan harap mengisi kembali!');
            $this->index();
        } else {

            $this->m_admin_profile->edit_info();
            $this->session->set_flashdata('flashinfo', 'Berhasil diubah');
            redirect('AdminProfile');
        }
    }
    public function delete($id)
    {
        $this->m_admin_profile->hapus_data($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('AdminProfile');
    }
    public function delete_info($id)
    {
        $this->m_admin_profile->hapus_data_info($id);
    }

    public function tambah_aksi()
    {

        $this->form_validation->set_rules('judul_profile', 'Judul content', 'required');
        $this->form_validation->set_rules('deskripsi_profile', 'Deskripsi content', 'required');
        // $this->form_validation->set_rules('userfile', 'Foto content', 'required');


        if ($this->form_validation->run() == false) {
            $this->tambah();
        } else {

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|PNG';
            $config['max_size']             = 10000;
            $config['max_width']            = 10000;
            $config['max_height']           = 10000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {
                echo "gagal";
            } else {
                $foto = $this->upload->data();
                $foto = $foto['file_name'];
                $judul = $this->input->post('judul_profile', true);
                $deskripsi = $this->input->post('deskripsi_profile', true);

                $data = array(
                    'judul_profile' => $judul,
                    'deskripsi_profile' => $deskripsi,
                    'foto' => $foto,
                );
                $this->db->insert('master_profile', $data);
                $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('AdminProfile');
            }
        }
    }
}
