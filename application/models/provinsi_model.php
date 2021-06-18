<?php
class Provinsi_model extends CI_Model
{
    //Lambang Provinsi

    function nomorOtomatis()
    {
        $this->db->select('RIGHT(tb_provinsi.id_prov,2) as id ', FALSE);
        $this->db->order_by('id_prov', 'DESC');
        $this->db->limit(1);
        $query =  $this->db->get('tb_provinsi');

        if ($query->num_rows() <> 0) {
            $data =  $query->row();
            $id = intval($data->id) + 1;
        } else {
            $id = 1;
        }
        $id_max = str_pad($id, 3, "0", STR_PAD_LEFT);
        $id_jadi = "PR" . $id_max;
        return $id_jadi;
    }

    function getProvinsiByID()
    {
        $this->db->select('*');
        $this->db->from('tb_provinsi');
        $query = $this->db->get();
        return $query;
    }
    function getAbout()
    {
        $this->db->select('*');
        $this->db->from('tb_about');
        $query = $this->db->get();
        return $query;
    }

    function getWilayahByID()
    {
        $this->db->select('tb_provinsi.nama_prov, tb_wilayah.id_wil, tb_wilayah.gunung, tb_wilayah.danau, tb_wilayah.pantai');
        $this->db->from('tb_wilayah');
        $this->db->join('tb_provinsi', 'tb_wilayah.id_prov=tb_provinsi.id_prov');

        $query = $this->db->get();
        return $query;
    }

    function getGeografis()
    {
        $this->db->select('tb_provinsi.nama_prov, tb_geografis.id_geo ,tb_geografis.geografis');
        $this->db->from('tb_geografis');
        $this->db->join('tb_provinsi', 'tb_geografis.id_prov=tb_provinsi.id_prov');
        $query = $this->db->get();
        return $query;
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
}
