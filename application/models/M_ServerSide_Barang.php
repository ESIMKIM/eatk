<?php
defined('BASEPATH') or die('No direct script access allowed!');

class M_ServerSide_Barang extends CI_Model
{
    // //set nama tabel yang akan kita tampilkan datanya
    // var $tableBarang = 'mahasiswa';
    // //set kolom order, kolom pertama saya null untuk kolom edit dan hapus
    // var $column_order = array(null, 'Nama', 'Alamat', 'Email');

    // var $column_search = array('Nama', 'Alamat', 'Email');
    // // default order 
    // var $order = array('IdMhsw' => 'asc');

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->database();
    // }


    private function _get_datatables_query()
    {
        $this->db->query(
            "SELECT p.products_id , p.prices, img.`images` AS gambar, p.`name` AS nama_barang, pm.`name_merk` AS merk, pc.`name_category` AS category, CONCAT(p.`qty`, ' ', ps.`name_satuan`) AS stok
            FROM `tbl_products` AS p 
            JOIN `tbl_products_image` AS img
            ON p.`products_id` = img.`products_id`
            JOIN `tbl_products_category` AS pc
            ON pc.`category_id` = p.`category_id`
            JOIN `tbl_products_satuan` AS ps
            ON ps.`satuan_id` = p.`satuan_id`
            JOIN `tbl_products_merk` AS pm
            ON pm.merk_id = p.`merk_id`
            ORDER BY p.products_id DESC 
            "
        );

        $i = 0;
        foreach ($this->column_search as $item) // loop kolom 
        {
            if ($this->input->post('search')['value']) // jika datatable mengirim POST untuk search
            {
                if ($i === 0) // looping pertama
                {
                    $this->db->group_start();
                    $this->db->like($item, $this->input->post('search')['value']);
                } else {
                    $this->db->or_like($item, $this->input->post('search')['value']);
                }
                if (count($this->column_search) - 1 == $i) //looping terakhir
                    $this->db->group_end();
            }
            $i++;
        }

        // jika datatable mengirim POST untuk order
        if ($this->input->post('order')) {
            $this->db->order_by($this->column_order[$this->input->post('order')['0']['column']], $this->input->post('order')['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($this->input->post('length') != -1)
            $this->db->limit($this->input->post('length'), $this->input->post('start'));
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}
