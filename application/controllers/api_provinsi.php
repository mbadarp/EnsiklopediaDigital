<?php
defined('BASEPATH') or exit('No direct script access allowed');

class api_provinsi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //load model
        $this->load->model('api_model');
        //load library form validasi
        $this->load->library('form_validation');
    }

    //get all data
    public function index()
    {
        $prov = $this->api_model->get_all();

        $response = array();

        foreach ($prov->result() as $hasil) {

            $response[] = array(
                'id_prov' => $hasil->id_prov,
                'nama_prov'     => $hasil->nama_prov,
                'pulau'     => $hasil->pulau,
                'ibu_kota'     => $hasil->ibu_kota,
                'tgl_diresmikan'     => $hasil->tgl_diresmikan,
                'populasi_laki'     => $hasil->populasi_laki,
                'populasi_perempuan'     => $hasil->populasi_perempuan,
                'total_populasi'     => $hasil->total_populasi,
                'luas_wilayah'     => $hasil->luas_wilayah,
                'arti_lambang'     => $hasil->arti_lambang,
                'lambang'     => $hasil->lambang,
                'id_geo'     => $hasil->id_geo,
                'geografis'     => $hasil->geografis,
                'gambar_peta'     => $hasil->gambar_peta
            );
        }

        header('Content-Type: application/json');
        echo json_encode(
            array(
                'success' => true,
                'message' => 'Get All Data Provinsi',
                'data'    => $response
            )
        );
    }

    //get data pulau sumatra
    public function index_sumatra()
    {
        $prov = $this->api_model->get_sumatra();

        $response = array();

        foreach ($prov->result() as $hasil) {

            $response[] = array(
                'id_prov' => $hasil->id_prov,
                'nama_prov'     => $hasil->nama_prov,
                'pulau'     => $hasil->pulau,
                'ibu_kota'     => $hasil->ibu_kota,
                'tgl_diresmikan'     => $hasil->tgl_diresmikan,
                'populasi_laki'     => $hasil->populasi_laki,
                'populasi_perempuan'     => $hasil->populasi_perempuan,
                'total_populasi'     => $hasil->total_populasi,
                'luas_wilayah'     => $hasil->luas_wilayah,
                'arti_lambang'     => $hasil->arti_lambang,
                'lambang'     => $hasil->lambang,
                'id_geo'     => $hasil->id_geo,
                'geografis'     => $hasil->geografis,
                'gambar_peta'     => $hasil->gambar_peta
            );
        }

        header('Content-Type: application/json');
        echo json_encode(
            array(
                'success' => true,
                'message' => 'Get All Data Provinsi',
                'data'    => $response
            )
        );
    }

    //get data pulau jawa
    public function index_jawa()
    {
        $prov = $this->api_model->get_jawa();

        $response = array();

        foreach ($prov->result() as $hasil) {

            $response[] = array(
                'id_prov' => $hasil->id_prov,
                'nama_prov'     => $hasil->nama_prov,
                'pulau'     => $hasil->pulau,
                'ibu_kota'     => $hasil->ibu_kota,
                'tgl_diresmikan'     => $hasil->tgl_diresmikan,
                'populasi_laki'     => $hasil->populasi_laki,
                'populasi_perempuan'     => $hasil->populasi_perempuan,
                'total_populasi'     => $hasil->total_populasi,
                'luas_wilayah'     => $hasil->luas_wilayah,
                'arti_lambang'     => $hasil->arti_lambang,
                'lambang'     => $hasil->lambang,
                'id_geo'     => $hasil->id_geo,
                'geografis'     => $hasil->geografis,
                'gambar_peta'     => $hasil->gambar_peta
            );
        }

        header('Content-Type: application/json');
        echo json_encode(
            array(
                'success' => true,
                'message' => 'Get All Data Provinsi',
                'data'    => $response
            )
        );
    }

    //get data pulau kalimantan
    public function index_kalimantan()
    {
        $prov = $this->api_model->get_kalimantan();

        $response = array();

        foreach ($prov->result() as $hasil) {

            $response[] = array(
                'id_prov' => $hasil->id_prov,
                'nama_prov'     => $hasil->nama_prov,
                'pulau'     => $hasil->pulau,
                'ibu_kota'     => $hasil->ibu_kota,
                'tgl_diresmikan'     => $hasil->tgl_diresmikan,
                'populasi_laki'     => $hasil->populasi_laki,
                'populasi_perempuan'     => $hasil->populasi_perempuan,
                'total_populasi'     => $hasil->total_populasi,
                'luas_wilayah'     => $hasil->luas_wilayah,
                'arti_lambang'     => $hasil->arti_lambang,
                'lambang'     => $hasil->lambang,
                'id_geo'     => $hasil->id_geo,
                'geografis'     => $hasil->geografis,
                'gambar_peta'     => $hasil->gambar_peta
            );
        }

        header('Content-Type: application/json');
        echo json_encode(
            array(
                'success' => true,
                'message' => 'Get All Data Provinsi',
                'data'    => $response
            )
        );
    }

    //get data pulau sulawesi
    public function index_sulawesi()
    {
        $prov = $this->api_model->get_sulawesi();

        $response = array();

        foreach ($prov->result() as $hasil) {

            $response[] = array(
                'id_prov' => $hasil->id_prov,
                'nama_prov'     => $hasil->nama_prov,
                'pulau'     => $hasil->pulau,
                'ibu_kota'     => $hasil->ibu_kota,
                'tgl_diresmikan'     => $hasil->tgl_diresmikan,
                'populasi_laki'     => $hasil->populasi_laki,
                'populasi_perempuan'     => $hasil->populasi_perempuan,
                'total_populasi'     => $hasil->total_populasi,
                'luas_wilayah'     => $hasil->luas_wilayah,
                'arti_lambang'     => $hasil->arti_lambang,
                'lambang'     => $hasil->lambang,
                'id_geo'     => $hasil->id_geo,
                'geografis'     => $hasil->geografis,
                'gambar_peta'     => $hasil->gambar_peta
            );
        }

        header('Content-Type: application/json');
        echo json_encode(
            array(
                'success' => true,
                'message' => 'Get All Data Provinsi',
                'data'    => $response
            )
        );
    }

    //get data pulau papua
    public function index_papua()
    {
        $prov = $this->api_model->get_papua();

        $response = array();

        foreach ($prov->result() as $hasil) {

            $response[] = array(
                'id_prov' => $hasil->id_prov,
                'nama_prov'     => $hasil->nama_prov,
                'pulau'     => $hasil->pulau,
                'ibu_kota'     => $hasil->ibu_kota,
                'tgl_diresmikan'     => $hasil->tgl_diresmikan,
                'populasi_laki'     => $hasil->populasi_laki,
                'populasi_perempuan'     => $hasil->populasi_perempuan,
                'total_populasi'     => $hasil->total_populasi,
                'luas_wilayah'     => $hasil->luas_wilayah,
                'arti_lambang'     => $hasil->arti_lambang,
                'lambang'     => $hasil->lambang,
                'id_geo'     => $hasil->id_geo,
                'geografis'     => $hasil->geografis,
                'gambar_peta'     => $hasil->gambar_peta
            );
        }

        header('Content-Type: application/json');
        echo json_encode(
            array(
                'success' => true,
                'message' => 'Get All Data Provinsi',
                'data'    => $response
            )
        );
    }

    //get data pulau nusatenggara
    public function index_nusatenggara()
    {
        $prov = $this->api_model->get_nusatenggara();

        $response = array();

        foreach ($prov->result() as $hasil) {

            $response[] = array(
                'id_prov' => $hasil->id_prov,
                'nama_prov'     => $hasil->nama_prov,
                'pulau'     => $hasil->pulau,
                'ibu_kota'     => $hasil->ibu_kota,
                'tgl_diresmikan'     => $hasil->tgl_diresmikan,
                'populasi_laki'     => $hasil->populasi_laki,
                'populasi_perempuan'     => $hasil->populasi_perempuan,
                'total_populasi'     => $hasil->total_populasi,
                'luas_wilayah'     => $hasil->luas_wilayah,
                'arti_lambang'     => $hasil->arti_lambang,
                'lambang'     => $hasil->lambang,
                'id_geo'     => $hasil->id_geo,
                'geografis'     => $hasil->geografis,
                'gambar_peta'     => $hasil->gambar_peta
            );
        }

        header('Content-Type: application/json');
        echo json_encode(
            array(
                'success' => true,
                'message' => 'Get All Data Provinsi',
                'data'    => $response
            )
        );
    }

    //get data pulau maluku
    public function index_maluku()
    {
        $prov = $this->api_model->get_maluku();

        $response = array();

        foreach ($prov->result() as $hasil) {

            $response[] = array(
                'id_prov' => $hasil->id_prov,
                'nama_prov'     => $hasil->nama_prov,
                'pulau'     => $hasil->pulau,
                'ibu_kota'     => $hasil->ibu_kota,
                'tgl_diresmikan'     => $hasil->tgl_diresmikan,
                'populasi_laki'     => $hasil->populasi_laki,
                'populasi_perempuan'     => $hasil->populasi_perempuan,
                'total_populasi'     => $hasil->total_populasi,
                'luas_wilayah'     => $hasil->luas_wilayah,
                'arti_lambang'     => $hasil->arti_lambang,
                'lambang'     => $hasil->lambang,
                'id_geo'     => $hasil->id_geo,
                'geografis'     => $hasil->geografis,
                'gambar_peta'     => $hasil->gambar_peta
            );
        }

        header('Content-Type: application/json');
        echo json_encode(
            array(
                'success' => true,
                'message' => 'Get All Data Provinsi',
                'data'    => $response
            )
        );
    }

    //get tentang aplikasi
    public function index_about()
    {
        $about = $this->api_model->get_about();

        $response = array();

        foreach ($about->result() as $hasil) {

            $response[] = array(
                'id_about' => $hasil->id_about,
                'about'     => $hasil->about

            );
        }

        header('Content-Type: application/json');
        echo json_encode(
            array(
                'success' => true,
                'message' => 'Get All Data Tentang Aplikasi',
                'data'    => $response
            )
        );
    }
}
