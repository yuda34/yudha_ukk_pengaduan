<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_yuda_Dashboard extends CI_Controller
{

    // Controller View Masyarakat
    // Dashboard Masyarakat
    public function index()
    {
        $masyarakat = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $pengaduan = $this->db->get_where('pengaduan', ['nik' => $masyarakat['nik']])->num_rows();
        $proses = $this->db->get_where('pengaduan', ['status' => 'proses', 'nik' => $masyarakat['nik']])->num_rows();
        $selesai = $this->db->get_where('pengaduan', ['status' => 'selesai', 'nik' => $masyarakat['nik']])->num_rows();

        $data = array(
            'pengaduan' => $pengaduan,
            'proses' => $proses,
            'selesai' => $selesai
        );

        $data['title'] = 'Dashboard';
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('template_masyarakat/header', $data);
        $this->load->view('template_masyarakat/sidebar', $data);
        $this->load->view('template_masyarakat/topbar', $data);
        $this->load->view('masyarakat/v_yuda_dashboard', $data);
        $this->load->view('template_masyarakat/footer', $data);
    }

    public function profile()
    {
        $data['title'] = 'Profile';
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('template_masyarakat/header', $data);
        $this->load->view('template_masyarakat/sidebar', $data);
        $this->load->view('template_masyarakat/topbar', $data);
        $this->load->view('masyarakat/v_yuda_profile', $data);
        $this->load->view('template_masyarakat/footer', $data);
    }

    public function pengaduan()
    {
        $data['title'] = 'Pangaduan';
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $this->load->view('template_masyarakat/header', $data);
        $this->load->view('template_masyarakat/sidebar', $data);
        $this->load->view('template_masyarakat/topbar', $data);
        $this->load->view('masyarakat/v_yuda_pengaduan', $data);
        $this->load->view('template_masyarakat/footer', $data);
    }

    public function riwayat()
    {
        $this->load->model('M_yuda_User');
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $masyarakat = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $data['riwayat'] = $this->M_yuda_User->getRiwayat($masyarakat['nik']);
        $data['title'] = 'Riwayat';
        $this->load->view('template_masyarakat/header', $data);
        $this->load->view('template_masyarakat/sidebar', $data);
        $this->load->view('template_masyarakat/topbar', $data);
        $this->load->view('masyarakat/v_yuda_riwayat', $data);
        $this->load->view('template_masyarakat/footer', $data);
    }

    public function proses_masyarakat($id)
    {
        $this->load->model('M_yuda_Admin');
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['p'] = $this->M_yuda_Admin->proses($id);
        $data['prosestanggapan'] = $this->M_yuda_Admin->MasyarakatprosesTanggapan($id);
        $data['title'] = 'Laporan Proses';
        $this->load->view('template_masyarakat/header', $data);
        $this->load->view('template_masyarakat/sidebar', $data);
        $this->load->view('template_masyarakat/topbar', $data);
        $this->load->view('masyarakat/v_yuda_prosesmasyarakat', $data);
        $this->load->view('template_masyarakat/footer', $data);
    }


    // Controller View Admin
    // Dashboard Admin
    public function admin()
    {
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $pengaduan = $this->db->get('pengaduan')->num_rows();
        $proses = $this->db->get_where('pengaduan', ['status' => 'proses'])->num_rows();
        $selesai = $this->db->get_where('pengaduan', ['status' => 'selesai'])->num_rows();

        $data = array(
            'pengaduan' => $pengaduan,
            'proses' => $proses,
            'selesai' => $selesai
        );

        $data['title'] = 'Dashboard';
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('template_admin/topbar', $data);
        $this->load->view('admin/v_yuda_dashboardadmin', $data);
        $this->load->view('template_admin/footer', $data);
    }

    public function petugas()
    {
        $this->load->model('M_yuda_Admin');
        $data['lihat_petugas'] = $this->M_yuda_Admin->getPetugas();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Data Petugas';
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('template_admin/topbar', $data);
        $this->load->view('admin/v_yuda_petugas', $data);
        $this->load->view('template_admin/footer', $data);
    }

    public function kategori()
    {
        $this->load->model('M_yuda_Admin');
        $data['kategori'] = $this->M_yuda_Admin->getKategori();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['subkategori'] = $this->M_yuda_Admin->joinSubKategori();
        $data['title'] = 'Data Kategori';
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('template_admin/topbar', $data);
        $this->load->view('admin/v_yuda_kategori', $data);
        $this->load->view('template_admin/footer', $data);
    }
    public function masyarakat()
    {
        $this->load->model('M_yuda_Admin');
        $data['masyarakat'] = $this->M_yuda_Admin->getMasyarakat();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['subkategori'] = $this->M_yuda_Admin->joinSubKategori();
        $data['title'] = 'Data Masyarakat';
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('template_admin/topbar', $data);
        $this->load->view('admin/v_yuda_masyarakat', $data);
        $this->load->view('template_admin/footer', $data);
    }

    public function riwayat_admin()
    {
        $this->load->model('M_yuda_Admin');
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $data['riwayatadmin'] = $this->M_yuda_Admin->getRiwayatAdmin();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Data Pengaduan';
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('template_admin/topbar', $data);
        $this->load->view('admin/v_yuda_riwayat', $data);
        $this->load->view('template_admin/footer', $data);
    }

    public function proses_admin($id)
    {
        $this->load->model('M_yuda_Admin');
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['p'] = $this->M_yuda_Admin->proses($id);
        $data['prosestanggapan'] = $this->M_yuda_Admin->prosesTanggapan($id);
        $data['title'] = 'Laporan Proses';
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('template_admin/topbar', $data);
        $this->load->view('admin/v_yuda_proses', $data);
        $this->load->view('template_admin/footer', $data);
    }
    public function selesai_admin($id)
    {
        $this->load->model('M_yuda_Admin');
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['p'] = $this->M_yuda_Admin->proses($id);
        $data['prosestanggapan'] = $this->M_yuda_Admin->prosesTanggapan($id);
        $data['title'] = 'Laporan Selesai';
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('template_admin/topbar', $data);
        $this->load->view('admin/v_yuda_selesai', $data);
        $this->load->view('template_admin/footer', $data);
    }

    public function generate_laporan()
    {

        // $data['laporan'] = $this->Pengaduan_m->laporan_pengaduan()->result_array();

        $this->load->library('Pdf');

        $this->pdf->setPaper('A4', 'potrait'); // opsional | default A4
        $this->pdf->filename = "laporan-pengaduan.pdf"; // opsional | default is laporan.pdf
        $this->pdf->load_view('admin/]laporanpdf', $data);
    }
    // public function laporan_pdf()
    // {

    //     $data = array(
    //         "dataku" => array(
    //             "nama" => "Petani Kode",
    //             "url" => "http://petanikode.com"
    //         )
    //     );

    //     $this->load->library('pdfs');

    //     $this->pdf->setPaper('A4', 'landscape');
    //     $this->pdf->filename = "laporan-petanikode.pdf";
    //     $this->pdf->load_view('admin/v_yuda_laporanpdf', $data);
    // }







    // Controller View Petugas
    // Dashboard Petugas
    public function admin_petugas()
    {
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $pengaduan = $this->db->get('pengaduan')->num_rows();
        $proses = $this->db->get_where('pengaduan', ['status' => 'proses'])->num_rows();
        $selesai = $this->db->get_where('pengaduan', ['status' => 'selesai'])->num_rows();

        $data = array(
            'pengaduan' => $pengaduan,
            'proses' => $proses,
            'selesai' => $selesai
        );
        $data['title'] = 'Dashboard';
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('template_petugas/header', $data);
        $this->load->view('template_petugas/sidebar', $data);
        $this->load->view('template_petugas/topbar', $data);
        $this->load->view('petugas/v_yuda_dashboardpetugas', $data);
        $this->load->view('template_petugas/footer', $data);
    }

    public function tabel_petugas()
    {
        $this->load->model('M_yuda_Admin');
        $data['lihat_petugas'] = $this->M_yuda_Admin->getPetugas();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Data Petugas';
        $this->load->view('template_petugas/header', $data);
        $this->load->view('template_petugas/sidebar', $data);
        $this->load->view('template_petugas/topbar', $data);
        $this->load->view('petugas/v_yuda_petugas', $data);
        $this->load->view('template_petugas/footer', $data);
    }

    public function tabel_kategori()
    {
        $this->load->model('M_yuda_Admin');
        $data['kategori'] = $this->M_yuda_Admin->getKategori();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['subkategori'] = $this->M_yuda_Admin->joinSubKategori();
        $data['title'] = 'Data Kategori';
        $this->load->view('template_petugas/header', $data);
        $this->load->view('template_petugas/sidebar', $data);
        $this->load->view('template_petugas/topbar', $data);
        $this->load->view('petugas/v_yuda_kategoripetugas', $data);
        $this->load->view('template_petugas/footer', $data);
    }
    public function tabel_masyarakat()
    {
        $this->load->model('M_yuda_Admin');
        $data['masyarakat'] = $this->M_yuda_Admin->getMasyarakat();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['subkategori'] = $this->M_yuda_Admin->joinSubKategori();
        $data['title'] = 'Data Masyarakat';
        $this->load->view('template_petugas/header', $data);
        $this->load->view('template_petugas/sidebar', $data);
        $this->load->view('template_petugas/topbar', $data);
        $this->load->view('petugas/v_yuda_masyarakat', $data);
        $this->load->view('template_petugas/footer', $data);
    }

    public function riwayat_petugas()
    {
        $this->load->model('M_yuda_Admin');
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $data['riwayatadmin'] = $this->M_yuda_Admin->getRiwayatAdmin();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Data Pengaduan';
        $this->load->view('template_petugas/header', $data);
        $this->load->view('template_petugas/sidebar', $data);
        $this->load->view('template_petugas/topbar', $data);
        $this->load->view('petugas/v_yuda_riwayatpetugas', $data);
        $this->load->view('template_petugas/footer', $data);
    }

    public function proses_petugas($id)
    {
        $this->load->model('M_yuda_Admin');
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['p'] = $this->M_yuda_Admin->proses($id);
        $data['prosestanggapan'] = $this->M_yuda_Admin->prosesTanggapan($id);
        $data['title'] = 'Laporan Proses';
        $this->load->view('template_petugas/header', $data);
        $this->load->view('template_petugas/sidebar', $data);
        $this->load->view('template_petugas/topbar', $data);
        $this->load->view('petugas/v_yuda_proses', $data);
        $this->load->view('template_petugas/footer', $data);
    }
    public function selesai_petugas($id)
    {
        $this->load->model('M_yuda_Admin');
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['p'] = $this->M_yuda_Admin->proses($id);
        $data['prosestanggapan'] = $this->M_yuda_Admin->prosesTanggapan($id);
        $data['title'] = 'Laporan Selesai';
        $this->load->view('template_petugas/header', $data);
        $this->load->view('template_petugas/sidebar', $data);
        $this->load->view('template_petugas/topbar', $data);
        $this->load->view('petugas/v_yuda_selesai', $data);
        $this->load->view('template_petugas/footer', $data);
    }
}
