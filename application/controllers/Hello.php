<?php

  class Hello extends CI_Controller{

  public function index(){
$this->load->database();
$this->load->view("hello_msg");
  }
  }
?>
