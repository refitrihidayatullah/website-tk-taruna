<?php
class m_admin_kegiatan extends CI_Model
{
    public function tambah_data_kegiatan()
    {
        $data = [
            "kode_menu" => $this->input->post('kode_menu', true),
            "judul_menu" => $this->input->post('judul_menu', true),
            "deskripsi_menu" => $this->input->post('deskripsi_menu', true),
        ];
        $this->db->insert('master_menu', $data);
    }
    public function tampil_data()
    {
        return $this->db->get('master_menu');
    }
    public function ubah_data_kegiatan()
    {
        $data = [
            "judul_menu" => $this->input->post('judul_menu', true),
            "deskripsi_menu" => $this->input->post('deskripsi_menu', true)
        ];
        $this->db->where('id_menu', $this->input->post('id_menu'));
        $this->db->update('master_menu', $data);
    }
    public function total_data_kegiatan()
    {
        $query = $this->db->get('master_menu');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function hapus_data_kegiatan($id)
    {
        $this->db->where('id_menu', $id);
        $this->db->delete('master_menu');
        $this->session->set_flashdata('flashkeg', 'Berhasil dihapus');
        redirect('AdminKegiatan');
    }
}
