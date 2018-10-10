<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            $data=array();
            $data['published_category']=$this->super_admin_model->select_all_published_category();
            $data['published_product']=$this->super_admin_model->select_all_published_product();
            $data['maincontent']=$this->load->view('home_content',$data,true);
            $this->load->view('master',$data);
	}
        public function product_details($product_id) {
        $data = array();
        //$data['title'] = 'product Details';
        //$data['slider'] = true;
        //$data['search'] = true;
         $data['published_category']=$this->super_admin_model->select_all_published_category();
        $data['product_info'] = $this->welcome_model->select_product_by_id($product_id);
       // $hit_count=$data['blog_info']->hit_count + 1;
       // $this->welcome_model->update_hit_count($hit_count,$blog_id);
        $data['maincontent'] = $this->load->view('product_details', $data, true);
        //$data['all_published_category'] = $this->welcome_model->select_published_category();
         //$data['recent_blog'] = $this->welcome_model->select_recent_blog();
        $this->load->view('master', $data);
    }
    public function product_by_category($category_id)
    {
      $data = array();
        $data['title'] = 'Category Product ';
        //$data['slider'] = true;
        //$data['search'] = true;
        $data['published_category']=$this->super_admin_model->select_all_published_category();
        $data['published_product_by_category'] = $this->welcome_model->select_published_product_by_category_id($category_id);
        $data['maincontent'] = $this->load->view('category_product', $data, true);
         //$data['recent_blog'] = $this->welcome_model->select_recent_blog();
        //$data['all_published_category'] = $this->welcome_model->select_published_category();

        $this->load->view('master', $data);  
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */