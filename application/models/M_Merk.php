<?php
defined('BASEPATH') or die('No direct script access allowed!');

class M_Merk extends CI_Model
{

    public function get_allMerk()
    {
        //  $value = $this->db->query(
        //     "SELECT * FROM tbl_products_merk ORDER BY merk_id ASC"
        // )->result();
        // return $value;
          $this->db->select("*");
        $this->db->from('tbl_products_merk');
        $this->db->order_by('name_merk', 'ASC');
        $query = $this->db->get();

        return $query->result_array();
    }

    function get_allMerkObj()
    {
        $value = $this->db->query(
            "SELECT *
            FROM tbl_products_merk
            ORDER BY merk_id DESC"
        )->result();

        return $value;
    }

    public function insert_merk($data)
    {
        $this->db->insert("tbl_products_merk", $data);
        return $this->db->insert_id();
    }

    public function update_merk($id, $data)
    {
        $this->db->where('merk_id', $id);
        $result = $this->db->update('tbl_products_merk', $data);

        if (!empty($result)) {
            return 200;
        } else {
            return 404;
        }
    }
}