<?php
class auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }

    function login()
    {
        if (isset($_POST['submit'])) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $hasil    = $this->admin_model->login($username, $password);
            if ($hasil == TRUE) {
                $this->db->where('username', $username);
                $this->db->update('tb_admin', array('last_login' => date('Y-m-d')));
                $this->session->set_userdata(array(
                    'id_admin' => $hasil->row()->id_admin,
                    'status_login' => 'oke',
                    'username' => $hasil->row()->username,

                ));
                redirect('Provinsi');
            } else {
                $this->session->set_flashdata('message_name', 'Username atau Password salah!!');
                redirect('auth/login');
            }
        } else {
            $this->load->view('form_login');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
