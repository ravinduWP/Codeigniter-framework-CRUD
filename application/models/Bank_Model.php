<?php 
    class Bank_Model extends CI_model{

        function saverecords($bname,$branch,$accno){
            $query="INSERT INTO bank_detail VALUES('','$bname','$branch','$accno')";
            $this->db->query($query);
        }

        function displayrecords(){
            $query=$this->db->query("SELECT * FROM bank_detail");
            return $query->result();    
        }
        function displayrecordsById($id){

            $query=$this->db->query("SELECT * FROM bank_detail WHERE id='".$id."'");
            return $query->result();
        }

        function deleterecords($id){
            $this->db->query("DELETE FROM bank_detail WHERE id='".$id."'");
        }
        function updaterecords($bname,$branch,$accno,$id){
            $query=$this->db->query("UPDATE bank_detail SET b_name='$bname',branch='$branch',account_no='$accno' WHERE id='".$id."'");
        }
    }
?>