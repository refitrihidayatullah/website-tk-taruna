<?php
class M_admin_profile extends CI_Model
{
    public function tambah_data($data, $table)
    {
        $this->db->insert('master_profile', $table, $data);
    }
    public function tambah_data_info()
    {
        $data = [
            "informasi" => $this->input->post('informasi', true)
        ];
        $this->db->insert('master_informasi', $data);
    }
    public function tampil_data_info()
    {
        return $this->db->get('master_informasi')->result_array();
    }
    public function tampil_home_1()
    {
        return $this->db->get('master_profile', 1);
    }
    public function tampil_home_2()
    {
        return $this->db->get('master_profile', 1, 1);
    }
    public function tampil_home_3()
    {
        return $this->db->get('master_profile', 1, 2);
    }
    public function tampil_home_4()
    {
        return $this->db->get('master_profile', 1, 3);
    }
    public function tampil_data_content()
    {
        return $this->db->get('master_profile');
    }
    public function getDataByid($id)
    {
        return $this->db->get_where('master_profile', ['id_profile' => $id])->row_array();
    }

    public function edit_foto()
    {
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

            $data = array(
                'foto' => $foto
            );
            $this->db->where('id_profile', $this->input->post('id_profile'));
            $this->db->update('master_profile', $data);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('AdminProfile');
        }
    }
    public function edit_info()
    {
        $data = [
            "informasi" => $this->input->post('informasi', true)
        ];
        $id = $this->input->post('id_info', true);
        $this->db->where('id_info', $id);
        $this->db->update('master_informasi', $data);
    }
    public function total_data()
    {
        $query = $this->db->get('master_profile');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function total_data_info()
    {
        $query = $this->db->get('master_informasi');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function hapus_data($id)
    {
        $this->db->where('id_profile', $id);
        $this->db->delete('master_profile');
    }
    public function hapus_data_info($id)
    {
        $this->db->where('id_info', $id);
        $this->db->delete('master_informasi');
        $this->session->set_flashdata('flashinfo', 'Berhasil dihapus');
        redirect('AdminProfile');
    }
    public function ubah()
    {
        $data = [
            "judul_profile" => $this->input->post('judul_profile', true),
            "deskripsi_profile" => $this->input->post('deskripsi_profile', true)
        ];
        $this->db->where('id_profile', $this->input->post('id_profile'));
        $this->db->update('master_profile', $data);
    }
}
