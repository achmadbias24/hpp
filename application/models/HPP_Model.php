<?php
class HPP_Model extends CI_Model
{
  public function inputHpp($katun, $sutra, $cat, $pendukung, $tenaga, $jemuran, $mika, $packaging,$id)
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
      'ID_BARANG'=>$id
    );
    $this->db->insert('hpp', $data_hpp);
  }
}
