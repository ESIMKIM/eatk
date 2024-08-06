<?php
defined('BASEPATH') or die('No direct script access allowed!');

class M_Dashboard extends CI_Model
{

    function get_belumTerimaBarang($user_id)
    {
        $value = $this->db->query(
            "SELECT * FROM `tbl_transaction_header` AS th WHERE th.user_id = '$user_id' AND th.status != 4"
        )->num_rows();
        return $value;
    }

    function get_transacthisMonth($firstDate, $lastDate)
    {
        $value = $this->db->query(
            "SELECT dh.`category_id`, dc.`name`, dh.`item_name`, COUNT(*) AS total_distribusi
            FROM `tbl_devices_header` AS dh
            JOIN `tbl_devices_detail` AS dd
            ON dd.`item_header_id` = dh.`item_header_id`
            JOIN `tbl_devices_category` AS dc
            ON dc.`category_id` = dh.`category_id`
            WHERE dh.`is_active`= 1 AND dd.`item_detail_id` IN (SELECT td.`device_detail_id`
            FROM `tbl_transaction_header` AS th
            JOIN `tbl_trensaction_detail` AS td
            ON th.`th_id` = td.`th_id`
            WHERE th.`order_date` >= '$firstDate' AND th.`order_date` <= '$lastDate' ) GROUP BY `category_id`"
        )->result();
        return $value;
    }

    function get_allItems()
    {
        $value = $this->db->query(
            "SELECT dh.`item_header_id`,  dc.`name`, dh.`item_name`, dd.`item_detail_id`, COUNT(*) AS total_devices 
            FROM `tbl_devices_header` AS dh
            JOIN `tbl_devices_detail` AS dd
            ON dd.`item_header_id` = dh.`item_header_id`
            JOIN `tbl_devices_category` AS dc
            ON dc.`category_id` = dh.`category_id`
            WHERE dh.`is_active`= 1 
            GROUP BY dc.`name`"
        )->result();
        return $value;
    }

    function get_dataPengirimanItem($limit)
    {
        $value = $this->db->query(
            "SELECT td.`products_id`, p.`name`, pis.`images` ,SUM(`approval`) AS persetujuan, SUM(`quantity`) AS permintaan
            FROM `tbl_transaction_detail` AS td
            JOIN `tbl_transaction_header` AS th
            ON th.th_id = td.th_id
            JOIN `tbl_products` AS p
            ON p.`products_id` = td.`products_id`
            JOIN `tbl_products_image` AS pis
            ON pis.`products_id` = td.`products_id`
            WHERE YEAR(th.tgl_surat) = YEAR(CURDATE())
            GROUP BY td.products_id
            ORDER BY p.`products_id` ASC
            limit $limit
            "
        )->result();
        return $value;
    }

    function get_dataPengirimanItemTotal()
    {
        $value = $this->db->query(
            "SELECT SUM(`approval`) AS total_persetujuan
            FROM `tbl_transaction_detail` AS td
            JOIN `tbl_transaction_header` AS th
            ON th.th_id = td.th_id
            JOIN `tbl_products` AS p
            ON p.`products_id` = td.`products_id`
            JOIN `tbl_products_image` AS pis
            ON pis.`products_id` = td.`products_id`
            WHERE YEAR(th.tgl_surat) = YEAR(CURDATE())
            "
        )->result();
        return $value;
    }

    function get_dataPenerimaanItem($limit)
    {
        $value = $this->db->query(
            "SELECT p.`products_id`, p.`name`, pis.`images`, ps.`date_po`, SUM(ps.`total`) AS penerimaan
            FROM `tbl_products` AS p
            JOIN `tbl_products_image` AS pis
            ON p.`products_id` = pis.`products_id`
            JOIN `tbl_products_stock_history` AS ps
            ON p.`products_id` = ps.`products_id`
            WHERE YEAR(ps.`date_po`) = YEAR(CURDATE())
            GROUP BY ps.products_id
            limit $limit
            "
        )->result();
        return $value;
    }

