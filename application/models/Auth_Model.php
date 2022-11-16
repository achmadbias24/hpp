<?php
class Auth_Model extends CI_Model
{


  public function getUser($username)
  {
    $this->db->select('u.*,l.NAMA_LEVEL');
    $this->db->from('user as u');
    $this->db->join('level as l', 'u.ID_LEVEL=l.ID_LEVEL', 'JOIN');
    $this->db->where('u.USERNAME', $username);
    return $this->db->get()->result_array();
  }
}
