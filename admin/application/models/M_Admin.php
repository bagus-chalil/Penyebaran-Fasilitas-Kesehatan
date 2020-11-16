<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Admin extends CI_Model
{

    public function getDataMedis()
    {
        return $this->db->get('medis');
    }
    public function tambah_medis($data)
    {
        return $this->db->insert('medis', $data);
    }
    public function delete_medis($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('medis');
    }
    public function getDataEditMedis($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('medis');
    }
    public function ubah_medis($data)
    {
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('medis', $data);
    }


    public function getDataFasilitas()
    {
        return $this->db->get('fasilitas_kesehatan');
    }
    public function getDataPuskesmas()
    {
        $this->db->select('nama,fasilitas');
        $this->db->from('fasilitas_kesehatan');
        $this->db->where('fasilitas', 'Puskesmas');
        return $this->db->get();
    }
    public function getDataRSU()
    {
        $this->db->select('nama,fasilitas');
        $this->db->from('fasilitas_kesehatan');
        $this->db->where('fasilitas', 'rumah sakit umum');
        return $this->db->get();
    }
    public function getDataRSK()
    {
        $this->db->select('nama,fasilitas');
        $this->db->from('fasilitas_kesehatan');
        $this->db->where('fasilitas', 'rumah sakit khusus');
        return $this->db->get();
    }
    public function tambah_fasilitas($data)
    {
        return $this->db->insert('fasilitas_kesehatan', $data);
    }
    public function delete_fasilitas($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('fasilitas_kesehatan');
    }
    public function getDataEditFasilitas($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('fasilitas_kesehatan');
    }
    public function ubah_fasilitas($data)
    {
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('fasilitas_kesehatan', $data);
    }
}
