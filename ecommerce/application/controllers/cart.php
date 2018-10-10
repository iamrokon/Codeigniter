<?php
class Cart extends CI_Controller {
    //put your code here
    public function add_to_cart($product_id)
    {
        $qty=$this->input->post('qty',true);
        $product_info=$this->welcome_model->select_product_by_id($product_id);
        $data = array(
               'id'      =>$product_info->product_id,
               'qty'     => $qty,
               'price'   => $product_info->product_price,
               'name'    => $product_info->product_name,
               'image' => $product_info->product_image
            );

            $this->cart->insert($data); 
            redirect('cart/show_cart');
    }
    
    public function show_cart()
    {
        $data=array();
        $data['published_category']=$this->super_admin_model->select_all_published_category();
        //$data['published_product']=$this->super_admin_model->select_all_published_product();
        $data['maincontent']=$this->load->view('cart_view',$data,true);
        $this->load->view('master',$data);
    }
    public function update_cart($rowid)
    {
//        echo $rowid;
//        exit();
        $data = array(
               'rowid' => $rowid,
               'qty'   => $this->input->post('qty',true)
            );

$this->cart->update($data); 
redirect('cart/show_cart');
    }
    public function delete_from_cart($rowid)
    {
        $data = array(
               'rowid' => $rowid,
               'qty'   => 0
            );

$this->cart->update($data); 
redirect('cart/show_cart');
    }
}
