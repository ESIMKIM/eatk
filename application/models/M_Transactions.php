<?php
defined('BASEPATH') or die('No direct script access allowed!');

class M_Transactions extends CI_Model
{
    function get_tanggalKeluarBarangByKurir($th_id)
    {
        $value = $this->db->query(
            "SELECT * FROM tbl_transaction_signature WHERE th_id = $th_id"
        )->result();

        return $value;
    }


    function get_ReportallStok()
    {
        $value = $this->db->query(
            "SELECT ps.`products_id`, ps.`name`, (SELECT SUM(sisa) AS awal FROM tbl_products_stock_history WHERE products_id = ps.`products_id`) AS stok, (SELECT SUM(TOTAL) AS awal FROM tbl_products_stock_history WHERE products_id = ps.`products_id`) AS total, (SELECT IFNULL(SUM(`approval`), 0 ) AS kurang FROM `tbl_transaction_detail` WHERE products_id = ps.`products_id`) AS terkirim
            FROM `tbl_products` AS ps WHERE ps.is_active = 1"
        )->result();

        return $value;
    }

    function get_ReportallPenghapusan()
    {
        $value = $this->db->query(
            "SELECT ps.`products_id`, ps.`name`, (SELECT SUM(sisa) AS awal FROM tbl_products_stock_history WHERE products_id = ps.`products_id`) AS stok, (SELECT SUM(TOTAL) AS awal FROM tbl_products_stock_history WHERE products_id = ps.`products_id`) AS total, (SELECT IFNULL(SUM(`approval`), 0 ) AS kurang FROM `tbl_transaction_detail` WHERE products_id = ps.`products_id`) AS terkirim
            FROM `tbl_products` AS ps WHERE ps.is_active = 0"
        )->result();

        return $value;
    }

    function get_ReportallTrans()
    {
        $value = $this->db->query(
            "SELECT dx.department_name, dx.alias_dept, td.td_id, p.`name`, p.`products_id` , SUM(td.`approval`) AS terkirim
                FROM `tbl_transaction_detail` AS td
                JOIN `tbl_transaction_header` AS th
                ON th.`th_id` = td.`th_id`
                JOIN `tbl_user` AS uss
                ON th.`user_id` = uss.user_id
                JOIN `tbl_products` AS p
                ON p.`products_id` = td.`products_id`
                JOIN `tbl_department` AS dx
                ON uss.`dept_id` = dx.`id_department`
                WHERE p.is_active = 1
                GROUP BY p.`products_id`, dx.department_name"
        )->result();

        return $value;
    }

    // Fetch records cart user
    public function get_cart_user($login_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_transaction_cart');
        $this->db->join('tbl_products', 'tbl_products.products_id = tbl_transaction_cart.products_id');
        $this->db->join('tbl_products_image', 'tbl_products.products_id = tbl_products_image.products_id', 'left');
        $this->db->join('tbl_transaction_reason', 'tbl_transaction_reason.reason_id = tbl_transaction_cart.reason_id', 'left');
        $this->db->where('login_id', $login_id);
        $this->db->where('is_thumbnails', 1);

        $query = $this->db->get();

        return $query->result_array();
    }

    // Fetch records order user
    public function get_transaction_user($login_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_transaction_cart');
        $this->db->join('tbl_products', 'tbl_products.products_id = tbl_transaction_cart.products_id');
        $this->db->join('tbl_products_image', 'tbl_products.products_id = tbl_products_image.products_id', 'left');
        $this->db->join('tbl_transaction_reason', 'tbl_transaction_reason.reason_id = tbl_transaction_cart.reason_id', 'left');
        $this->db->where('login_id', $login_id);
        $this->db->where('is_thumbnails', 1);

        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_cart_userCount($login_id)
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('tbl_transaction_cart');
        $this->db->join('tbl_products', 'tbl_products.products_id = tbl_transaction_cart.products_id');
        $this->db->join('tbl_products_image', 'tbl_products.products_id = tbl_products_image.products_id', 'left');
        $this->db->where('login_id', $login_id);
        $this->db->where('is_thumbnails', 1);

        $query = $this->db->get();

        return $query->result_array();
    }

