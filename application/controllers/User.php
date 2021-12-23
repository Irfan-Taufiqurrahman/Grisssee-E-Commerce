<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('Admin/M_Barang');
    }

    public function index()
    {
        $data['title'] = 'Grissee';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->M_Barang->select_all();


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

    public function editProfile()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('User/tamplate/header', $data);
            $this->load->view('User/tamplate/sidebar', $data);
            $this->load->view('User/tamplate/topbar', $data);
            $this->load->view('user/editProfile', $data);
            $this->load->view('User/tamplate/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $address = $this->input->post('address');

            // cek jika ada gambar yang akan di upload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10000';
                $config['upload_path'] = './admin_assets/img/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'admin_assets/img/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->set('address', $address);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your profile has been updated!</div>');
            redirect('user/profile');
        }
    }

    public function item($product_id)
    {

        $data['title'] = 'Item';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->M_Barang->TampilBarang($product_id);

        $this->load->view('User/tamplate/header', $data);
        $this->load->view('User/tamplate/sidebar', $data);
        $this->load->view('User/tamplate/topbar', $data);
        $this->load->view('user/item', $data);
        $this->load->view('User/tamplate/footer');
    }

    public function Checkout()
    {
        $data['title'] = 'Checkout';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('User/tamplate/header', $data);
        $this->load->view('User/tamplate/sidebar', $data);
        $this->load->view('User/tamplate/topbar', $data);
        $this->load->view('user/Checkout', $data);
        $this->load->view('User/tamplate/footer');
    }
}
