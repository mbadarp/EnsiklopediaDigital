<?php
class admin_model extends CI_Model{
    
    function getAll(){
        $this->db->select('*');
        $this->db->from('admin');
        $query = $this->db->get();
        return $query;
    }
    function input_data($data,$table){
        $this->db->insert($table,$data);
        
    }
    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }
    function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function cek_login($table,$where){
       return $this->db->get_where($table,$where);
    }

    //LOGIN
    function login($user,$pass,$table){
        $this->db->select('*');
        $this->db->from('login_admin');
        $this->db->where('user_admin',$user);
        $this->db->where('password',$pass);
        $query = $this->db->get();
        return $query;
    }
    function isNotLogin(){
        return $this->session->userdata('session_admin') === null;
    }
   
}
?>