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

        public function create() {
            $data['title'] = "Create college";
            $this->load->view('college/create',$data);
        }

        public function storeCollege() {
            $data['name'] = $this->input->post('name');
            $data['date'] = $this->input->post('date');
            $data['address'] = $this->input->post('address');
            $data['department'] = $this->input->post('department');
            $data['phonenumber'] = $this->input->post('phonenumber');
            $data['gender'] = $this->input->post('gender');
            $data['bgroup'] = $this->input->post('bgroup');
             
            $this->college_model->storecollege($data);
            redirect('college');
        }

        public function edit($id) {
            $data['college'] = $this->college_model->getColleges($id);
            $data['title']="Edit college";
            $this->load->view('college/edit',$data);
        }

        public function updateCollege($id) {
            $data['name'] = $this->input->post('name');
            $data['date'] = $this->input->post('date');
            $data['address'] = $this->input->post('address');
            $data['department'] = $this->input->post('department');
            $data['phonenumber'] = $this->input->post('phonenumber');
            $data['gender'] = $this->input->post('gender');
            $data['bgroup'] = $this->input->post('bgroup');
             
            $this->college_model->updatecollege($id,$data);
            redirect('college');
        }

        public function delete($id)
        {
            $this->college_model->deleteCollege($id);
            redirect('college');
        }


        }



 


 
 ?>