    public function find_item_onCart($login_id, $prod_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_transaction_cart');
        $this->db->where('login_id', $login_id);
        $this->db->where('tbl_transaction_cart.products_id', $prod_id);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function User_add_toCart($data)
    {
        $this->db->insert("tbl_transaction_cart", $data);
        return $this->db->insert_id();
    }

    public function get_totalItemofCart($login_id)
    {
        $value = $this->db->query(
            "SELECT SUM(`quantity`) AS hasil
            FROM `tbl_transaction_cart` WHERE `login_id` = $login_id"
        )->result();

        return $value;
    }

    public function get_lastnumberofHeader()
    {
        $value = $this->db->query(
            "SELECT * 
            FROM `tbl_transaction_header` 
            ORDER BY th_id DESC
            LIMIT 1"
        )->result();

        return $value;
    }

    public function get_totalJenisofCart($login_id)
    {
        $value = $this->db->query(
            "SELECT COUNT(`products_id`) AS hasil
            FROM `tbl_transaction_cart` WHERE `login_id` = $login_id"
        )->result();

        return $value;
    }

    public function get_listTrans_eachUser($login_id)
    {
        $value = $this->db->query(
            "SELECT th.`signature_courier`
            FROM `tbl_transaction_header` AS th
            JOIN `tbl_transaction_detail` AS td
            WHERE th.`user_id` = $login_id"
        )->result();

        return $value;
    }

    public function get_transactionUserActive($login_id)
    {
        $value = $this->db->query(
            "SELECT th.* , ts.`status_name`, ts.`color`
            FROM `tbl_transaction_header` AS th
            JOIN `tbl_transaction_status` AS ts
            ON ts.`status_id` = th.`status`
            WHERE th.`user_id` = $login_id AND th.`status` != 4
            ORDER BY th_id DESC"
        )->result();

        return $value;
    }

    public function get_transactionUsernonActive($login_id)
    {
        $value = $this->db->query(
            "SELECT th.* , ts.`status_name`, ts.`color`
            FROM `tbl_transaction_header` AS th
            JOIN `tbl_transaction_status` AS ts
            ON ts.`status_id` = th.`status`
            WHERE th.`user_id` = $login_id AND th.`status` = 4
            ORDER BY th.th_id DESC"
        )->result();

        return $value;
    }

    public function get_prodsByTransHeader($th_id)
    {
        $value = $this->db->query(
            "SELECT *
            FROM `tbl_transaction_header` AS th
            JOIN `tbl_transaction_detail` AS td
            ON td.`th_id` = th.`th_id`
            JOIN `tbl_products` AS p
            ON td.`products_id` = p.`products_id`
            JOIN `tbl_products_image` AS ip
            ON ip.`products_id` = p.`products_id`
            JOIN `tbl_products_satuan` AS ps
            ON ps.`satuan_id` = p.`satuan_id`
            WHERE th.`th_id` = $th_id"
        )->result();

        return $value;
    }

    public function get_dataProduct_forBAST_Backup($th_id)
    {
        $value = $this->db->query(
            "SELECT p.name, th.th_id, td.td_id, td.products_id, th.no_surat, th.tgl_surat, sh.prices, ps.name_satuan,td.quantity, td.approval
            FROM `tbl_transaction_header` AS th
            JOIN `tbl_transaction_detail` AS td
            ON th.`th_id` = td.`th_id`
            JOIN `tbl_products_stock_history` AS sh
            ON td.products_id = sh.products_id
            JOIN `tbl_products` AS p
            ON td.`products_id` = p.`products_id`
            JOIN `tbl_products_satuan` AS ps
            ON ps.`satuan_id` = p.`satuan_id`
            WHERE th.`th_id` = $th_id  AND terkirim != total AND sisa != total"
        )->result();

        return $value;
    }

    public function get_dataProduct_forBAST($th_id)
    {
        $value = $this->db->query(
            "SELECT p.name, th.th_id, td.td_id, td.products_id, th.no_surat, th.tgl_surat, ps.name_satuan,td.quantity, td.approval
            FROM `tbl_transaction_header` AS th
            JOIN `tbl_transaction_detail` AS td
            ON th.`th_id` = td.`th_id`
            JOIN `tbl_products` AS p
            ON td.`products_id` = p.`products_id`
            JOIN `tbl_products_satuan` AS ps
            ON ps.`satuan_id` = p.`satuan_id`
            WHERE th.`th_id` = $th_id "
        )->result();

        return $value;
    }

    public function get_transaction_user_for_admin($login_id)
    {
        $value = $this->db->query(
            "SELECT th.* , ts.`status_name`, ts.`color`
            FROM `tbl_transaction_header` AS th
            JOIN `tbl_transaction_status` AS ts
            ON ts.`status_id` = th.`status`
            WHERE th.`user_id` = $login_id AND th.`status` = 3"
        )->result();

        return $value;
    }

    public function get_transaction_bythId2($thId)
    {
        $bulan = date('m');

        $value = $this->db->query(
            "SELECT td.*, p.*, th.*, ti.* , (SELECT SUM(td.`approval`) FROM `tbl_transaction_detail` AS td WHERE `products_id` = p.`products_id` AND MONTH(created_date) = $bulan) AS jumlah_sebelumnya
            FROM `tbl_transaction_header` AS th
            JOIN `tbl_transaction_detail` AS td
            ON td.`th_id` = th.`th_id`
            JOIN `tbl_products` AS p
            ON td.`products_id` = p.`products_id`
            JOIN `tbl_products_image` AS ti
            ON ti.`products_id` = p.`products_id`
            WHERE th.`th_id` = $thId
            "
        )->result();

        return $value;
    }
    public function get_transaction_bythId($thId)
    {
        $bulan = date('m');
        $tahun = date('Y');
        $value = $this->db->query(
            "SELECT th.th_id, th.is_done, td.approval, p.`products_id`, p.`name`, i.images , td.`quantity` , td.`reason_desc`, 
                (SELECT SUM(approval)
                FROM `tbl_transaction_detail` AS tds
                WHERE tds.`products_id` = p.`products_id` AND MONTH(tds.created_date) = '$bulan' AND YEAR(tds.`created_date`) = '$tahun' AND tds.`th_id` IN (SELECT th_id FROM `tbl_transaction_header` WHERE `user_id` = th.`user_id`) ) AS alokasi ,
                (SELECT (SELECT SUM(TOTAL) AS awal FROM tbl_products_stock_history WHERE products_id = p.`products_id`)-(SELECT IFNULL(SUM(`approval`), 0 ) AS kurang FROM `tbl_transaction_detail` WHERE products_id = p.`products_id`)) AS sisa
                FROM `tbl_transaction_detail` AS td
                JOIN `tbl_products` AS p
                ON p.`products_id` = td.`products_id`
                JOIN tbl_products_image AS i
                ON p.products_id = i.products_id
                JOIN tbl_transaction_header AS th
                ON td.`th_id`= th.`th_id`
                WHERE td.th_id = '$thId'
                GROUP BY p.`products_id`"
        )->result();

        return $value;
    }

    public function get_totalItem_before_dirID($thId)
    {
        $bulan = date('m');
        $tahun = date('Y');

        $value = $this->db->query(
            "SELECT th.th_id, th.is_done, td.approval, p.`products_id`, p.`name`, i.images , td.`quantity` , td.`reason_desc`, 
                (SELECT SUM(approval)
                FROM `tbl_transaction_detail` AS tds
                WHERE tds.`products_id` = p.`products_id` AND MONTH(tds.created_date) = '$bulan' AND YEAR(tds.`created_date`) = '$tahun' AND tds.`th_id` IN (SELECT th_id FROM `tbl_transaction_header` WHERE `user_id` = th.`user_id`) ) AS alokasi ,
                (SELECT (SELECT SUM(TOTAL) AS awal FROM tbl_products_stock_history WHERE products_id = p.`products_id`)-(SELECT IFNULL(SUM(`approval`), 0 ) AS kurang FROM `tbl_transaction_detail` WHERE products_id = p.`products_id`)) AS sisa
                FROM `tbl_transaction_detail` AS td
                JOIN `tbl_products` AS p
                ON p.`products_id` = td.`products_id`
                JOIN tbl_products_image AS i
                ON p.products_id = i.products_id
                JOIN tbl_transaction_header AS th
                ON td.`th_id`= th.`th_id`
                WHERE td.th_id = '$thId'
                GROUP BY p.`products_id`"
        )->result();

        return $value;
    }

    public function get_totalItem_before_dirID2($thId)
    {
        $bulan = date('m');

        $value = $this->db->query(
            "SELECT td.*, p.*, th.*, ti.* , (SELECT SUM(td.`approval`) FROM `tbl_transaction_detail` AS td WHERE `products_id` = p.`products_id` AND MONTH(created_date) = $bulan AND td.`th_id` IN 
            (SELECT th_id 
                FROM `tbl_transaction_header` AS th	    
            WHERE user_id IN(SELECT user_id
            FROM tbl_user AS us
            WHERE dept_id = (SELECT dept_id 
                FROM `tbl_user` AS u
                WHERE user_id = (SELECT th.user_id
                FROM `tbl_transaction_header` AS th
                WHERE th.`th_id` = $thId))))
                ) AS jumlah_sebelumnya
                FROM `tbl_transaction_header` AS th
                JOIN `tbl_transaction_detail` AS td
                ON td.`th_id` = th.`th_id`
                JOIN `tbl_products` AS p
                ON td.`products_id` = p.`products_id`
                JOIN `tbl_products_image` AS ti
                ON ti.`products_id` = p.`products_id`
                WHERE th.`th_id` = $thId
            "
        )->result();

        return $value;
    }

