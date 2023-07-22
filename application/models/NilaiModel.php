<?php
class NilaiModel extends CI_Model {

    public function get_all_nilai() {
        $this->db->select('Nilai.*, Taruna.Nama as Taruna_Name, Matakuliah.Matakuliah as Matakuliah_Name');
        $this->db->from('Nilai');
        $this->db->join('Taruna', 'Taruna.ID = Nilai.Taruna');
        $this->db->join('Matakuliah', 'Matakuliah.ID = Nilai.Matakuliah');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_nilai($id) {
        $this->db->select('Nilai.*, Taruna.Nama as Taruna_Name, Matakuliah.Matakuliah as Matakuliah_Name');
        $this->db->from('Nilai');
        $this->db->join('Taruna', 'Taruna.ID = Nilai.Taruna');
        $this->db->join('Matakuliah', 'Matakuliah.ID = Nilai.Matakuliah');
        $this->db->where('Nilai.ID', $id);
        $query = $this->db->get();
        return $query->row();
    }    

	public function get_nilai_by_taruna($id) {
        $query = $this->db->where('Taruna', $id)->get('Nilai');
        return $query->result();
    }

    public function insert_nilai($data) {
        return $this->db->insert('Nilai', $data);
    }

    public function update_nilai($id, $data) {
        return $this->db->where('ID', $id)->update('Nilai', $data);
    }

    public function delete_nilai($id) {
        return $this->db->where('ID', $id)->delete('Nilai');
    }

}
