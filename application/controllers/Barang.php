<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Barang_Model');
  }
  public function index()
  {
    if ($this->session->NAMA_USER) {
      $data['brg'] = $this->Barang_Model->getBarang();
      render2('barang', $data);
    }
  }
  public function tambah()
  {
    $data = "";
    render2('tambah_barang', $data);
  }
  public function addBarang()
  {
    $nama = $this->input->post('nama');
    $jumlah = $this->input->post('jumlah');
    $this->Barang_Model->tambahBarang($nama, $jumlah);
    redirect('barang');
  }
}
