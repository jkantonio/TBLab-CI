<?php
class Main_Model extends CI_Model
{
    function can_login($userID, $password){
        $this->db->select('*');
        $this->db->where('EmployeeID',$userID);
        $this->db->where('Password',$password);
        
        $query = $this->db->get('users');

        if($query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    function check_priv($userID){
        $this->db->select('*');
        $this->db->where('EmployeeID',$userID);
        $query = $this->db->get('users');

        if($query->num_rows() > 0){
            return $query->row();
        }else{
        }
    }
}
?>