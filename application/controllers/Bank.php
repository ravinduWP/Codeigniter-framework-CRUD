<?php 
    class Bank extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->model('Bank_Model');

        }
        public function savebank(){

            $this->load->view('add_bank');
            if($this->input->post('save')){

                $n=$this->input->post('bname');
                $b=$this->input->post('branch');
                $acc=$this->input->post('accno');

                $this->Bank_Model->saverecords($n,$b,$acc);
                echo "<script>
                    alert ('Records saved successfully..!');
                    window.location.href = 'disbank';
                </script>";
            }
            

            
        }

        //display bank details
        public function disbank(){
            $result['data']=$this->Bank_Model->displayrecords();
            $this->load->view('Dashboard',$result);
        }
        
        public function deletebank(){
            $id=$this->input->get('id');
            $this->Bank_Model->deleterecords($id);
            header("location: disbank");

        }
        public function updatebank(){
            $id=$this->input->get('id');
            $result['data']=$this->Bank_Model->displayrecordsById($id);
            $this->load->view('update_records',$result);

            if($this->input->post('update')){
                $n = $this->input->post('bname');
                $b = $this->input->post('branch');
                $acc = $this->input->post('accno');

                $this->Bank_Model->updaterecords($n,$b,$acc,$id);
                header("location: disbank");
                
            }
        }
        
    }
?>