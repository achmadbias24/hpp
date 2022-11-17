<?php
function render()
{
  $a = get_instance();
  $a->load->view('index');
}
function render2($link, $data)
{
  $a = get_instance();
  $a->load->view('template/header');
  $a->load->view('template/sidebar');
  $a->load->view($link, $data);
  $a->load->view('template/footer');
}
