<?php
class Auth_Model extends CI_Model
{
  public function getUser($username)
  {
    $this->db->where('USERNAME', $username);
    return $this->db->get('user')->result_array();
  }
}
