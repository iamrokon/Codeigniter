<?php

class Welcome_Model extends CI_Model{
    //put your code here

    public function select_product_by_id($product_id)
    {
//       $this->db->select('*');
//        $this->db->from('tbl_product');
//        $this->db->where('publication_status',1);
//        $this->db->where('product_id',$product_id);
        $sql="SELECT p.*,m.manufacturer_name,c.category_name FROM tbl_product as p,tbl_manufacturer as m,tbl_category as c WHERE p.manufacturer_id=m.manufacturer_id AND p.category_id=c.category_id AND p.product_id='$product_id'";
        $query_result=$this->db->query($sql);
        $result=$query_result->row();
//        echo '<pre>';
//        print_r($result);
//        exit();
        return $result;  
    }
     public function select_published_product_by_category_id($category_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status',1);
        $this->db->where('category_id',$category_id);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result; 
    }
}

