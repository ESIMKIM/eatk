<?php
defined('BASEPATH') or die('No direct script access allowed!');

class M_Products extends CI_Model
{

    // Fetch records Dashboard
    public function get_all_Products($rowno, $rowperpage, $search = "")
    {
        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->join('tbl_products_image', 'tbl_products.products_id = tbl_products_image.products_id', 'left');
        $this->db->join('tbl_products_satuan', 'tbl_products.satuan_id = tbl_products_satuan.satuan_id');
        $this->db->where('is_active', 1);
        $this->db->where('is_visible', 1);
        $this->db->where('is_thumbnails', 1);

        if ($search != '') {
            $this->db->like('name', $search);
            $this->db->or_like('desc', $search);
        }

        $this->db->limit($rowperpage, $rowno);
        $query = $this->db->get();

        return $query->result_array();
    }

    // Select total records Dashboard
    public function get_all_ProductsCount($search = '')
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('tbl_products');
        $this->db->join('tbl_products_image', 'tbl_products.products_id = tbl_products_image.products_id', 'left');
        $this->db->join('tbl_products_satuan', 'tbl_products.satuan_id = tbl_products_satuan.satuan_id');
        $this->db->where('is_active', 1);
        $this->db->where('is_visible', 1);
        $this->db->where('is_thumbnails', 1);

        if ($search != '') {
            $this->db->like('name', $search);
            $this->db->or_like('desc', $search);
        }

        $query = $this->db->get();
        $result = $query->result_array();

