<?php
class HPP_Model extends CI_Model
{
  public function inputHpp($katun, $sutra, $cat, $pendukung, $tenaga, $jemuran, $mika, $packaging, $id)
  {
    $data_hpp = array(
      'KATUN' => $katun,
      'SUTRA' => $sutra,
      'CAT' => $cat,
      'PENDUKUNG' => $pendukung,
      'TENAGA' => $tenaga,
      'JEMURAN' => $jemuran,
      'MIKA' => $mika,
      'PACKING' => $packaging,
      'ID_BARANG' => $id
    );
    $this->db->insert('hpp', $data_hpp);
  }

  public function detailHpp($id)
  {
    $this->db->select('b.NAMA_BARANG,h.*');
    $this->db->from('hpp h');
    $this->db->join('barang b', 'h.ID_BARANG=b.ID_BARANG', 'JOIN');
    $this->db->where('h.ID_BARANG', $id);
    return $this->db->get()->result_array();
  }

  public function editHpp($katun, $sutra, $cat, $pendukung, $tenaga, $jemuran, $mika, $packaging, $id)
  {
    $data_hpp = array(
      'KATUN' => $katun,
      'SUTRA' => $sutra,
      'CAT' => $cat,
      'PENDUKUNG' => $pendukung,
      'TENAGA' => $tenaga,
      'JEMURAN' => $jemuran,
      'MIKA' => $mika,
      'PACKING' => $packaging
    );
    $this->db->where('ID_BARANG', $id);
    $this->db->update('hpp', $data_hpp);
  }
}
