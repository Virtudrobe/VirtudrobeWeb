<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_products extends CI_Model {

    public $title;
    public $content;
    public $date;

    public function getProductsData()
    {
            $query = $this->db->get('tbl_products');
            return $query->result();
    }

}

?>