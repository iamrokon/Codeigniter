<?php
class Super_Admin_Model extends CI_Model {
    //put your code here
    public function save_category_info($data)
    {
        $this->db->insert('tbl_category',$data);
    }
    public function select_all_category()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function unpublished_category_info($category_id)
    {
        $this->db->set('publication_status',0);
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category');
    }
    public function published_category_info($category_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category');
    }
    public function delete_category_info_by_id($category_id)
    {
        $this->db->where('category_id',$category_id);
        $this->db->delete('tbl_category');
    }
    public function select_category_info_by_id($category_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id',$category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;  
    }
    public function update_category_info($data,$category_id)
    {
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category',$data);
    
    } 
    //manufacturer
     public function save_manufacturer_info($data)
    {
        $this->db->insert('tbl_manufacturer',$data);
    }
     public function select_all_manufacturer()
    {
        $this->db->select('*');
        $this->db->from('tbl_manufacturer');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function unpublished_manufacturer_info($manufacturer_id)
    {
        $this->db->set('publication_status',0);
        $this->db->where('manufacturer_id',$manufacturer_id);
        $this->db->update('tbl_manufacturer');
    }
    public function published_manufacturer_info($manufacturer_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('manufacturer_id',$manufacturer_id);
        $this->db->update('tbl_manufacturer');
    }
    public function delete_manufacturer_info_by_id($manufacturer_id)
    {
        $this->db->where('manufacturer_id',$manufacturer_id);
        $this->db->delete('tbl_manufacturer');
    }
    public function select_manufacturer_info_by_id($manufacturer_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_manufacturer');
        $this->db->where('manufacturer_id',$manufacturer_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;  
    }
    public function update_manufacturer_info($data,$manufacturer_id)
    {
        $this->db->where('manufacturer_id',$manufacturer_id);
        $this->db->update('tbl_manufacturer',$data);
    
    } 
    //product
     public function select_all_published_category()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    public function select_all_published_manufacturer()
    {
        $this->db->select('*');
        $this->db->from('tbl_manufacturer');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    public function save_product_info($data)
    {
         $this->db->insert('tbl_product', $data);
    }
     public function select_all_product()
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
     public function unpublished_product_info($product_id)
    {
        $this->db->set('publication_status',0);
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_product');
    }
    public function published_product_info($product_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_product');
    }
    public function delete_product_info_by_id($product_id)
    {
        $this->db->where('product_id',$product_id);
        $this->db->delete('tbl_product');
    }
    public function select_product_info_by_id($product_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_id',$product_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;    
    }
     public function update_product_info($data,$product_id)
    {
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_product',$data);
    
    } 
    
    public function select_all_published_product()
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
}
