<?php
function render()
{
  $a = get_instance();
  $a->load->view('index');
}
function render2($link)
{
  $a = get_instance();
  $a->load->view('admin/template/header');
  $a->load->view('admin/template/sidebar');
  $a->load->view($link);
  $a->load->view('admin/template/footer');
}
