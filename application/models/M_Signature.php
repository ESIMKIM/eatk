<?php
defined('BASEPATH') or die('No direct script access allowed!');

class M_Signature extends CI_Model
{

    public function get_allSignature()
    {
        $value = $this->db->get('tbl_transaction_signature')->result_array();
        return $value;
    }


    public function get_Signature_byId($id)
    {
        $value = $this->db->query(
            "SELECT * 
            FROM `tbl_transaction_signature` 
            WHERE `sig_id` = $id"
        )->result();

        return $value;
    }

    public function get_Signature_byThId($id)
    {
        $value = $this->db->query(
            "SELECT * 
            FROM `tbl_transaction_signature` 
            WHERE `th_id` = $id"
        )->result();

        return $value;
    }

    public function get_SignaturePimp_byId()
    {
        $value = $this->db->query(
            "SELECT * 
            FROM `tbl_user_pimpinan` 
            WHERE `sig_pimp_id` = 1 AND is_active = 1"
        )->result();

        return $value;
    }

    public function get_dataKTU_byTHId()
    {
        $value = $this->db->query(
            "SELECT * 
            FROM `tbl_user_pimpinan` 
            WHERE `sig_pimp_id` = 1 AND is_active = 1"
        )->result();

        return $value;
    }


    public function get_data_KTU_User($th_id)
    {
        $value = $this->db->query(
            "SELECT *
            FROM `tbl_user` AS u
            WHERE u.`user_id` = (SELECT user_id FROM `tbl_transaction_header` AS th WHERE th_id = '$th_id')"
        )->result();

        return $value;
    }

    public function Submit_Signature($data)
    {
        $this->db->insert("tbl_transaction_signature", $data);
        return $this->db->insert_id();
    }



    public function User_updateSignature($id, $data)
    {
        $this->db->where('sig_id', $id);
        $result = $this->db->update('tbl_transaction_signature', $data);

        if (!empty($result)) {
            return 200;
        } else {
            return 404;
        }
    }
}