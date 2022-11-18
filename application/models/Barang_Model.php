<?php
class Barang_Model extends CI_Model
{
  public function getBarang()
  {
    return $this->db->get('v_barang')->result_array();
  }
  public function getSpesificBarang($id_barang)
  {
    $this->db->select('NAMA_BARANG');
    $this->db->where('ID_BARANG', $id_barang);
    return $this->db->get('barang')->result_array();
  }
  public function tambahBarang($nama, $jumlah)
  {
    $data_barang = array(
      'NAMA_BARANG' => $nama,
      'JUMLAH_BARANG' => $jumlah,
      'ID_USER' => $this->session->ID_USER
    );
    $this->db->insert('barang', $data_barang);
  }
}
