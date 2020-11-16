<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model("M_Admin");
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['medis'] = $this->M_Admin->getDataMedis()->result();
        $data['medis1'] = $this->M_Admin->getDataPuskesmas()->result();
        $data['medis2'] = $this->M_Admin->getDataRSU()->result();
        $data['medis3'] = $this->M_Admin->getDataRSK()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_medis()
    {
        $data['title'] = 'Tenaga Medis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['medis'] = $this->M_Admin->getDataMedis()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/medis', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_medis_ok()
    {
        $data = array(
            'kecamatan' => $this->input->post('kecamatan'),
            'dokter' => $this->input->post('dokter'),
            'perawat' => $this->input->post('perawat'),
            'bidan' => $this->input->post('bidan'),
            'farmasi' => $this->input->post('farmasi'),
            'lainnya' => $this->input->post('lainnya'),
            'total' => $this->input->post('total'),
        );

        $this->M_Admin->tambah_medis($data);
        redirect('admin/tambah_medis');
    }
    public function hapus_medis($id)
    {
        $delete = $this->M_Admin->delete_medis($id);
        redirect(base_url('admin/tambah_medis'));
    }
    public function edit_medis($id)
    {
        $data['title'] = 'Edit Data Tenaga Medis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data_medis'] = $this->M_Admin->getDataEditMedis($id)->row();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit_datamedis', $data);
        $this->load->view('templates/footer');
    }
    public function ubah_medis()
    {
        $data = array(
            'kecamatan' => $this->input->post('kecamatan'),
            'dokter' => $this->input->post('dokter'),
            'perawat' => $this->input->post('perawat'),
            'bidan' => $this->input->post('bidan'),
            'farmasi' => $this->input->post('farmasi'),
            'lainnya' => $this->input->post('lainnya'),
            'total' => $this->input->post('total'),
        );

        $this->M_Admin->ubah_medis($data);
        redirect(base_url('admin/tambah_medis'));
    }


    public function tambah_fasilitas()
    {
        $data['title'] = 'Fasilitas Kesehatan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['fasilitas'] = $this->M_Admin->getDataFasilitas()->result();
        $data['medis'] = $this->M_Admin->getDataMedis()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/fasilitas', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_fasilitas_ok()
    {
        $data = array(
            'lng' => $this->input->post('lng'),
            'lat' => $this->input->post('lat'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'kecamatan' => $this->input->post('kecamatan'),
            'fasilitas' => $this->input->post('fasilitas'),
            'jenis' => $this->input->post('jenis'),
        );

        $this->M_Admin->tambah_fasilitas($data);
        redirect('admin/tambah_fasilitas');
    }
    public function hapus_fasilitas($id)
    {
        $delete = $this->M_Admin->delete_fasilitas($id);
        redirect(base_url('admin/tambah_fasilitas'));
    }
    public function edit_fasilitas($id)
    {
        $data['title'] = 'Edit Data Fasilitas Kesehatan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data_fasilitas'] = $this->M_Admin->getDataEditFasilitas($id)->row();
        $data['medis'] = $this->M_Admin->getDataMedis()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit_datafasilitas', $data);
        $this->load->view('templates/footer');
    }
    public function ubah_fasilitas()
    {
        $data = array(
            'lng' => $this->input->post('lng'),
            'lat' => $this->input->post('lat'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'kecamatan' => $this->input->post('kecamatan'),
            'fasilitas' => $this->input->post('fasilitas'),
            'jenis' => $this->input->post('jenis'),
        );

        $this->M_Admin->ubah_fasilitas($data);
        redirect(base_url('admin/tambah_fasilitas'));
    }
}
