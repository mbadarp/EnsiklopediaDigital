<?php
class admin_model extends CI_Model
{

    function getAll()
    {
        $this->db->select('*');
        $this->db->from('tb_admin');
        $query = $this->db->get();
        return $query;
    }
    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    //LOGIN
    function login($username, $password)
    {
        $chek = $this->db->get_where('tb_admin', array('username' => $username, 'password' => md5($password)));
        if ($chek->num_rows() > 0) {
            return $chek;
        } else {
            return false;
        }
    }


    function isNotLogin()
    {
        return $this->session->userdata('session_admin') === null;
    }
}