    function get_dataPenerimaanItemTotal()
    {
        $value = $this->db->query(
            "SELECT SUM(ps.`total`) AS total_penerimaan
            FROM `tbl_products` AS p
            JOIN `tbl_products_image` AS pis
            ON p.`products_id` = pis.`products_id`
            JOIN `tbl_products_stock_history` AS ps
            ON p.`products_id` = ps.`products_id`
            WHERE YEAR(ps.`date_po`) = YEAR(CURDATE())
            "
        )->result();
        return $value;
    }

    function get_dataStockReal($limit)
    {
        $value = $this->db->query(
            "SELECT p.`products_id`, p.`name`, pis.`images`, p.qty
            FROM `tbl_products` AS p
            JOIN `tbl_products_image` AS pis
            ON p.`products_id` = pis.`products_id`
            limit $limit
            "
        )->result();
        return $value;
    }

    function get_dataStockRealTotal()
    {
        $value = $this->db->query(
            "SELECT sum(p.qty)
            FROM `tbl_products` AS p
            JOIN `tbl_products_image` AS pis
            ON p.`products_id` = pis.`products_id`
            "
        )->result();
        return $value;
    }

    function get_dataPengirimanbyBagian($limit)
    {
        $value = $this->db->query(
            "SELECT tdp.*, COUNT(th.no_surat) AS total
            FROM `tbl_transaction_header` AS th
            JOIN `tbl_user` AS tu
            ON tu.user_id = th.user_id
            JOIN `tbl_department` AS tdp
            ON tdp.id_department = tu.dept_id
            WHERE YEAR(th.tgl_surat) = YEAR(CURDATE())
            GROUP BY tdp.department_name
            limit $limit
            "
        )->result();
        return $value;
    }

    function get_dataPengirimanbyBagianTotal($limit)
    {
        $value = $this->db->query(
            "SELECT COUNT(th.no_surat) AS total_dir
            FROM `tbl_transaction_header` AS th
            JOIN `tbl_user` AS tu
            ON tu.user_id = th.user_id
            JOIN `tbl_department` AS tdp
            ON tdp.id_department = tu.dept_id
            WHERE YEAR(th.tgl_surat) = YEAR(CURDATE())
            "
        )->result();
        return $value;
    }

    function get_gS1_stokAwal()
    {
        $year = date('y') . '-01-30';
        $value = $this->db->query(
            "SELECT SUM(`total`) AS stok_awal_year 
            FROM `tbl_products_stock_history` AS ph 
	    JOIN tbl_products AS p
            ON p.products_id = ph.products_id            
            WHERE `date_po` <= '$year' AND p.is_active = 1"
        )->result();
        return $value;
    }

    function get_gS1_kirim()
    {
        $year1 = date('y') . '-01-01';
        $year2 = date('y') . '-06-30';
        $value = $this->db->query(
            "SELECT SUM(`approval`) AS s1_kirim FROM `tbl_transaction_detail` AS td WHERE `created_date` > '$year1' AND  `created_date` < '$year2'"
        )->result();
        return $value;
    }

    function get_gS1_tambahStok()
    {
        $year = date('y') . '-01-01';
        $value = $this->db->query(
            "SELECT  SUM(`total`) AS add_stok_year FROM `tbl_products_stock_history` AS h WHERE `date_po` > '$year'"
        )->result();
        return $value;
    }

    function get_gS1_stokAkhir()
    {
        $year1 = date('y') . '-01-01';
        $year2 = date('y') . '-06-30';
        $value = $this->db->query(
            "SELECT (SELECT SUM(ph.`total`) FROM `tbl_products_stock_history` AS ph JOIN tbl_products AS p ON p.products_id = ph.products_id WHERE p.is_active = 1) - 
            (SELECT SUM(td.`approval`) FROM `tbl_transaction_detail` AS td JOIN tbl_products AS p ON p.products_id = td.products_id  WHERE td.`created_date` > '$year1' AND  td.`created_date` < '$year2') AS stok_akhir"
        )->result();
        return $value;
    }


