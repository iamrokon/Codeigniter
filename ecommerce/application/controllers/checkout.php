<?php
class Checkout extends CI_Controller {
    //put your code here
    
    public function index()
    {
        $data=array();
        $data['published_category']=$this->super_admin_model->select_all_published_category();
        //$data['published_product']=$this->super_admin_model->select_all_published_product();
        $data['maincontent']=$this->load->view('checkout',$data,true);
        $this->load->view('master',$data);
    }
    public function save_customer()
    {
        $data=array();
        $data['first_name']=$this->input->post('first_name');
        $data['last_name']=$this->input->post('last_name');
        $data['email_address']=$this->input->post('email_address');
        $data['password']=$this->input->post('password');
        $data['contact_number']=$this->input->post('contact_number');
        $data['address']=$this->input->post('address');
        $data['city']=$this->input->post('city');
        $data['country']=$this->input->post('country');
        $data['zip_code']=$this->input->post('zip_code');
        $customer_id=$this->checkout_model->save_customer_info($data);
        
        $sdata=array();
        $sdata['customer_id']=$customer_id;
        $sdata['name']=$data['first_name'].' '.$data['last_name'];
        $sdata['login_status']=true;
        $this->session->set_userdata($sdata);
        redirect('checkout/shipping_form');
        
    }
    public function shipping_form()
    {
         $data=array();
        $data['published_category']=$this->super_admin_model->select_all_published_category();
        //$data['published_product']=$this->super_admin_model->select_all_published_product();
        $data['maincontent']=$this->load->view('shipping_address',$data,true);
        $this->load->view('master',$data);
    }
    public function save_shipping()
    {
        $data=array();
        $data['name']=$this->input->post('name',true);
        $data['email_address']=$this->input->post('email_address',true);
        $data['contact_number']=$this->input->post('contact_number',true);
        $data['address']=$this->input->post('address',true);
        $data['city']=$this->input->post('city',true);
        $data['country']=$this->input->post('country',true);
        $data['zip_code']=$this->input->post('zip_code',true);
        $shipping_id=$this->checkout_model->save_shipping_info($data);
        $sdata=array();
        $sdata['shipping_id']=$shipping_id;
        $this->session->set_userdata($sdata);
        redirect('checkout/payment_form');
    }
    public function payment_form()
    {
        $data=array();
        $data['published_category']=$this->super_admin_model->select_all_published_category();
        //$data['published_product']=$this->super_admin_model->select_all_published_product();
        $data['maincontent']=$this->load->view('payment_form',$data,true);
        $this->load->view('master',$data);
    }
    public function login_customer()
    {
         $email_address = $this->input->post('email_address');
        $password = $this->input->post('password');

        $result = $this->checkout_model->check_customer_login_info($email_address, $password);
        $sdata = array();
        if ($result) {

            $sdata['first_name'] = $result->first_name;
            $sdata['last_name'] = $result->last_name;
            $sdata['email_address'] = $result->email_address;
            $sdata['customer_id'] = $result->customer_id;
            $this->session->set_userdata($sdata);
            redirect('checkout/shipping_form');
        } else {
            $sdata['message'] = 'User Id / Password Invalide';
            $this->session->set_userdata($sdata);
            redirect('checkout/checkout');
        }
        $data['published_category']=$this->super_admin_model->select_all_published_category();
        //$data['published_product']=$this->super_admin_model->select_all_published_product();
        $data['maincontent']=$this->load->view('checkout',$data,true);
        $this->load->view('master',$data);
    }
    public function logout()
        {
        $this->session->unset_userdata('customer_id');
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('email_address');
        redirect('checkout/checkout');  
        }
        public function confirm_order()
        {
            $payment_method=$this->input->post('payment_method');
            if($payment_method == 'cash_on_delivery')
            {
                $pdata=array();
                $pdata['payment_type']=$payment_method;
                $this->checkout_model->save_payment_info($pdata);
                $this->checkout_model->save_order_info();
                $data=array();
                $data['published_category']=$this->super_admin_model->select_all_published_category();
                //$data['published_product']=$this->super_admin_model->select_all_published_product();
                $data['maincontent']=$this->load->view('order_complete',$data,true);
                $this->load->view('master',$data);
                
            }
            if($payment_method == 'paypal')
            {
                $pdata=array();
                $pdata['payment_type']=$payment_method;
                $this->checkout_model->save_payment_info($pdata);
                $this->checkout_model->save_order_info();
                $this->load->view('htmlWebsiteStandardPayment');
            }
        }
    
}