        return $result[0]['allcount'];
    }

    public function get_single_products_byId($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->join('tbl_products_image', 'tbl_products.products_id = tbl_products_image.products_id');
        $this->db->join('tbl_products_satuan', 'tbl_products.satuan_id = tbl_products_satuan.satuan_id');
        $this->db->join('tbl_products_merk', 'tbl_products.merk_id = tbl_products_merk.merk_id');
        $this->db->join('tbl_products_category', 'tbl_products.category_id = tbl_products_category.category_id');
        $this->db->where('tbl_products.is_active', 1);
        $this->db->where('tbl_products.products_id', $id);
        $this->db->where('tbl_products_image.is_thumbnails', 1);


        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_single_productsSliderImg_byId($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->join('tbl_products_image', 'tbl_products.products_id = tbl_products_image.products_id');
        $this->db->where('tbl_products.is_active', 1);
        $this->db->where('tbl_products.products_id', $id);
        $this->db->where('tbl_products_image.is_slider', 1);


        $query = $this->db->get();

        return $query->result_array();
    }


    // Fetch records Merk
    public function get_all_ProductsbyMerk($rowno, $rowperpage, $search = "", $merkId)
    {
        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->join('tbl_products_image', 'tbl_products.products_id = tbl_products_image.products_id', 'left');
        $this->db->join('tbl_products_satuan', 'tbl_products.satuan_id = tbl_products_satuan.satuan_id');
        $this->db->where('is_active', 1);
        $this->db->where('is_visible', 1);
        $this->db->where('is_thumbnails', 1);
        $this->db->where('tbl_products.merk_id', $merkId);


        if ($search != '') {
            $this->db->like('name', $search);
            $this->db->or_like('desc', $search);
        }

        $this->db->limit($rowperpage, $rowno);
        $query = $this->db->get();

        return $query->result_array();
    }

    // Select total records Merk
    public function get_all_ProductsCountbyMerk($search = '', $merkId)
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('tbl_products');
        $this->db->join('tbl_products_image', 'tbl_products.products_id = tbl_products_image.products_id', 'left');
        $this->db->join('tbl_products_satuan', 'tbl_products.satuan_id = tbl_products_satuan.satuan_id');
        $this->db->where('is_active', 1);
        $this->db->where('is_visible', 1);
        $this->db->where('is_thumbnails', 1);
        $this->db->where('tbl_products.merk_id', $merkId);

        if ($search != '') {
            $this->db->like('name', $search);
            $this->db->or_like('desc', $search);
        }

        $query = $this->db->get();
        $result = $query->result_array();

        return $result[0]['allcount'];
    }


    public function get_all_ProductsbyCategory($rowno, $rowperpage, $search = "", $category_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->join('tbl_products_image', 'tbl_products.products_id = tbl_products_image.products_id', 'left');
        $this->db->join('tbl_products_satuan', 'tbl_products.satuan_id = tbl_products_satuan.satuan_id');
        $this->db->where('is_active', 1);
        $this->db->where('is_visible', 1);
        $this->db->where('is_thumbnails', 1);
        $this->db->where('tbl_products.category_id', $category_id);


        if ($search != '') {
            $this->db->like('name', $search);
            $this->db->or_like('desc', $search);
        }

        $this->db->limit($rowperpage, $rowno);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_prod_byId($id)
    {
        $value = $this->db->query(
            "SELECT * FROM `tbl_products` WHERE `products_id` = '$id' "
        )->result();

        return $value;
    }

    public function get_allProd_byId()
    {
        $value = $this->db->query(
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
        )->result();

        return $value;
    }

    var $column_search = array('name', 'name_merk', 'prices', 'name_category', 'qty');
    var $column_order = array('name', 'name_merk', 'prices', 'name_category', 'qty');
    var $order = array('products_id' => 'desc');


    private function _get_produkBarang()
    {
        $this->db->select('p.products_id');
        $this->db->select('p.prices,');
        $this->db->select('img.`images` AS gambar');
        $this->db->select('p.`name` AS nama_barang');
        $this->db->select('pm.`name_merk` AS merk');
        $this->db->select('pc.`name_category` AS category');
        // $this->db->select("p.qty");
        $this->db->select("
          (SELECT SUM(TOTAL) as awal FROM tbl_products_stock_history WHERE products_id = p.products_id) -
          (SELECT IFNULL(SUM(`approval`),0) as kurang FROM `tbl_transaction_detail` WHERE products_id = p.products_id) as qty");
        $this->db->select("ps.name_satuan");
        // $this->db->select("CONCAT_WS(' ', users.first_name, users.last_name) AS name");
        $this->db->from('tbl_products p');
        $this->db->join('tbl_products_image img', 'p.products_id=img.products_id');
        $this->db->join('tbl_products_category pc', 'pc.category_id=p.category_id');
        $this->db->join('tbl_products_satuan ps', 'ps.satuan_id=p.satuan_id');
        $this->db->join('tbl_products_merk pm', 'p.merk_id=pm.merk_id');
        $this->db->where('p.is_active', 1);

        $this->db->order_by('p.products_id', 'DESC');

        $i = 0;

        // // filter search
        // foreach ($this->column_search as $item) {
        //     if (@$_POST['search']['value']) {
        //         if ($i = 0) {
        //             $this->db->group_start();
        //             $this->db->like($item, $_POST['search']['value']);
        //         } else {
        //             $this->db->or_like($item, $_POST['search']['value']);
        //         }
        //     }
        //     if (count($this->column_search) - 1 == $i) {
        //         $this->db->group_end();
        //     }
        // }

        if (@$_POST['search']['value']) {
            $this->db->group_start(); // Mulai grup pencarian
            foreach ($this->column_search as $item) {
                if ($i > 0) {
                    $this->db->or_like($item, $_POST['search']['value']);
                } else {
                    $this->db->like($item, $_POST['search']['value']);
                }
                $i++;
            }
            $this->db->group_end(); // Akhiri grup pencarian
        }

        $i++;
        // filter order / pengurutan
        if (@$_POST['order']) {
            $this->db->order_by($this->column_order[$_POST['order'][0]['column']], $_POST['order']['0']['dir']);
        } else {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }

        //     $this->db->select('p.products_id');
        //     $this->db->select('p.prices');
        //     $this->db->select('img.images AS gambar');
        //     $this->db->select('p.name AS nama_barang');
        //     $this->db->select('pm.name_merk AS merk');
        //     $this->db->select('pc.name_category AS category');
        //     $this->db->select("
        // (SELECT SUM(TOTAL) FROM tbl_products_stock_history WHERE products_id = p.products_id) - 
        // (SELECT IFNULL(SUM(approval), 0) FROM tbl_transaction_detail WHERE products_id = p.products_id) AS qty");
        //     $this->db->select('ps.name_satuan');
        //     $this->db->from('tbl_products p');
        //     $this->db->join('tbl_products_image img', 'p.products_id = img.products_id');
        //     $this->db->join('tbl_products_category pc', 'pc.category_id = p.category_id');
        //     $this->db->join('tbl_products_satuan ps', 'ps.satuan_id = p.satuan_id');
        //     $this->db->join('tbl_products_merk pm', 'p.merk_id = pm.merk_id');

        //     // Tambahkan filter is_active
        //     $this->db->where('p.is_active', 1);

        //     $this->db->order_by('p.products_id', 'DESC');

        //     $i = 0;

        //     // Filter pencarian
        //     if (@$_POST['search']['value']) {
        //         $this->db->group_start(); // Mulai grup pencarian
        //         foreach ($this->column_search as $item) {
        //             if ($i > 0) {
        //                 $this->db->or_like($item, $_POST['search']['value']);
        //             } else {
        //                 $this->db->like($item, $_POST['search']['value']);
        //             }
        //             $i++;
        //         }
        //         $this->db->group_end(); // Akhiri grup pencarian
        //     }

        //     // Filter pengurutan
        //     if (@$_POST['order']) {
        //         $this->db->order_by($this->column_order[$_POST['order'][0]['column']], $_POST['order'][0]['dir']);
        //     } else {
        //         $order = $this->order;
        //         $this->db->order_by(key($order), $order[key($order)]);
        //     }
    }

    public function get_produkBarang()
    {
        $this->_get_produkBarang();
        if (@$_POST['length'] != 1) {
            $this->db->limit(@$_POST['length'], @$_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function countFilterProdukBarang()
    {
        $this->_get_produkBarang();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function countAllProdukBarang()
    {
        $this->db->select('p.products_id');
        $this->db->select('p.prices,');
        // $this->db->select('img.`images` AS gambar');
        $this->db->select('p.`name` AS nama_barang');
        $this->db->select('pm.`name_merk` AS merk');
        $this->db->select('pc.`name_category` AS category');
        $this->db->select("p.qty");
        $this->db->select("ps.name_satuan");
        $this->db->from('tbl_products p');
        $this->db->join('tbl_products_image img', 'p.products_id=img.products_id');
        $this->db->join('tbl_products_category pc', 'pc.category_id=p.category_id');
        $this->db->join('tbl_products_satuan ps', 'ps.satuan_id=p.satuan_id');
        $this->db->join('tbl_products_merk pm', 'p.merk_id=pm.merk_id');
        $this->db->order_by('p.products_id', 'DESC');
        return $this->db->count_all_results();
    }

    public function get_updateIdHistory_byProdId($id)
    {
        $value = $this->db->query(
            "SELECT `history_prod_id`, total, terkirim
            FROM tbl_products_stock_history
            WHERE `products_id` = $id
            AND terkirim != total
            ORDER BY date_po
            LIMIT 1"
        )->result();

        return $value;
    }

    public function get_stokHistory_byProdId($id)
    {
        $value = $this->db->query(
            "SELECT `history_prod_id`, total, terkirim
            FROM tbl_products_stock_history
            WHERE `products_id` = $id
            AND terkirim != total
            ORDER BY date_po"

        )->result();

        return $value;
    }

    public function get_base46InvoiceVendor($id)
    {

        $value = $this->db->query(
            "SELECT history_prod_id, lampiran
            FROM tbl_products_stock_history
            WHERE `history_prod_id` = $id"
        )->result();

        return $value;
    }

    // Select total records Category
    public function get_all_ProductsCountbyCategory($search = '', $category_id)
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('tbl_products');
        $this->db->join('tbl_products_image', 'tbl_products.products_id = tbl_products_image.products_id', 'left');
        $this->db->join('tbl_products_satuan', 'tbl_products.satuan_id = tbl_products_satuan.satuan_id');
        $this->db->where('is_active', 1);
        $this->db->where('is_visible', 1);
        $this->db->where('is_thumbnails', 1);
        $this->db->where('tbl_products.category_id', $category_id);

        if ($search != '') {
            $this->db->like('name', $search);
            $this->db->or_like('desc', $search);
        }

        $query = $this->db->get();
        $result = $query->result_array();

        return $result[0]['allcount'];
    }


    public function get_productImg_byProdID($id)
    {
        $value = $this->db->query(
            "SELECT *
            FROM tbl_products_image
            WHERE products_id = $id"
        )->result();

        return $value;
    }

    public function cek_sameInput($nama)
    {
        $value = $this->db->query(
            "SELECT *
            FROM tbl_products as tp
            WHERE tp.name = '$nama'"
        )->result();

        return $value;
    }

    public function insert_products($data)
    {
        $this->db->insert("tbl_products", $data);
        return $this->db->insert_id();
    }

    public function insert_products_images($data)
    {
        $this->db->insert("tbl_products_image", $data);
        return $this->db->insert_id();
    }

    public function update_products_images($data, $id)
    {
        $this->db->where('img_id', $id);
        $this->db->update('tbl_products_image', $data);

        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }

    function update_stockSisa_byProd($id, $data)
    {
        $this->db->where('history_prod_id', $id);
        $this->db->update('tbl_products_stock_history', $data);

        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }

    function update_prods_byid($id, $data)
    {
        $this->db->where('products_id', $id);
        $this->db->update('tbl_products', $data);

        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }
}