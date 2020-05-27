<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class form extends CI_Controller {

    public function index()
    {
      $this->load->database();
        $this->load->view("new");

    }
    function savingdata()
    {

        $data = array(
                        'name'     => $this->input->post('name'),
                        'email'  => $this->input->post('email'),
                        'contact'   => $this->input->post('contact'),
                        'dob' => $this->input->post('dob'),
                        'pin' => $this->input->post('pin')
                        );
        //insert data into database table.
        $this->db->insert('info',$data);

        redirect("form/index");
    }
}
?>
