<?php
session_start();
class Super_Admin extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $admin_id=$this->session->userdata('admin_id');
        if($admin_id == NULL)
        {
            redirect('admin','refresh');
        }
       // $this->load->model('super_admin_model');
    }
    public function index()
    {
        $data=array();
        $data['admin_maincontent']=$this->load->view('admin/dashbord','',true);
        $this->load->view('admin/admin_master',$data);
    }
    public function add_category()
    {
        $data=array();
        $data['admin_maincontent']=$this->load->view('admin/add_category','',true);
        $this->load->view('admin/admin_master',$data);
    }
     public function save_category()
    {
        $data=array();
        $data['category_name']=$this->input->post('category_name',true);
        $data['category_description']=$this->input->post('category_description',true);
        $data['publication_status']=$this->input->post('publication_status',true);
        $this->super_admin_model->save_category_info($data);
        $sdata=array();
        $sdata['message']='Save Category Information Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_category');
    }
       public function manage_category()
    {
        $data=array();
        $data['all_category']=$this->super_admin_model->select_all_category();
        $data['admin_maincontent']=$this->load->view('admin/category_manager',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function unpublished_category($category_id)
    {
        $this->super_admin_model->unpublished_category_info($category_id);
        redirect('super_admin/manage_category');
    }
    public function published_category($category_id)
    {
        $this->super_admin_model->published_category_info($category_id);
        redirect('super_admin/manage_category');
    }
    public function delete_category($category_id)
    {
        $this->super_admin_model->delete_category_info_by_id($category_id);
        redirect('super_admin/manage_category');
    }
    public function edit_category($category_id)
    {
      $data=array();
      $data['category_info']=$this->super_admin_model->select_category_info_by_id($category_id);
      $data['admin_maincontent']=$this->load->view('admin/edit_category',$data,true);
      $this->load->view('admin/admin_master',$data);  
    }
     public function update_category()
    {
       $data=array();
        $category_id=$this->input->post('category_id',true);
        $data['category_name']=$this->input->post('category_name',true);
        $data['category_description']=$this->input->post('category_description',true);
        $data['publication_status']=$this->input->post('publication_status',true);
        $this->super_admin_model->update_category_info($data,$category_id);
        $sdata=array();
        $sdata['message']='Update Category Information Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_category/'.$category_id);  
    }
     
    //Manufacturer
     
     public function add_manufacturer()
    {
        $data=array();
        $data['admin_maincontent']=$this->load->view('admin/add_manufacturer','',true);
        $this->load->view('admin/admin_master',$data);
    }
    public function save_manufacturer()
    {
        $data=array();
        $data['manufacturer_name']=$this->input->post('manufacturer_name',true);
        $data['manufacturer_description']=$this->input->post('manufacturer_description',true);
        $data['publication_status']=$this->input->post('publication_status',true);
        $this->super_admin_model->save_manufacturer_info($data);
        $sdata=array();
        $sdata['message']='Save manufacturer Information Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_manufacturer');
    }
    public function manage_manufacturer()
    {
        $data=array();
        $data['all_manufacturer']=$this->super_admin_model->select_all_manufacturer();
        $data['admin_maincontent']=$this->load->view('admin/manage_manufacturer',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    
    public function unpublished_manufacturer($manufacturer_id)
    {
        $this->super_admin_model->unpublished_manufacturer_info($manufacturer_id);
        redirect('super_admin/manage_manufacturer');
    }
    public function published_manufacturer($manufacturer_id)
    {
        $this->super_admin_model->published_manufacturer_info($manufacturer_id);
        redirect('super_admin/manage_manufacturer');
    }
    public function delete_manufacturer($manufacturer_id)
    {
        $this->super_admin_model->delete_manufacturer_info_by_id($manufacturer_id);
        redirect('super_admin/manage_manufacturer');
    }
    public function edit_manufacturer($manufacturer_id)
    {
      $data=array();
      $data['manufacturer_info']=$this->super_admin_model->select_manufacturer_info_by_id($manufacturer_id);
      $data['admin_maincontent']=$this->load->view('admin/edit_manufacturer',$data,true);
      $this->load->view('admin/admin_master',$data);  
    }
     public function update_manufacturer()
    {
       $data=array();
        $manufacturer_id=$this->input->post('manufacturer_id',true);
        $data['manufacturer_name']=$this->input->post('manufacturer_name',true);
        $data['manufacturer_description']=$this->input->post('manufacturer_description',true);
        $data['publication_status']=$this->input->post('publication_status',true);
        $this->super_admin_model->update_manufacturer_info($data,$manufacturer_id);
        $sdata=array();
        $sdata['message']='Update manufacturer Information Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_manufacturer/'.$manufacturer_id);  
    }
     
    
    
    
    //product
    public function add_product()
    {
       
        $data=array();
       $data['all_published_category']=$this->super_admin_model->select_all_published_category();
        $data['all_published_manufacturer']=$this->super_admin_model->select_all_published_manufacturer();
        $data['admin_maincontent']=$this->load->view('admin/add_product',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function save_product()
    {
        
        $data=array();
        $data['product_name']=$this->input->post('product_name',true);
        $data['category_id']=$this->input->post('category_id',true);
        $data['manufacturer_id']=$this->input->post('manufacturer_id',true);
        $data['product_description']=$this->input->post('product_description',true);
        $data['product_price']=$this->input->post('product_price',true);
        $data['product_quantity']=$this->input->post('product_quantity',true);
        $featured_product=$this->input->post('featured_product',true);
        if($featured_product=='on')
        {
             $data['featured_product']=1;
        }
        $data['publication_status']=$this->input->post('publication_status',true);
        /*
         * Start File Upload
         */
        $config['upload_path'] = './image/product_image/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        
        
        if ( ! $this->upload->do_upload('product_images'))
        {
                $error = $this->upload->display_errors();
                $sdata=array();
                $sdata['message']=$error;
                $this->session->set_userdata($sdata);
                redirect('super_admin/add_product');  
             
        }
        else
        {
                $fdata = $this->upload->data();
                $data['product_image']=$config['upload_path'] .$fdata['file_name'];
                
        }
        
        
        
        /*
         * End File Upload
         */
        
        
        $this->super_admin_model->save_product_info($data);
        $sdata=array();
        $sdata['message']='Save product Information Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_product');  
    }
     public function manage_product()
    {
        $data=array();
        $data['all_product']=$this->super_admin_model->select_all_product();
        $data['admin_maincontent']=$this->load->view('admin/manage_product',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function unpublished_product($product_id)
    {
        $this->super_admin_model->unpublished_product_info($product_id);
        redirect('super_admin/manage_product');
    }
    public function published_product($product_id)
    {
        $this->super_admin_model->published_product_info($product_id);
        redirect('super_admin/manage_product');
    }
     public function delete_product($product_id)
    {
        $this->super_admin_model->delete_product_info_by_id($product_id);
        redirect('super_admin/manage_product');
    }
    public function edit_product($product_id)
    {
      
      $data=array();
       $data['all_published_category']=$this->super_admin_model->select_all_published_category();
        $data['all_published_manufacturer']=$this->super_admin_model->select_all_published_manufacturer();
      $data['product_info']=$this->super_admin_model->select_product_info_by_id($product_id);
      $data['admin_maincontent']=$this->load->view('admin/edit_product',$data,true);
      $this->load->view('admin/admin_master',$data);
    }
    public function update_product()
    {
       $data=array();
        $product_id=$this->input->post('product_id',true);
        $data['product_name']=$this->input->post('product_name',true);
        $data['product_description']=$this->input->post('product_description',true);
        $data['publication_status']=$this->input->post('publication_status',true);
        $this->super_admin_model->update_product_info($data,$product_id);
        $sdata=array();
        $sdata['message']='Update product Information Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_product/'.$product_id);   
    }

    



    public function logout()
    {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_full_name');
        $sdata=array();
        $sdata['message']='You are successfully logout !';
        $this->session->set_userdata($sdata);
        redirect('admin/index');
    }
    
    
}
