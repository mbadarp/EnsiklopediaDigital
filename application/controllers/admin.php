<?php
defined('BASEPATH') or exit('No direct script access allowed');
class admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        // if($this->admin_model->isNotLogin()) redirect('login');
    }

    public function index()
    {
        $data['title'] = 'Data Admin';
        $data['user'] = $this->admin_model->getAll()->result();
        $this->template->views('crud/data_admin', $data);
    }
    public function edit($id_admin)
    {
        $where = array('id_admin' => $id_admin);
        $data['title'] = 'Edit Admin';
        $data['user'] = $this->admin_model->edit_data($where, 'login_admin')->result();
        $this->template->views('crud/edit_admin', $data);
    }
    public function hapus($id_admin)
    {
        $where = array('id_admin' => $id_admin);
        $this->admin_model->hapus_data($where, 'login_admin');
        redirect('admin/index');
    }
    public function input()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $data = array(
            'nama' => $nama,
            'email' => $email,
            'password' => $password

        );

        $this->admin_model->input_data($data, 'admin');
        redirect('admin/index');
    }
    public function tambah()
    {
        $data['title'] = 'Tambah Admin';
        $this->template->views('crud/tambah_admin');
    }
}
