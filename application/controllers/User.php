<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Grissee';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('User/tamplate/header', $data);
        $this->load->view('User/tamplate/sidebar', $data);
        $this->load->view('User/tamplate/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('User/tamplate/footer');
    }

    public function profile()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('User/tamplate/header', $data);
        $this->load->view('User/tamplate/sidebar', $data);
        $this->load->view('User/tamplate/topbar', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('User/tamplate/footer');
    }
}
