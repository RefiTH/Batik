<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Model_barang extends CI_Model
{
    public function tambah_data()
    {

        $namabrg        = $this->input->post('nama_barang');
        $hargabrg       = $this->input->post('harga_barang');
        $deskripsibrg   = $this->input->post('deskripsi_barang');
        $gambarbrg      = $this->input->post('gambar');

        $data = array(
            'nama_barang'   => $namabrg,
            'harga_barang'   => $hargabrg,
            'deskripsi_barang'   => $deskripsibrg,
            'gambar'   => $gambarbrg,
        );

        $this->db->insert('tb_barang', $data);
    }
    public function tampil_data()
    {
        return $this->db->get('tb_barang');
    }
    public function tampil_limit($limit, $start)
    {
        return $this->db->get('tb_barang', $limit, $start);
    }
    public function input_data($data)
    {
        $this->db->insert('tb_barang', $data);
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
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function detail_brg($id_barang)
    {
        $result = $this->db->where('id_barang', $id_barang)->get('tb_barang');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}


/* End of file Model_barang.php */
