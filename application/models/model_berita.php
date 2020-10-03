<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_berita extends CI_Model
{
    public function tampil_berita()
    {
        return $this->db->get('tb_berita');
    }
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}

/* End of file Model_berita.php */
