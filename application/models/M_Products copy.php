<?php
defined('BASEPATH') or die('No direct script access allowed!');

class M_Products extends CI_Model
{

    // Fetch records
    public function get_all_Products($rowno, $rowperpage, $search = "")
    {
        $this->db->select('*');
        $this->db->from('tbl_products');
        // $this->db->join('tbl_products_image', 'tbl_products.products_id = tbl_products_image.products_id');
        // $this->db->where('is_thumbnails', 1);

        if ($search != '') {
            $this->db->like('name', $search);
            $this->db->or_like('desc', $search);
        }

        $this->db->limit($rowperpage, $rowno);
        $query = $this->db->get();

        return $query->result_array();
    }

    // Select total records
    public function get_all_ProductsCount($search = '')
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('tbl_products');
        // $this->db->select('count(*) as allcount');
        // $this->db->from('tbl_products');
        // $this->db->join('tbl_products_image', 'tbl_products.products_id = tbl_products_image.products_id');
        // $this->db->where('is_thumbnails', 1);

        if ($search != '') {
            $this->db->like('name', $search);
            $this->db->or_like('desc', $search);
        }

        $query = $this->db->get();
        $result = $query->result_array();

        return $result[0]['allcount'];
    }
}