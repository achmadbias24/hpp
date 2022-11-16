<?php
// defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Auth_Model');
  }
  public function login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $cek_data = $this->Auth_Model->getUser($username);

    if (!empty($cek_data) && $cek_data[0]['NAMA_LEVEL'] == "admin") {
      if ($cek_data[0]['PASSWORD'] == $password) {
        //session pasien
        $sessionPasien = array(
          'NAMA_PASIEN' => $cek_data[0]['NAMA_USER']
        );

        $this->session->set_userdata($sessionPasien);
        render2('admin/index');
      }
    }
  }
  public function logout()
  {
    $this->session->sess_destroy();
    render();
  }
}
