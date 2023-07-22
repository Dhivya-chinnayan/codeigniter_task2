 <?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');

 class college extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('college_model');
    }

    public function index() 
    {
        $data['college'] = $this->college_model->getAllColleges();
        $data['title'] = "College List";
        $this->load->view('college/index',$data);
    }


 }
 
 ?>
