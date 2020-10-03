<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Model_contact extends CI_Model
{

    public function input_massage($data)
    {
        $this->db->insert('tb_contact', $data);
    }
    public function tampil_massage()
    {
        return $this->db->get('tb_contact');
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function tampil_lokasi()
    {
        return $this->db->get('tb_lokasi');
    }
    public function edit_lokasi($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_lokasi($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}


/* End of file Model_barang.php */
