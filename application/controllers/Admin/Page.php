<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CRUD');
        $this->load->model('Admin/M_Barang');
    }

    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Grissee - admin';
        $this->load->view('Admin/index', $data);
    }

    public function barang()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->M_Barang->select_all();
        $this->load->view('Admin/barang', $data);
    }

    public function tambahBarang()
    {
        $dataBarang = $this->input->post();

        $location = '././FotoBarang/';
        for ($i = 1; $i < 4; $i++) {
            $file_name = $_FILES['product_images' . $i]['name'];
            $tmp_name = $_FILES['product_images' . $i]['tmp_name'];
            $file_type = $_FILES['product_images' . $i]['type'];

            $ext = pathinfo($file_name, PATHINFO_EXTENSION);

            $file_foto = random_int(0, 999) . "_" . $i . "." . $ext;
            if ($file_name != NULL) {
                move_uploaded_file($tmp_name, $location . $file_foto);

                $_FILES['product_images' . $i]['name'] = $file_foto;
            }
        }

        $data = array(
            'product_name' => $dataBarang['product_name'],
            'product_price' => $dataBarang['product_price'],
            'product_weight' => $dataBarang['product_weight'],
            'product_stok' => $dataBarang['product_stok'],
            'product_description' => $dataBarang['product_description'],
            'product_images1' => $_FILES['product_images1']['name'],
            'product_images2' => $_FILES['product_images2']['name'],
            'product_images3' => $_FILES['product_images3']['name'],
            'status' => 1
        );
        $this->CRUD->insert('barang', $data);
        redirect('Admin/Page/barang', 'refresh');
    }

    public function updateBarang()
    {
        $dataBarang = $this->input->post();
        $kodeBarang = $dataBarang['product_id'];

        $location = '././FotoBarang/';
        for ($i = 1; $i < 4; $i++) {
            $file_name = $_FILES['product_images' . $i]['name'];
            $tmp_name = $_FILES['product_images' . $i]['tmp_name'];
            $file_type = $_FILES['product_images' . $i]['type'];

            $ext = pathinfo($file_name, PATHINFO_EXTENSION);

            $file_foto = random_int(0, 999) . "_" . $i . "." . $ext;
            if ($file_name != NULL) {
                unlink($location . $file_foto);
                move_uploaded_file($tmp_name, $location . $file_foto);

                $_FILES['product_images' . $i]['name'] = $file_foto;
            }
        }

        $data = array(
            'product_id' => $kodeBarang,
            'product_name' => $dataBarang['product_name'],
            'product_price' => $dataBarang['product_price'],
            'product_weight' => $dataBarang['product_weight'],
            'product_stok' => $dataBarang['product_stok'],
            'product_description' => $dataBarang['product_description'],
            'product_images1' => $_FILES['product_images1']['name'],
            'product_images2' => $_FILES['product_images2']['name'],
            'product_images3' => $_FILES['product_images3']['name'],
            'status' => 1
        );
        $this->M_Barang->updateBarangByCode('barang', $data, $kodeBarang);
        redirect('Admin/Page/barang', 'refresh');
    }


    public function deleteBarang($product_id)
    {
        $where = array('product_id' => $product_id);
        $this->M_Barang->hapusBarang($where, 'barang');
        redirect('Admin/Page/barang', 'refresh');
    }
}


// END of file Page.php
// Location: ./application/controllers/Admin/Page.php