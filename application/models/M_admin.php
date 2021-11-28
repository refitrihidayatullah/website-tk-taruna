<?php
class M_admin extends CI_Model
{
    public function tampil_data()
    {
        $this->db->SELECT('*');
        $this->db->FROM('master_user');
        $this->db->join('master_guru', 'master_user.id_user=master_guru.id_user');
        $this->db->join('master_status', 'master_user.nilai_status=master_status.nilai_status');
        $query = $this->db->get();
        return $query;
    }
    public function tampil_status()
    {
        return $this->db->get('master_status');
    }
    public function proses_tambah()
    {
        $data = [
            "nama_user" => $this->input->post('nama_user', true),
            "email_user" => $this->input->post('email_user', true),
            "password_user" => $this->input->post('password_user', true),
            "nilai_status" => $this->input->post('nilai_status', true),
            "no_hp" => $this->input->post('no_hp', true),
            "alamat" => $this->input->post('alamat', true),
            "foto" => $this->input->post('foto', true)

        ];
        $this->db->SELECT('*');
        $this->db->FROM('master_user');
        $this->db->join('master_guru', 'master_user.id_user=master_guru.id_user');
        $query = $this->db->insert('', $data);

        redirect('admin/index');
    }
}
