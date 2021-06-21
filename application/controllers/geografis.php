<?php
defined('BASEPATH') or exit('No direct script access allowed');
class geografis extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        chek_session();
        $this->load->model('provinsi_model');
        // if($this->admin_model->isNotLogin()) redirect('login');
    }

    public function index()
    {
        $data['title'] = 'Data Geografis';
        $data['geografis'] = $this->provinsi_model->getGeografis()->result();
        $this->template->views('crud/data_geografis', $data);
    }
    public function edit($id_geo)
    {
        $where = array('id_geo' => $id_geo);
        $data['title'] = 'Edit Geografis';
        $data['prov'] = $this->provinsi_model->getProvinsiByID()->result();
        $data['geo'] = $this->provinsi_model->edit_data($where, 'tb_geografis')->result();
        $this->template->views('crud/edit_geografis', $data);
    }
    public function hapus($id_geo)
    {
        $where = array('id_geo' => $id_geo);
        $this->provinsi_model->hapus_data($where, 'tb_geografis');
        redirect('geografis/index');
    }
    public function input()
    {
        $data = [
            'id_prov' => $this->input->post('id_prov'),
            'geografis' => $this->input->post('geografis'),

        ];
        $this->db->insert('tb_geografis', $data);
        redirect('geografis/index');
    }

    public function update()
    {
        $id_geo = $this->input->post('id_geo');
        $id_prov = $this->input->post('id_prov');
        $geografis = $this->input->post('geografis');

        $data = array(
            'id_prov' => $id_prov,
            'geografis' => $geografis

        );

        $where = array(
            'id_geo' => $id_geo
        );

        $this->provinsi_model->update_data($where, $data, 'tb_geografis');
        redirect('geografis/index');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Geografis';
        $data['prov'] = $this->provinsi_model->getProvinsiByID()->result();
        $this->template->views('crud/tambah_geografis', $data);
    }
}
