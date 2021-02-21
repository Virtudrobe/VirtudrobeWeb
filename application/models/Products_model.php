<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Products_model extends CI_Model {

    public $title;
    public $content;
    public $date;

    public function __construct()
    {
        $this->load->database();
    }
    public function get_products($limit=null)
    {
        $query = $this->db->get('tbl_products', $limit);
        return $query->result_array();
    }

    public function get_total_products(){
        $query = $this->db->get('tbl_products');
        return $query->num_rows();
    }

    public function get_products_random($limit=null)
    {
        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->limit($limit);
        $this->db->join('tbl_product_images', 'tbl_product_images.product_id = tbl_products.product_id');
        $query = $this->db->get();
        return $query->result_array();
    }

}

?>
