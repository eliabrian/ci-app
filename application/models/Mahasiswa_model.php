<?php

class Mahasiswa_model extends CI_Model{
    public function getAllMahasiswa(){
        $query = $this->db->get('mahasiswa')->result_array();
        return $query;
    }

    public function tambahDataMahasiswa(){
        $data = [
            "nim" => $this->input->post('nim', true),
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        ];

        $this->db->insert('mahasiswa', $data);
    }

    public function ubahDataMahasiswa(){
        $data = [
            "nim" => $this->input->post('nim', true),
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        ];
        $this->db->where('id', $this->input->post('id', true));
        $this->db->update('mahasiswa', $data);
    }

    public function hapusDataMahasiswa($id){
        // $this->db->where('id', $id);
        $this->db->delete('mahasiswa', ['id' => $id]);
    }

    public function getMahasiswaById($id){
        $query = $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
        return $query;
    }

    public function cariDataMahasiswa(){
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nim', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
}

?>