    public function get_approval_item($login_id)
    {
        $value = $this->db->query(
            "SELECT th.* , ts.`status_name`, ts.`color`
            FROM `tbl_transaction_header` AS th
            JOIN `tbl_transaction_status` AS ts
            ON ts.`status_id` = th.`status`
            WHERE th.`user_id` = $login_id AND th.`status` = 3"
        )->result();

        return $value;
    }

    public function get_cartApproval($login_id)
    {
        $value = $this->db->query(
            "SELECT * 
            FROM `tbl_transaction_cart` AS tc
            JOIN `tbl_products` AS tp
            ON tc.`products_id` = tp.`products_id`
            WHERE tc.`login_id` = $login_id"
        )->result();

        return $value;
    }

    public function get_newOrder()
    {
        $value = $this->db->query(
            "SELECT th.th_id, th.no_surat, th.`tgl_surat`,th.`is_approval`, d.`department_name`, d.alias_dept, ts.`status_admin`, ts.`color`, th.url_nodin
            FROM `tbl_transaction_header` AS th
            JOIN `tbl_user` AS u
            ON th.user_id = u.user_id
            JOIN `tbl_department` AS d
            ON u.dept_id = d.id_department
            JOIN `tbl_transaction_status` AS ts
            ON ts.status_id = th.status
            WHERE th.status IN(1,2,3) 
            order by th.th_id DESC"
        )->result();

        return $value;
    }

