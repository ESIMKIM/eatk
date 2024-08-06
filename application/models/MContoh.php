<?php
defined('BASEPATH') or die('No direct script access allowed!');

class MContoh extends CI_Model
{

    public function get_allDevices()
    {
        $value = $this->db->get('tbl_devices_header')->result();
        return $value;
    }

    public function get_devicesbyId($id)
    {
        // $this->db->order_by('item_header_id', 'DESC');
        // $this->db->where('item_header_id', $id);
        // $value = $this->db->get('tbl_devices_header')->result();
        // return $value;
        $value = $this->db->query(
            "SELECT dh.`item_header_id`, dc.`name` AS kategori, dc.`kode_barang`, dm.`name` AS merk, dh.`item_name`, (SELECT COUNT(item_detail_id) FROM `tbl_devices_detail` WHERE `item_header_id` = dh.item_header_id) AS stok, dh.`thumbnails`
            FROM `tbl_devices_header` AS dh
            JOIN `tbl_devices_merk` AS dm
            ON dh.`merk_id` = dm.`merk_id`
            JOIN `tbl_devices_category` AS dc
            ON dh.`category_id` = dc.`category_id`
            WHERE dh.`item_header_id` = '$id'"

        )->result_array();
        return $value;
    }

    public function get_barang_by_kode($kobar)
    {
        $result = $this->db->query("SELECT * FROM tbl_barang WHERE barang_kode='$kobar'");
        // if ($hsl->num_rows() > 0) {
        //     foreach ($hsl->result() as $data) {
        //         $hasil = array(
        //             'barang_kode' => $data->barang_kode,
        //             'barang_nama' => $data->barang_nama,
        //             'barang_harga' => $data->barang_harga,
        //         );
        //     }
        // }
        // return $hasil;
    }

    public function update_itemHeader($id, $data)
    {
        $this->db->where('item_header_id', $id);
        $result = $this->db->update('tbl_devices_header', $data);

        if (!empty($result)) {
            return 200;
        } else {
            return 404;
        }
    }

    public function insert_devicesHeader($data)
    {
        $this->db->insert("tbl_devices_header", $data);
        return $this->db->insert_id();
    }

    public function get_devices()
    {
        $value = $this->db->query(
            "SELECT dh.`item_header_id`, dc.`name` AS kategori, dc.`kode_barang`, dm.`name` AS merk, dh.`item_name`, (SELECT COUNT(item_detail_id) FROM `tbl_devices_detail` WHERE `item_header_id` = dh.item_header_id) AS stok
            FROM `tbl_devices_header` AS dh
            JOIN `tbl_devices_merk` AS dm
            ON dh.`merk_id` = dm.`merk_id`
            JOIN `tbl_devices_category` AS dc
            ON dh.`category_id` = dc.`category_id`
            WHERE dh.is_active = 1
            ORDER BY dh.`item_header_id` DESC"
        )->result_array();
        return $value;
    }

    public function get_devicesDetail($id)
    {
        $value = $this->db->query(
            "  SELECT dm.`name` AS namaA, dh.`item_name`, dc.`kode_barang` , dc.`name` AS namaB, dd.nup
            FROM `tbl_devices_header` AS dh
            JOIN `tbl_devices_detail` AS dd
            ON dh.`item_header_id` = dd.`item_header_id`
            JOIN `tbl_devices_merk` AS dm
            ON dh.`merk_id` = dm.`merk_id`
            JOIN `tbl_devices_category` AS dc
            ON dh.`category_id` = dc.`category_id`
            WHERE dd.`item_header_id` = '$id' AND dh.is_active = 1
            ORDER BY dd.`nup` ASC"
        )->result_array();
        return $value;
    }

    public function delete_item($id)
    {
        $this->db->where('', $id);
        $this->db->delete('');
    }

    public function Custom_Query()
    {
        $value = $this->db->query("SELECT * from `table` where 1")->result();
        return $value;
    }

    public $table = 'customers';
    public $column_order = array(null, 'FirstName', 'LastName', 'phone', 'address', 'city', 'country'); //set column field database for datatable orderable
    public $column_search = array('FirstName', 'LastName', 'phone', 'address', 'city', 'country'); //set column field database for datatable searchable
    public $order = array('id' => 'asc'); // default order

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function get_datatables_query()
    {

        //add custom filter here
        if ($this->input->post('country')) {
            $this->db->where('country', $this->input->post('country'));
        }
        if ($this->input->post('FirstName')) {
            $this->db->like('FirstName', $this->input->post('FirstName'));
        }
        if ($this->input->post('LastName')) {
            $this->db->like('LastName', $this->input->post('LastName'));
        }
        if ($this->input->post('address')) {
            $this->db->like('address', $this->input->post('address'));
        }

        $this->db->from($this->table);
        $i = 0;

        foreach ($this->column_search as $item) // loop column
        {
            if ($_POST['search']['value']) // if datatable send POST for search
            {

                if ($i === 0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) //last loop
                {
                    $this->db->group_end();
                }
                //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    public function get_datatables()
    {
        $this->get_datatables_query();
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }

        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered()
    {
        $this->get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function get_list_countries()
    {
        $this->db->select('country');
        $this->db->from($this->table);
        $this->db->order_by('country', 'asc');
        $query = $this->db->get();
        $result = $query->result();

        $countries = array();
        foreach ($result as $row) {
            $countries[] = $row->country;
        }
        return $countries;
    }
}
