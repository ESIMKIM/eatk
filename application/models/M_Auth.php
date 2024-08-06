<?php
defined('BASEPATH') or die('No direct script access allowed!');

class M_Auth extends CI_Model
{
    //     UPDATE `tbl_user_access`
    // SET url = REPLACE(url, 'http://10.0.107.83', 'http://localhost')


    function get_user_login()
    {
        $value = $this->db->get('tbl_user_login')->result();
        return $value;
    }

    function get_user_information($login_id)
    {
        $query = $this->db->query(
            "SELECT *
            FROM `tbl_user_login` AS tl
            JOIN `tbl_user` AS u
            ON tl.`user_id`= u.`user_id`
            JOIN `tbl_department` AS td
            ON td.`id_department` = u.`dept_id`	     
            WHERE tl.login_id = $login_id"
        )->result();
        return $query;
    }


    function get_sidebarmenu($user_id)
    {
        $query = $this->db->query(
            "SELECT *
            FROM tbl_user_access
            WHERE user_id = '$user_id' AND is_active = '1'
            ORDER BY no_urut_sec ASC, no_urut_sub ASC"
        )->result();
        return $query;
    }


    function get_user()
    {
        $value = $this->db->get('tbl_user')->result();
        return $value;
    }

    function get_auth($username)
    {
        $query = $this->db->query(
            "SELECT *
            FROM tbl_user_login AS lg
            JOIN tbl_user AS us
            ON lg.`user_id` = us.`user_id`
            JOIN `tbl_department` AS dep
            ON us.`dept_id` = dep.`id_department`
            WHERE lg.`username`= '$username' AND lg.`is_active` = 1 LIMIT 1"
        )->result();
        return $query;
    }

    function get_network()
    {
        $query = $this->db->query("   SELECT n.*, CONCAT(n.`htp`,n.`ip_address`,n.`port`) AS link  
        FROM `tbl_user_network` AS n 
        WHERE n.`is_active` = '1'")->result();
        return $query;
    }
    function get_menuVerification($user_id)
    {
        $query = $this->db->query("SELECT * 
        FROM `tbl_user_access` AS ua
        JOIN `tbl_user_login` AS ul
        ON ua.`template_id` = ul.`template_id`
        JOIN `tbl_user_menu` AS um
        ON um.`menu_id` = ua.`menu_id`
        WHERE ul.`role_id` = (SELECT ul.`role_id`
        FROM `tbl_user_login` AS ul
        WHERE ul.`user_id` = $user_id )")->result();
        return $query;
    }

    function get_userLogin_byUserId($id)
    {
        $this->db->where('user_id', $id);
        $value = $this->db->get('tbl_user_login')->result();
        return $value;
    }

    function get_department()
    {
        $value = $this->db->get('tbl_department')->result();
        return $value;
    }

    function get_role()
    {
        $value = $this->db->get('tbl_user_role')->result();
        return $value;
    }

    function get_dataMasterUser()
    {
        $query = $this->db->query("SELECT u.`name`, u.`nip`, ul.`username`, ul.`sandi`, ur.`name_role`, d.`department_name`,d.`section_name` , u.`user_id`, ul.`login_id`
        FROM `tbl_user_login` AS ul
        JOIN `tbl_user` AS u
        ON ul.`user_id` = u.`user_id`
        JOIN `tbl_department` AS d
        ON u.`dept_id` = d.`id_department`
        JOIN `tbl_user_role` AS ur
        ON ul.`role_id` = ur.`role_id`")->result();
        return $query;
    }



    public function insert_data_login($data)
    {
        $this->db->insert("tbl_user_login", $data);
        return $this->db->insert_id();
    }

    public function insert_data_user($data)
    {
        $this->db->insert("tbl_user", $data);
        return $this->db->insert_id();
    }

    public function update_data_user($id, $data)
    {
        $this->db->where('user_id', $id);
        $result = $this->db->update('tbl_user', $data);
        return $result;
    }

    public function update_data_login($id, $data)
    {
        $this->db->where('login_id', $id);
        $result = $this->db->update('tbl_user_login', $data);
        return $result;
    }

    function delete_user($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('tbl_user');
    }

    function delete_login($id)
    {
        $this->db->where('login_id', $id);
        $this->db->delete('tbl_user_login');
    }

    function Custom_Query()
    {
        $value = $this->db->query("SELECT * from `table` where 1")->result();
        return $value;
    }
}
