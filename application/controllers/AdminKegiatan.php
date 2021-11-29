<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminKegiatan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('m_admin_kegiatan');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['halaman'] = "Keg Pembelajaran";
        $data['total_kegiatan'] = $this->m_admin_kegiatan->total_data_kegiatan();
        $data['tampil'] = $this->m_admin_kegiatan->tampil_data()->result_array();
        $this->load->view('backend/header', $data);
        $this->load->view('admin/kegiatan/v_kegiatan', $data);
        $this->load->view('backend/footer');
    }
    public function tambah_kegiatan()
    {
        $this->form_validation->set_rules('judul_menu', 'Judul Kegiatan', 'required');
        $this->form_validation->set_rules('deskripsi_menu', 'Deskripsi Kegiatan', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('flashkeg', 'terjadi kesalahan harap mengisi kembali!');
            $this->index();
        } else {
            $this->m_admin_kegiatan->tambah_data_kegiatan();
            $this->session->set_flashdata('flashkeg', 'Berhasil diubah');
            redirect('AdminKegiatan');
        }
    }
    public function ubah_kegiatan()
    {
        $this->form_validation->set_rules('judul_menu', 'Judul Kegiatan', 'required');
        $this->form_validation->set_rules('deskripsi_menu', 'Deskripsi Kegiatan', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('flashkeg', 'terjadi kesalahan harap mengisi kembali!');
            $this->index();
        } else {
            $this->m_admin_kegiatan->ubah_data_kegiatan();
            $this->session->set_flashdata('flashkeg', 'Berhasil diubah');
            redirect('AdminKegiatan');
        }
    }
    public function delete_kegiatan($id)
    {
        $this->m_admin_kegiatan->hapus_data_kegiatan($id);
    }
}