    public function get_pastOrderThisMonth()
    {
        $value = $this->db->query(
            "SELECT *
            FROM `tbl_transaction_header` AS th
            JOIN `tbl_user` AS u
            ON th.user_id = u.user_id
            JOIN `tbl_department` AS d
            ON u.dept_id = d.id_department
            JOIN `tbl_transaction_status` AS ts
            ON ts.status_id = th.status
            WHERE th.status NOT IN(1,2) AND th.tgl_surat>NOW() - INTERVAL 2 MONTH
            order by th.tgl_surat DESC"
        )->result();

        return $value;
    }

    public function get_processedOrder()
    {
        $value = $this->db->query(
            "SELECT th.th_id, th.no_surat, th.`tgl_surat`,th.`is_approval`, d.`department_name`, d.alias_dept ,  ts.`status_admin`, ts.`color`, th.url_nodin
            FROM `tbl_transaction_header` AS th
            JOIN `tbl_user` AS u
            ON th.user_id = u.user_id
            JOIN `tbl_department` AS d
            ON u.dept_id = d.id_department
            JOIN `tbl_transaction_status` AS ts
            ON ts.status_id = th.status
            WHERE th.status IN(4) 
            order by th_id DESC"
        )->result();

        return $value;
    }

    public function get_cart_byUserId($id)
    {
        $value = $this->db->query(
            "SELECT tc.*
            FROM `tbl_transaction_cart` AS tc
            WHERE `login_id` = $id"
        )->result();

        return $value;
    }

    public function get_transDetailbyProdnThid($th, $prod)
    {
        $value = $this->db->query(
            "SELECT tc.*
            FROM `tbl_transaction_detail` AS tc
            WHERE `products_id` = $prod AND `th_id` = $th"
        )->result();

        return $value;
    }

    public function get_transDetailbyProd($prod)
    {
        $value = $this->db->query(
            "SELECT tc.*
            FROM `tbl_transaction_detail` AS tc
            WHERE `products_id` = $prod"
        )->result();

        return $value;
    }

    public function get_transHeaderbyProdid($prod)
    {
        $value = $this->db->query(
            "SELECT tp.*
            FROM `tbl_products` AS tp
            WHERE `products_id` = $prod"
        )->result();

        return $value;
    }


