<?php

class Checkout_Model extends CI_Model {
    //put your code here
    public function save_customer_info($data)
    {
        $this->db->insert('tbl_customer',$data);
        $customer_id=$this->db->insert_id();
        return $customer_id;
    }
    public function save_shipping_info($data)
    {
        $this->db->insert('tbl_shipping',$data);
        $shipping_id=$this->db->insert_id();
        return $shipping_id;
    }
    public function check_customer_login_info($email_address, $password)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('email_address',$email_address);
        $this->db->where('password',$password);
        $query_result=$this->db->get();
        $result=$query_result->row();
//        echo '<pre/>';
//        print_r($result);
//        exit();
        return $result;
    }
    public function save_payment_info($pdata)
    {
        $this->db->insert('tbl_payment',$pdata);
        $payment_id=$this->db->insert_id();
        $sdata=array();
        $sdata['payment_id']=$payment_id;
        $this->session->set_userdata($sdata);
    }
    public function save_order_info()
    {
        /*
         * Save Data in Order Table
         */
        $odata=array();
        $odata['customer_id']=$this->session->userdata('customer_id');
        $odata['shipping_id']=$this->session->userdata('shipping_id');
        $odata['payment_id']=$this->session->userdata('payment_id');
        $odata['order_total']=$this->session->userdata('g_total');
        $this->db->insert('tbl_order',$odata);
        $order_id=$this->db->insert_id();
        /*
         * Save Data In Order Details Table
         */
        $contents=$this->cart->contents();
        foreach($contents as $v_contents)
        {
            $oddata['order_id']=$order_id;
            $oddata['product_id']=$v_contents['id'];
            $oddata['product_name']=$v_contents['name'];
            $oddata['product_price']=$v_contents['price'];
            $oddata['product_sales_quantity']=$v_contents['qty'];
            $oddata['product_image']=$v_contents['image'];
            $this->db->insert('tbl_order_details',$oddata);
        }
       $sql="update tbl_product as p,  tbl_order_details as od
              set p.product_quantity = p.product_quantity - od.product_sales_quantity
              where p.product_id=od.product_id and od.order_id='$order_id' ";
        $this->db->query($sql);
        
        
    }
}
