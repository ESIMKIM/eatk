<?php
defined('BASEPATH') or die('No direct script access allowed!');

class M_Satuan extends CI_Model
{

    public function get_allSatuan()
    {
        $value = $this->db->get('tbl_products_satuan')->result_array();
        return $value;
    }


    function get_allSatuanObj()
    {
        $value = $this->db->query(
            "SELECT *
            FROM tbl_products_satuan
            ORDER BY satuan_id DESC"
        )->result();

        return $value;
    }


    public function insert_satuan($data)
    {
        $this->db->insert("tbl_products_satuan", $data);
        return $this->db->insert_id();
    }

    public function update_satuan($id, $data)
    {
        $this->db->where('satuan_id', $id);
        $result = $this->db->update('tbl_products_satuan', $data);

        if (!empty($result)) {
            return 200;
        } else {
            return 404;
        }
    }
}