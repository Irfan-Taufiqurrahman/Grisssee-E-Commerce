<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Barang extends CI_Model
{
    public function select_all()
    {
        $this->db->select('*');
        $this->db->from('barang');

        $data = $this->db->get();

        return $data->result();
    }

    public function updateBarangByCode($tabel, $data, $kodeBarang)
    {
        $this->db->where('product_id', $kodeBarang);
        $cek = $this->db->update($tabel, $data);
        return $cek;
    }

    public function hapusbarang($where, $tabel)
    {
        $this->db->where($where);
        $this->db->delete($tabel);
    }

    public function TampilBarang($DeskripsiBarang)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('product_id', $DeskripsiBarang);
        $data = $this->db->get();

        return $data->result();
    }
}
