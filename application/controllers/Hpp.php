<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hpp extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Barang_Model');
    $this->load->model('HPP_Model');
  }
  public function index()
  {
    if ($this->session->NAMA_USER) {
      $data['brg'] = $this->Barang_Model->getSpesificBarang($this->uri->segment(3));
      render2('hpp', $data);
    } else redirect('welcome');
  }
  public function detail()
  {
    if ($this->session->NAMA_USER) {
      $data['detail'] = $this->HPP_Model->detailHpp($this->uri->segment(3));
      render2('detail_hpp', $data);
    }else redirect('welcome');
  }

  public function editHpp()
  {
    if ($this->session->NAMA_USER) {
      $data['detail'] = $this->HPP_Model->detailHpp($this->uri->segment(3));
      render2('edit_hpp', $data);
    }else redirect('welcome');
  }
  public function hitung()
  {
    if ($this->session->NAMA_USER) {
      $katun = str_replace(".", "", $this->input->post('katun'));
      $sutra = str_replace(".", "", $this->input->post('sutra'));
      $cat = str_replace(".", "", $this->input->post('cat'));
      $pendukung = str_replace(".", "", $this->input->post('pendukung'));
      $tenaga = str_replace(".", "", $this->input->post('tenaga'));
      $jemuran = str_replace(".", "", $this->input->post('jemuran'));
      $mika = str_replace(".", "", $this->input->post('mika'));
      $packaging = str_replace(".", "", $this->input->post('packaging'));
      $id = $this->input->post('id_barang');
      $this->HPP_Model->inputHpp($katun, $sutra, $cat, $pendukung, $tenaga, $jemuran, $mika, $packaging, $id);
      redirect('barang');
    }else redirect('welcome');
  }

  public function edit()
  {
    if ($this->session->NAMA_USER) {
      $katun = str_replace(".", "", $this->input->post('katun'));
      $sutra = str_replace(".", "", $this->input->post('sutra'));
      $cat = str_replace(".", "", $this->input->post('cat'));
      $pendukung = str_replace(".", "", $this->input->post('pendukung'));
      $tenaga = str_replace(".", "", $this->input->post('tenaga'));
      $jemuran = str_replace(".", "", $this->input->post('jemuran'));
      $mika = str_replace(".", "", $this->input->post('mika'));
      $packaging = str_replace(".", "", $this->input->post('packaging'));
      $id = $this->input->post('id_barang');
      $this->HPP_Model->editHpp($katun, $sutra, $cat, $pendukung, $tenaga, $jemuran, $mika, $packaging, $id);
      redirect('barang');
    }else redirect('welcome');
  }
}
