<?php
class HPP_Model extends CI_Model
{
  public function inputHpp($katun, $sutra, $cat, $pendukung, $tenaga, $jemuran, $mika, $packaging, $id_barang)
  {
    $data_hpp = array(
      'ID_BARANG' => $id_barang,
      'KATUN' => $katun,
      'SUTRA' => $sutra,
      'CAT' => $cat,
      'PENDUKUNG' => $pendukung,
      'TENAGA' => $tenaga,
      'JEMURAN' => $jemuran,
      'MIKA' => $mika,
      'PACKING' => $packaging
    );
    $this->db->insert('hpp', $data_hpp);
  }
}