    public function get_data_forUpdateHistory($id)
    {
        $value = $this->db->query(
            "SELECT td.*, th.*
            FROM `tbl_transaction_header` AS th
            JOIN `tbl_transaction_detail` AS td
            ON th.`th_id` = td.`th_id`
            WHERE th.`th_id` = $id"
        )->result();

        return $value;
    }

    public function get_isApprovedDone($id)
    {
        $value = $this->db->query(
            "SELECT * 
            FROM `tbl_transaction_detail` 
            WHERE th_id = $id AND approval IS NULL"
        )->result();

        return $value;
    }

    public function get_transactionDetail_byTh_id($id)
    {
        $value = $this->db->query(
            "SELECT td.*
            FROM `tbl_transaction_header` AS th
            JOIN `tbl_transaction_detail` AS td
            ON th.`th_id` = td.`th_id`
            WHERE th.`th_id` = $id"
        )->result();

        return $value;
    }

    public function get_lockhistoryStock_byProdId($id)
    {
        $value = $this->db->query(
            "SELECT sh.*
            FROM `tbl_products_stock_history` AS sh            
            WHERE sh.`products_id` = $id
            AND terkirim != total AND sisa != total"
        )->result();

        return $value;
    }

    public function get_hitoryId_byProdsId($id)
    {
        $value = $this->db->query(
            "SELECT sh.*
            FROM `tbl_products_stock_history` AS sh            
            WHERE sh.`products_id` = $id"
        )->result();

        return $value;
    }

    public function get_datahitoryId_byProdsId($id)
    {
        $value = $this->db->query(
            "SELECT sh.* , p.`name`, p.products_id
            FROM `tbl_products` AS p
            JOIN `tbl_products_stock_history` AS sh            
            ON p.`products_id` = sh.`products_id`
            WHERE sh.`products_id` = $id"
        )->result();

        return $value;
    }

    public function get_nowPrices_by_Stock($id)
    {
        $value = $this->db->query(
            "SELECT sh.* , p.`name`
            FROM `tbl_products` AS p
            JOIN `tbl_products_stock_history` AS sh            
            ON p.`products_id` = sh.`products_id`
            WHERE sh.`products_id` = $id AND sh.sisa != 0 AND sh.terkirim != 0"
        )->result();

        return $value;
    }

    public function get_find_noSurat($no_surat)
    {
        $value = $this->db->query(
            "select th.`no_surat`
            from `tbl_transaction_header` as th
            where th.`no_surat` = '$no_surat'"
        )->result();

        return $value;
    }

    public function Submit_transactionHeader($data)
    {
        $this->db->insert("tbl_transaction_header", $data);
        return $this->db->insert_id();
    }

    public function Submit_transactionHistoryStock($data)
    {
        $this->db->insert("tbl_products_stock_history", $data);
        return $this->db->insert_id();
    }


    public function Submit_transactionDetail($data)
    {
        $this->db->insert("tbl_transaction_detail", $data);
        return $this->db->insert_id();
    }


    public function User_updateCart($id, $data)
    {
        $this->db->where('cart_id', $id);
        $result = $this->db->update('tbl_transaction_cart', $data);

        if (!empty($result)) {
            return 200;
        } else {
            return 404;
        }
    }

    public function update_TDetail($id, $data)
    {
        $this->db->where('td_id', $id);
        $result = $this->db->update('tbl_transaction_detail', $data);

        if (!empty($result)) {
            return 200;
        } else {
            return 404;
        }
    }

    function delete_itemCart($id)
    {
        $this->db->where('cart_id', $id);
        $this->db->delete('tbl_transaction_cart');

        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }

    function delete_itemCartAfterSubmit($login_id)
    {
        $this->db->where('login_id', $login_id);
        $this->db->delete('tbl_transaction_cart');

        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }

    function update_cart($id, $data)
    {

        $this->db->where('cart_id', $id);
        $this->db->update('tbl_transaction_cart', $data);

        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }

    function update_adminAproval($id, $data)
    {

        $this->db->where('td_id', $id);
        $this->db->update('tbl_transaction_detail', $data);

        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }


    function update_historyStok($id, $data)
    {

        $this->db->where('history_prod_id', $id);
        $this->db->update('tbl_products_stock_history', $data);

        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }

    function update_transaksiHeader($id, $data)
    {
        $this->db->where('th_id', $id);
        $this->db->update('tbl_transaction_header', $data);

        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }
}
