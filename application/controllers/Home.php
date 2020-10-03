<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_barang');
        $this->load->model('model_berita');
        $this->load->model('model_contact');
        $this->load->model('model_user');
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $this->load->model('model_berita');
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $data['barang'] = $this->model_barang->tampil_limit(8, 1)->result();
        $data['berita'] = $this->model_berita->tampil_berita()->result();
        $this->load->view('layout/v_head');
        $this->load->view('v_home', $data);
        $this->load->view('layout/v_footer');
    }
    public function admin()
    {
        $data['title'] = 'Collections';
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $data['user'] = $this->model_user->tampil_data()->result();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('v_admin', $data);
        $this->load->view('admin/footer');
    }
    public function admin_news()
    {
        $data['title'] = 'News';
        $data['berita'] = $this->model_berita->tampil_berita()->result();
        $data['user'] = $this->model_user->tampil_data()->result();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('v_admin_news', $data);
        $this->load->view('admin/footer');
    }
    public function admin_about()
    {
        $data['title'] = 'About us';
        $data['contact'] = $this->model_contact->tampil_massage()->result();
        $data['user'] = $this->model_user->tampil_data()->result();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('v_admin_about_us', $data);
            $this->load->view('admin/footer');
        } else {
            // $this->model_contact->hapus_datas();
            // $this->session->set_flashdata('flash', ' add ');
            redirect('home/admin_about');
        }
    }
    public function collection()
    {
        // $this->load->model('model_barang');
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('layout/v_head');
        $this->load->view('v_collection', $data);
        $this->load->view('layout/v_footer');
    }
    public function news()
    {
        // $this->load->model('model_berita');
        $data['berita'] = $this->model_berita->tampil_berita()->result();
        $this->load->view('layout/v_head');
        $this->load->view('v_news', $data);
        $this->load->view('layout/v_footer');
    }
    public function gallery()
    {
        // $this->load->model('model_barang');
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('layout/v_head');
        $this->load->view('v_gallery', $data);
        $this->load->view('layout/v_footer');
    }
    // awal bagian method admin
    // public function tambah_data()
    // {
    //     $namabrg        = $this->input->post('nama_barang');
    //     $hargabrg       = $this->input->post('harga_barang');
    //     $deskripsibrg   = $this->input->post('deskripsi_barang');
    //     $gambarbrg      = $this->input->post('gambar');

    //     $data = array(
    //         'nama_barang'   => $namabrg,
    //         'harga_barang'   => $hargabrg,
    //         'deskripsi_barang'   => $deskripsibrg,
    //         'gambar'   => $gambarbrg,
    //     );

    //     $this->model_barang->input_data($data, 'tb_barang');
    //     redirect('home/admin');
    // }
    public function send_massage()
    {
        $massage        = $this->input->post('massage');
        $nama_user       = $this->input->post('nama_user');
        $email_user   = $this->input->post('email_user');


        $data = array(
            'massage'   => $massage,
            'nama_user'   => $nama_user,
            'email_user'   => $email_user,

        );
        // $this->load->model('model_contact');
        $this->model_contact->input_massage($data, 'tb_contact');
        $this->session->set_flashdata('flash', ' successfully ');

        redirect('home/about');
    }
    public function edit_barang($id_barang)
    {
        $data['title'] = 'Collection - Edit Barang';
        $where = array('id_barang' => $id_barang);
        $data['barang'] = $this->model_barang->edit_data($where, 'tb_barang')->result();
        $data['user'] = $this->model_user->tampil_data()->result();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('v_edit_adminbrg', $data);
        $this->load->view('admin/footer');

        $this->session->set_flashdata('flash', ' edit ');
    }
    public function tambah_barang()
    {
        $this->form_validation->set_rules('nama_barang', 'nama barang', 'required');
        $this->form_validation->set_rules('harga_barang', 'harga barang', 'required|numeric');
        $this->form_validation->set_rules('deskripsi_barang', 'deskripsi barang', 'required');
        $this->form_validation->set_rules('gambar', 'gambar', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Collection - Add Barang';
            $data['user'] = $this->model_user->tampil_data()->result();
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('v_tambah_adminbrg');
            $this->load->view('admin/footer');
        } else {
            $this->model_barang->tambah_data();
            $this->session->set_flashdata('flash', ' added ');

            redirect('home/admin');
        }
    }
    public function update()
    {
        $id_barang = $this->input->post('id_barang');
        $nama_barang = $this->input->post('nama_barang');
        $harga_barang = $this->input->post('harga_barang');
        $deskripsi_barang = $this->input->post('deskripsi_barang');
        $gambar = $this->input->post('gambar');

        $data = array(
            'nama_barang'       =>  $nama_barang,
            'harga_barang'      =>  $harga_barang,
            'deskripsi_barang'  =>  $deskripsi_barang,
            'gambar'            =>  $gambar,
        );
        $where = array(
            'id_barang' => $id_barang
        );
        $this->model_barang->update_data($where, $data, 'tb_barang');
        $this->session->set_flashdata('flash', ' edit ');
        redirect('home/admin');
    }
    public function hapus_barang($id_barang)
    {
        $where = array('id_barang' => $id_barang);
        $this->model_barang->hapus_data($where, 'tb_barang');
        $this->session->set_flashdata('flash', ' Delete ');

        redirect('home/admin');
    }
    public function hapus_massage($id_contact)
    {
        // $this->load->model('model_contact');
        $where = array('id_contact' => $id_contact);
        $this->model_contact->hapus_data($where, 'tb_contact');
        $this->session->set_flashdata('flash', ' Delete ');

        redirect('home/admin_about');
    }
    public function edit_berita($id_berita)
    {

        $where = array('id_berita' => $id_berita);
        $data['berita'] = $this->model_berita->edit_data($where, 'tb_berita')->result();
        $data['user'] = $this->model_user->tampil_data()->result();

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'News - Edit News';
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('v_edit_adminbrt', $data);
            $this->load->view('admin/footer');
        } else {
            // $this->model_barang->tambah_data();
            $this->session->set_flashdata('flash', ' added ');

            redirect('home/admin_news');
        }
    }
    public function update_brt()
    {
        // $this->load->model('model_berita');
        $id_berita = $this->input->post('id_berita');
        $nama_berita = $this->input->post('nama_berita');
        $deskripsi_berita = $this->input->post('deskripsi_berita');
        $gambar_berita = $this->input->post('gambar_berita');


        $data = array(
            'nama_berita'           =>  $nama_berita,
            'deskripsi_berita'      =>  $deskripsi_berita,
            'gambar_berita'         =>  $gambar_berita,
        );
        $where = array(
            'id_berita' => $id_berita
        );
        $this->model_berita->update_data($where, $data, 'tb_berita');
        $this->session->set_flashdata('flash', ' edit ');
        redirect('home/admin_news');
    }
    public function detail_barang($id_barang)
    {
        // $this->load->model('model_barang');
        $data['barang'] = $this->model_barang->detail_brg($id_barang);
        $this->load->view('layout/v_head');
        $this->load->view('v_detail_barang', $data);
        $this->load->view('layout/v_footer');
    }
    public function about()
    {
        $data['lokasi'] = $this->model_contact->tampil_lokasi()->result();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/v_head');
            $this->load->view('v_about', $data);
            $this->load->view('layout/v_footer');
        } else {
            $this->model_contact->input_massage();
            // $this->session->set_flashdata('flash', ' successfully ');

            redirect('home/admin');
        }
    }
    public function admin_location()
    {
        $data['title'] = 'Admin - Location';
        $data['lokasi'] = $this->model_contact->tampil_lokasi()->result();
        $data['user'] = $this->model_user->tampil_data()->result();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('v_admin_location', $data);
        $this->load->view('admin/footer');
    }
    public function edit_location($id_lokasi)
    {

        $where = array('id_lokasi' => $id_lokasi);
        $data['lokasi'] = $this->model_contact->edit_lokasi($where, 'tb_lokasi')->result();
        $data['user'] = $this->model_user->tampil_data()->result();

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Location - Edit Location';
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('v_edit_adminlks', $data);
            $this->load->view('admin/footer');
        } else {
            // $this->model_barang->tambah_data();
            // $this->session->set_flashdata('flash', ' added ');

            redirect('home/admin_location');
        }
    }
    public function update_lks()
    {
        // $this->load->model('model_contact');
        $id_lokasi = $this->input->post('id_lokasi');
        $profile = $this->input->post('profile');
        $map = $this->input->post('map');
        $desa = $this->input->post('desa');
        $kecamatan = $this->input->post('kecamatan');
        $kabupaten = $this->input->post('kabupaten');
        $no_hp = $this->input->post('no_hp');
        $instagram = $this->input->post('instagram');


        $data = array(
            'profile'           =>  $profile,
            'map'               =>  $map,
            'desa'              =>  $desa,
            'kecamatan'         =>  $kecamatan,
            'kabupaten'         =>  $kabupaten,
            'no_hp'             =>  $no_hp,
            'instagram'         =>  $instagram,
        );
        $where = array(
            'id_lokasi' => $id_lokasi
        );
        $this->model_contact->update_lokasi($where, $data, 'tb_lokasi');
        $this->session->set_flashdata('flash', ' edit ');
        redirect('home/admin_location');
    }

    // login
    // public function login()
    // {
    //     $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    //     $this->form_validation->set_rules('password', 'Password', 'trim|required');
    //     if ($this->form_validation->run() == false) {

    //         $this->load->view('layout_login/head_login');
    //         $this->load->view('v_login');
    //         $this->load->view('layout_login/footer_login');
    //     } else {
    //         // validasi success
    //         $this->_login();
    //     }
    // }
    // private function _login()
    // {
    //     $email = $this->input->post('email');
    //     $password = $this->input->post('password');

    //     $user = $this->db->get_where('tb_user', ['email' => $email])->row_array();
    //     // jika usernya aktif

    //     if ($user['is_active'] == 1) {
    //         // user active
    //         if ($user['is_active'] == 1) {
    //             // cek password
    //             if (password_verify($password, $user['password'])) {
    //                 $data = [
    //                     'email' => $user['email'],
    //                     'role_id' => $user[role_id]
    //                 ];
    //                 $this->session->set_userdata($data);
    //                 redirect('home/index  ');
    //             } else {
    //                 $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Wrong password!</div>');
    //                 redirect('home/login');
    //             }
    //         }
    //     } else {
    //         $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Email is not registered!</div>');
    //         redirect('home/login');
    //     }
    // }
    // akhir method
}
