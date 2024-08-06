<?php
defined('BASEPATH') or die('No direct script access allowed!');

class M_Notif extends CI_Model
{

    public function get_allNotif()
    {
        $value = $this->db->get('tbl_user_notif')->result();
        return $value;
    }


    public function get_last_update()
    {
        $value = $this->db->query(
            "SELECT * FROM tbl_user_notif WHERE is_active = 1 ORDER BY notif_id DESC LIMIT 1 "
        )->result();

        return $value;
    }


    public function insert_notif($data)
    {
        $this->db->insert("tbl_user_notif", $data);
        return $this->db->insert_id();
    }
}
