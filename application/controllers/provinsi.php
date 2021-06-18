<?php
defined('BASEPATH') or exit('No direct script access allowed');
class provinsi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('provinsi_model');
        // if($this->admin_model->isNotLogin()) redirect('login');
    }

    public function index()
    {
        $data['prov'] = $this->provinsi_model->getProvinsiByID()->result();
        $this->template->views('crud/data_provinsi', $data);
    }
    public function edit($id_prov)
    {
        //$where = array('id_prov' => $id_prov);
        $data['prov'] = $this->db->get_where('tb_provinsi', ['id_prov' => $id_prov])->result();
        //$data['provinsi'] = $this->provinsi_model->edit_data($where, 'tb_provinsi')->result();
        $this->template->views('crud/edit_prov', $data);
    }
    public function hapus($id_prov)
    {
        $where = array('id_prov' => $id_prov);
        $this->provinsi_model->hapus_data($where, 'tb_provinsi');
        redirect('provinsi/index');
        // $id_prov = $this->db->get_where('tb_provinsi', ['id_prov' => $id_prov])->row();
        // $query = $this->db->delete('tb_provinsi', ['id_prov' => $id_prov]);
        // if ($query) {
        //     unlink("./asset/img/lambang/" . $id_prov->lambang);
        // }
        // redirect('provinsi/index');
    }

    public function tambah()
    {
        $data['id'] = $this->provinsi_model->nomorOtomatis();
        $this->template->views('crud/tambah_prov', $data);
    }

    public function input_prov()
    {
        //konfigurasi
        $config = [
            'upload_path' => './asset/img/lambang/',
            'allowed_types' => 'gif|jpg|png',
            'filename' => uniqid(),
            'overwrite' => true,
            'max_size' => 1024,
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) //jika gagal upload
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('crud/tambah_prov', $error);
        } else
        //jika sukses upload
        {
            $_data = array('upload_data' => $this->upload->data());
            $data = array(
                'id_prov' => $this->input->post('id_prov'),
                'nama_prov' => $this->input->post('nama_prov'),
                'pulau' => $this->input->post('pulau'),
                'ibu_kota' => $this->input->post('ibu_kota'),
                'tgl_diresmikan' => $this->input->post('tgl_diresmikan'),
                'populasi_laki' => $this->input->post('populasi_laki'),
                'populasi_perempuan' => $this->input->post('populasi_perempuan'),
                'total_populasi' => $this->input->post('total_populasi'),
                'luas_wilayah' => $this->input->post('luas_wilayah'),
                'lambang' => $_data['upload_data']['file_name']
            );
            $query = $this->db->insert('tb_provinsi', $data);
            if ($query) {
                echo 'berhasil di upload';
                redirect('provinsi/index');
            } else {
                echo 'gagal upload';
            }
        }
    }

    public function update_provinsi()
    {
        $id_prov = $this->input->post('id_prov');
        $_image = $this->db->get_where('tb_provinsi', ['id_prov' => $id_prov])->row();
        $config = [
            'upload_path' => './asset/img/lambang/',
            'allowed_types' => 'gif|jpg|png',
            'filename' => uniqid(),
            'overwrite' => true,
            'max_size' => 1024,
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('crud/edit_prov', $error);
            // echo 'gagal update';
        } else {
            $_data = array('upload_data' => $this->upload->data());
            $data = array(
                'nama_prov' => $this->input->post('nama_prov'),
                'pulau' => $this->input->post('pulau'),
                'ibu_kota' => $this->input->post('ibu_kota'),
                'tgl_diresmikan' => $this->input->post('tgl_diresmikan'),
                'populasi_laki' => $this->input->post('populasi_laki'),
                'populasi_perempuan' => $this->input->post('populasi_perempuan'),
                'total_populasi' => $this->input->post('total_populasi'),
                'luas_wilayah' => $this->input->post('luas_wilayah'),
                'lambang' => $_data['upload_data']['file_name']
            );
            $query = $this->db->update('tb_provinsi', $data, array('id_prov' => $id_prov));;
            if ($query) {
                unlink("asset/img/lambang/" . $_image->foto);
            }
            redirect('provinsi/index');
        }
    }


    public function tentang_aplikasi()
    {
        $data['title'] = 'Data Geografis';
        $data['about'] = $this->provinsi_model->getAbout()->result();
        $this->template->views('crud/data_tentangAplikasi', $data);
    }
    public function tambah_about()
    {
        $data['title'] = 'Tambah Data';
        $this->template->views('crud/tambah_tentangAplikasi', $data);
    }

    public function input_about()
    {
        $data = [

            'about' => $this->input->post('about'),

        ];
        $this->db->insert('tb_about', $data);
        redirect('provinsi/tentang_aplikasi');
    }
    public function edit_about($id_about)
    {
        //$where = array('id_prov' => $id_prov);
        $data['about'] = $this->db->get_where('tb_about', ['id_about' => $id_about])->result();
        //$data['provinsi'] = $this->provinsi_model->edit_data($where, 'tb_provinsi')->result();
        $this->template->views('crud/edit_tentangAplikasi', $data);
    }
}