    function get_gS2_stokAwal()
    {
        $year = date('y') . '-06-30';
        $value = $this->db->query(
            // "SELECT  SUM(`total`) AS stok_awal_year FROM `tbl_products_stock_history` AS h WHERE `date_po` <= '$year'"
            "SELECT SUM(`total`) AS stok_awal_year 
            FROM `tbl_products_stock_history` AS ph 
	        JOIN tbl_products AS p
            ON p.products_id = ph.products_id            
            WHERE `date_po` <= '$year' AND p.is_active = 1"
        )->result();
        return $value;
    }

    function get_gS2_kirim()
    {
        $year1 = date('y') . '-07-01';
        $year2 = date('y') . '-12-30';
        $value = $this->db->query(
            "SELECT SUM(`approval`) AS s1_kirim FROM `tbl_transaction_detail` AS td WHERE `created_date` > '$year1' AND  `created_date` < '$year2'"
        )->result();
        return $value;
    }

    function get_gS2_tambahStok()
    {
        $year = date('y') . '-06-01';
        $value = $this->db->query(
            "SELECT  SUM(`total`) AS add_stok_year FROM `tbl_products_stock_history` AS h WHERE `date_po` > '$year'"
        )->result();
        return $value;
    }

    function get_gS2_stokAkhir()
    {
        $year1 = date('y') . '-07-01';
        $year2 = date('y') . '-12-30';
        $value = $this->db->query(
            // "SELECT (SELECT SUM(`total`) FROM `tbl_products_stock_history` AS h) - (SELECT SUM(`approval`) FROM `tbl_transaction_detail` AS td WHERE `created_date` > '$year1' AND  `created_date` < '$year2') AS stok_akhir"
            "SELECT (SELECT SUM(ph.`total`) FROM `tbl_products_stock_history` AS ph JOIN tbl_products AS p ON p.products_id = ph.products_id WHERE p.is_active = 1) -
            (SELECT SUM(td.`approval`) FROM `tbl_transaction_detail` AS td JOIN tbl_products AS p ON p.products_id = td.products_id  WHERE td.`created_date` > '$year1' AND  td.`created_date` < '$year2') AS stok_akhir"
        )->result();
        return $value;
    }

    function get_listDep()
    {
        $value = $this->db->query(
            "SELECT dep.`alias_dept`, SUM(td.`approval`) AS total, dep.`color_graph`
            FROM `tbl_transaction_header` AS th
            JOIN `tbl_transaction_detail` AS td
            ON th.`th_id` = td.`th_id`
            JOIN `tbl_user` AS u
            ON u.`user_id` = th.`user_id`
            JOIN `tbl_department` AS dep
            ON dep.`id_department` = u.`dept_id`
            GROUP BY dep.`department_name`
            "
        )->result();
        return $value;
    }

    function get_listDep2()
    {
        $value = $this->db->query(
            "SELECT dep.`alias_dept`, SUM(td.`approval`) AS total, dep.`color_graph`
            FROM `tbl_transaction_detail` AS td
            JOIN `tbl_transaction_header` AS th
            ON th.`th_id` = td.`th_id`
            JOIN `tbl_user` AS u
            ON u.`user_id` = th.`user_id` 
            JOIN `tbl_department` AS dep
            ON dep.`id_department` = u.`dept_id`
            WHERE th.`user_id` IN (SELECT DISTINCT(user_id) FROM `tbl_transaction_header`)           
            GROUP BY dep.alias_dept"
        )->result();
        return $value;
    }





    public function insert($data)
    {
        $this->db->insert("tbl_product_merk", $data);
        return $this->db->insert_id();
    }

    public function update($id, $data)
    {
        $this->db->where('merk_id', $id);
        $result = $this->db->update('tbl_product_merk', $data);
        return $result;
    }

    function delete($id)
    {
        $this->db->where('merk_id', $id);
        $this->db->delete('tbl_product_merk');
    }

    function Custom_Query()
    {
        $value = $this->db->query("SELECT * from `table` where 1")->result();
        return $value;
    }
}
