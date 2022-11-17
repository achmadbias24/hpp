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


    if (!empty($cek_data)) {
      if ($cek_data[0]['PASSWORD'] == $password) {
        $sessionUser = array(
          'NAMA_USER' => $cek_data[0]['NAMA_USER'],
          'ID_USER' => $cek_data[0]['ID_USER']
        );
        $this->session->set_userdata($sessionUser);
        redirect('barang');
      } else {
        $this->session->set_flashdata('error', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Password Salah!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>      
        ');
        redirect('Welcome');
      }
    } else {
      $this->session->set_flashdata('error', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Username Tidak Ditemukan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>      
        ');
      redirect('Welcome');
    }
  }
  public function logout()
  {
    $this->session->sess_destroy();
    render();
  }
}
