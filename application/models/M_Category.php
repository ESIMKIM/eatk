<?php
defined('BASEPATH') or die('No direct script access allowed!');

class M_Category extends CI_Model
{

    public function get_allCategory()
    {
        $value = $this->db->get('tbl_products_category')->result_array();
        return $value;
    }

    function get_all_category()
    {
        $value = $this->db->query(
            "SELECT *
            FROM tbl_products_category
            ORDER BY category_id DESC"
        )->result();

        return $value;
    }

    public function get_allCategoryShown()
    {
        $this->db->select('*');
        $this->db->from('tbl_products_category');
        $this->db->where('is_shown', 1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    public function insert_category($data)
    {
        $this->db->insert("tbl_products_category", $data);
        return $this->db->insert_id();
    }

    public function update_category($id, $data)
    {
        $this->db->where('category_id', $id);
        $result = $this->db->update('tbl_products_category', $data);

        if (!empty($result)) {
            return 200;
        } else {
            return 404;
        }
    }
}
