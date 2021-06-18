<?php
defined('BASEPATH') or exit('No direct script access allowed');

class api_model extends CI_Model
{

    public function get_all()
    {
        $this->db->select('*');
        $this->db->from('tb_provinsi');
        $this->db->join('tb_geografis', 'tb_geografis.id_prov = tb_provinsi.id_prov');
        $this->db->join('tb_petaprovinsi', 'tb_petaprovinsi.id_prov = tb_provinsi.id_prov');
        $this->db->order_by('tb_provinsi.nama_prov', 'ASC');
        return $this->db->get();
    }

    public function get_sumatra()
    {
        $this->db->select('*');
        $this->db->from('tb_provinsi');
        $this->db->join('tb_geografis', 'tb_geografis.id_prov = tb_provinsi.id_prov');
        $this->db->join('tb_petaprovinsi', 'tb_petaprovinsi.id_prov = tb_provinsi.id_prov');
        $this->db->where('tb_provinsi.pulau', 'Sumatra');
        $this->db->order_by('tb_provinsi.nama_prov', 'ASC');
        return $this->db->get();
    }

    public function get_jawa()
    {
        $this->db->select('*');
        $this->db->from('tb_provinsi');
        $this->db->join('tb_geografis', 'tb_geografis.id_prov = tb_provinsi.id_prov');
        $this->db->join('tb_petaprovinsi', 'tb_petaprovinsi.id_prov = tb_provinsi.id_prov');
        $this->db->where('tb_provinsi.pulau', 'Jawa');
        $this->db->order_by('tb_provinsi.nama_prov', 'ASC');
        return $this->db->get();
    }

    public function get_kalimantan()
    {
        $this->db->select('*');
        $this->db->from('tb_provinsi');
        $this->db->join('tb_geografis', 'tb_geografis.id_prov = tb_provinsi.id_prov');
        $this->db->join('tb_petaprovinsi', 'tb_petaprovinsi.id_prov = tb_provinsi.id_prov');
        $this->db->where('tb_provinsi.pulau', 'Kalimantan');
        $this->db->order_by('tb_provinsi.nama_prov', 'ASC');
        return $this->db->get();
    }

    public function get_sulawesi()
    {
        $this->db->select('*');
        $this->db->from('tb_provinsi');
        $this->db->join('tb_geografis', 'tb_geografis.id_prov = tb_provinsi.id_prov');
        $this->db->join('tb_petaprovinsi', 'tb_petaprovinsi.id_prov = tb_provinsi.id_prov');
        $this->db->where('tb_provinsi.pulau', 'Sulawesi');
        $this->db->order_by('tb_provinsi.nama_prov', 'ASC');
        return $this->db->get();
    }

    public function get_maluku()
    {
        $this->db->select('*');
        $this->db->from('tb_provinsi');
        $this->db->join('tb_geografis', 'tb_geografis.id_prov = tb_provinsi.id_prov');
        $this->db->join('tb_petaprovinsi', 'tb_petaprovinsi.id_prov = tb_provinsi.id_prov');
        $this->db->where('tb_provinsi.pulau', 'Kepulauan Maluku');
        $this->db->order_by('tb_provinsi.nama_prov', 'ASC');
        return $this->db->get();
    }

    public function get_nusatenggara()
    {
        $this->db->select('*');
        $this->db->from('tb_provinsi');
        $this->db->join('tb_geografis', 'tb_geografis.id_prov = tb_provinsi.id_prov');
        $this->db->join('tb_petaprovinsi', 'tb_petaprovinsi.id_prov = tb_provinsi.id_prov');
        $this->db->where('tb_provinsi.pulau', 'Kepulauan Nusa Tenggara');
        $this->db->order_by('tb_provinsi.nama_prov', 'ASC');
        return $this->db->get();
    }

    public function get_papua()
    {
        $this->db->select('*');
        $this->db->from('tb_provinsi');
        $this->db->join('tb_geografis', 'tb_geografis.id_prov = tb_provinsi.id_prov');
        $this->db->join('tb_petaprovinsi', 'tb_petaprovinsi.id_prov = tb_provinsi.id_prov');
        $this->db->where('tb_provinsi.pulau', 'Papua');
        $this->db->order_by('tb_provinsi.nama_prov', 'ASC');
        return $this->db->get();
    }

    public function get_about()
    {
        $this->db->select('*');
        $this->db->from('tb_about');
        return $this->db->get();
    }
}
