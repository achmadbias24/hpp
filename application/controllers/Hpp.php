<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hpp extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Barang_Model');
  }
  public function index()
  {
    $data['brg'] = $this->Barang_Model->getSpesificBarang($this->uri->segment(3));
    render2('hpp', $data);
  }
  public function hitung()
  {
    $katun = $this->input->post('katun');
    $sutra = $this->input->post('sutra');
    $cat = $this->input->post('cat');
    $pendukung = $this->input->post('pendukung');
    $tenaga = $this->input->post('tenaga');
    $mika = $this->input->post('mika');
    $packaging = $this->input->post('packaging');
    $id = $this->input->post('id_barang');
    $data['jumlah'] = $this->Barang_Model->getJumlah($id);
    $hpp = ($katun + $sutra + $cat + $pendukung + $tenaga + $mika + $packaging) / $data['jumlah'];
    $this->HPP_Model->inputHpp($id, $katun, $sutra, $pendukung, $tenaga, $mika, $packaging);
    $this->Barang_Model->inputHpp($hpp, $id);
  }
}
