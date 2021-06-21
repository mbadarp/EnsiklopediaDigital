<?php
defined('BASEPATH') or exit('No direct script access allowed');
class admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        chek_session();
        $this->load->model('admin_model');
        // if($this->admin_model->isNotLogin()) redirect('login');
    }

    public function index()
    {
        $data['user'] = $this->admin_model->getAll()->result();
        $this->template->views('crud/data_admin', $data);
    }
    public function edit($id_admin)
    {
        $where = array('id_admin' => $id_admin);

        $data['user'] = $this->admin_model->edit_data($where, 'tb_admin')->result();
        $this->template->views('crud/edit_admin', $data);
    }
    public function hapus($id_admin)
    {
        $where = array('id_admin' => $id_admin);
        $this->admin_model->hapus_data($where, 'tb_admin');
        redirect('admin/index');
    }
    public function input()
    {
        $nama_admin = $this->input->post('nama_admin');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = array(
            'nama_admin' => $nama_admin,
            'username' => $username,
            'password' => md5($password)

        );

        $this->admin_model->input_data($data, 'tb_admin');
        redirect('admin/index');
    }

    public function update()
    {
        $id_admin = $this->input->post('id_admin');
        $nama_admin = $this->input->post('nama_admin');
        $username = $this->input->post('username');

        $data = array(
            'nama_admin' => $nama_admin,
            'username' => $username

        );

        $where = array(
            'id_admin' => $id_admin
        );

        $this->admin_model->update_data($where, $data, 'tb_admin');
        redirect('admin/index');
    }

    public function tambah()
    {

        $this->template->views('crud/tambah_admin');
    }
}
