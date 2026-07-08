<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        if ($this->session->userdata('status') != "login") {
            redirect('auth1');
        }
    }

    public function index()
    {
        $this->load->model(['M_wisata', 'M_artikel', 'M_akun', 'M_testimoni']);

        $data['title'] = "Dashboard";
        $data['active_menu'] = "dashboard";
        $data['total_wisata'] = $this->M_wisata->count_all();
        $data['total_artikel_published'] = $this->M_artikel->count_published();
        $data['total_akun'] = $this->M_akun->count_all();
        $data['total_testimoni_baru'] = $this->M_testimoni->count_pending();

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/v_admin', $data);
        $this->load->view('admin/layout/footer');
    }

    public function wisata()
    {
        $this->load->model('M_wisata');
        $data['title'] = "Kelola Wisata";
        $data['active_menu'] = "wisata";
        $data['wisata'] = $this->M_wisata->get_data();

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/v_wisata', $data);
        $this->load->view('admin/layout/footer');
    }

    public function tambah_wisata()
    {
        $data['title'] = "Tambah Wisata";
        $data['active_menu'] = "wisata";

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/v_wisata_tambah', $data);
        $this->load->view('admin/layout/footer');
    }

    public function tambah_wisata_aksi()
    {
        $this->load->model('M_wisata');
        $nama_wisata = $this->input->post('nama_wisata');
        $deskripsi = $this->input->post('deskripsi');
        $kategori = $this->input->post('kategori');
        $status = $this->input->post('status');

        $file_name = '';
        if (!empty($_FILES['file_gambar']['name'])) {
            $upload_path = './assets/images/wisata/';
            if (!is_dir($upload_path)) {
                mkdir($upload_path, 0777, true);
            }

            $config['upload_path']          = $upload_path;
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2048; // 2MB
            $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_gambar')) {
                $uploadData = $this->upload->data();
                $file_name = $uploadData['file_name'];

                // Optimize image size
                $this->load->library('image_lib');
                $config_img = array(
                    'image_library'  => 'gd2',
                    'source_image'   => $upload_path . $file_name,
                    'new_image'      => $upload_path . $file_name,
                    'width'          => 600,
                    'height'         => 400,
                    'maintain_ratio' => TRUE,
                    'quality'        => '85%'
                );
                $this->image_lib->initialize($config_img);
                $this->image_lib->resize();
                $this->image_lib->clear();
            }
        }

        $data = array(
            'nama_wisata' => $nama_wisata,
            'deskripsi' => $deskripsi,
            'kategori' => $kategori,
            'status' => $status
        );

        if (!empty($file_name)) {
            $data['file_gambar'] = $file_name;
        }

        $this->M_wisata->insert_data($data);
        redirect('admin/wisata');
    }

    public function edit_wisata($id)
    {
        $this->load->model('M_wisata');
        $data['title'] = "Edit Wisata";
        $data['active_menu'] = "wisata";
        $data['wisata'] = $this->M_wisata->get_data_by_id($id);

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/v_wisata_edit', $data);
        $this->load->view('admin/layout/footer');
    }

    public function edit_wisata_aksi()
    {
        $this->load->model('M_wisata');
        $id = $this->input->post('id_wisata');
        $nama_wisata = $this->input->post('nama_wisata');
        $deskripsi = $this->input->post('deskripsi');
        $kategori = $this->input->post('kategori');
        $status = $this->input->post('status');

        $file_name = '';
        if (!empty($_FILES['file_gambar']['name'])) {
            $wisata = $this->M_wisata->get_data_by_id($id);
            if ($wisata && !empty($wisata->file_gambar)) {
                $old_path = './assets/images/wisata/' . $wisata->file_gambar;
                if (file_exists($old_path)) {
                    unlink($old_path);
                }
            }

            $upload_path = './assets/images/wisata/';
            if (!is_dir($upload_path)) {
                mkdir($upload_path, 0777, true);
            }

            $config['upload_path']          = $upload_path;
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2048; // 2MB
            $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_gambar')) {
                $uploadData = $this->upload->data();
                $file_name = $uploadData['file_name'];

                // Optimize image size
                $this->load->library('image_lib');
                $config_img = array(
                    'image_library'  => 'gd2',
                    'source_image'   => $upload_path . $file_name,
                    'new_image'      => $upload_path . $file_name,
                    'width'          => 600,
                    'height'         => 400,
                    'maintain_ratio' => TRUE,
                    'quality'        => '85%'
                );
                $this->image_lib->initialize($config_img);
                $this->image_lib->resize();
                $this->image_lib->clear();
            }
        }

        $data = array(
            'nama_wisata' => $nama_wisata,
            'deskripsi' => $deskripsi,
            'kategori' => $kategori,
            'status' => $status
        );

        if (!empty($file_name)) {
            $data['file_gambar'] = $file_name;
        }

        $where = array('id_wisata' => $id);
        $this->M_wisata->update_data($data, $where);
        redirect('admin/wisata');
    }

    public function hapus_wisata($id)
    {
        $this->load->model('M_wisata');
        $wisata = $this->M_wisata->get_data_by_id($id);

        if ($wisata && !empty($wisata->file_gambar)) {
            $path = './assets/images/wisata/' . $wisata->file_gambar;
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $where = array('id_wisata' => $id);
        $this->M_wisata->delete_data($where);
        redirect('admin/wisata');
    }

    public function artikel()
    {
        $this->load->model('M_artikel');
        $data['title'] = "Kelola Artikel";
        $data['active_menu'] = "artikel";
        $data['artikel'] = $this->M_artikel->get_data();

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/v_artikel', $data);
        $this->load->view('admin/layout/footer');
    }

    public function tambah_artikel()
    {
        $data['title'] = "Tambah Artikel";
        $data['active_menu'] = "artikel";

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/v_artikel_tambah', $data);
        $this->load->view('admin/layout/footer');
    }

    public function tambah_artikel_aksi()
    {
        $this->load->model('M_artikel');
        $judul = $this->input->post('judul');
        $penulis = $this->input->post('penulis');
        $tanggal = $this->input->post('tanggal');
        $konten = $this->input->post('konten');
        $status = $this->input->post('status');

        $gambar_artikel = null;
        if (!empty($_FILES['gambar_artikel']['name'])) {
            $upload = $this->upload_artikel_image('gambar_artikel');
            if ($upload['status']) {
                $gambar_artikel = $upload['file_name'];
            } else {
                $this->session->set_flashdata('error', $upload['message']);
                redirect('admin/tambah_artikel');
            }
        }

        $data = array(
            'judul' => $judul,
            'penulis' => $penulis,
            'tanggal' => $tanggal,
            'konten' => $konten,
            'status' => $status,
            'gambar_artikel' => $gambar_artikel
        );

        $this->M_artikel->insert_data($data);
        redirect('admin/artikel');
    }

    public function edit_artikel($id)
    {
        $this->load->model('M_artikel');
        $data['title'] = "Edit Artikel";
        $data['active_menu'] = "artikel";
        $data['artikel'] = $this->M_artikel->get_data_by_id($id);

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/v_artikel_edit', $data);
        $this->load->view('admin/layout/footer');
    }

    public function edit_artikel_aksi()
    {
        $this->load->model('M_artikel');
        $id = $this->input->post('id_artikel');
        $judul = $this->input->post('judul');
        $penulis = $this->input->post('penulis');
        $tanggal = $this->input->post('tanggal');
        $konten = $this->input->post('konten');
        $status = $this->input->post('status');

        $data = array(
            'judul' => $judul,
            'penulis' => $penulis,
            'tanggal' => $tanggal,
            'konten' => $konten,
            'status' => $status
        );

        if (!empty($_FILES['gambar_artikel']['name'])) {
            $upload = $this->upload_artikel_image('gambar_artikel');
            if ($upload['status']) {
                $artikel = $this->M_artikel->get_data_by_id($id);
                if ($artikel && !empty($artikel->gambar_artikel) && file_exists(FCPATH . 'uploads/artikel/' . $artikel->gambar_artikel)) {
                    @unlink(FCPATH . 'uploads/artikel/' . $artikel->gambar_artikel);
                }
                $data['gambar_artikel'] = $upload['file_name'];
            } else {
                $this->session->set_flashdata('error', $upload['message']);
                redirect('admin/edit_artikel/' . $id);
            }
        }

        $where = array('id_artikel' => $id);
        $this->M_artikel->update_data($data, $where);
        redirect('admin/artikel');
    }

    public function hapus_artikel($id)
    {
        $this->load->model('M_artikel');
        $artikel = $this->M_artikel->get_data_by_id($id);
        if ($artikel && !empty($artikel->gambar_artikel) && file_exists(FCPATH . 'uploads/artikel/' . $artikel->gambar_artikel)) {
            @unlink(FCPATH . 'uploads/artikel/' . $artikel->gambar_artikel);
        }

        $where = array('id_artikel' => $id);
        $this->M_artikel->delete_data($where);
        redirect('admin/artikel');
    }

    private function upload_artikel_image($field_name)
    {
        $upload_path = './uploads/artikel/';
        if (!is_dir($upload_path)) {
            mkdir($upload_path, 0755, true);
        }

        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 4096;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($field_name)) {
            return array('status' => false, 'message' => strip_tags($this->upload->display_errors()));
        }

        $uploadData = $this->upload->data();
        $file_name = $uploadData['file_name'];

        $this->load->library('image_lib');
        $config_img = array(
            'image_library' => 'gd2',
            'source_image' => $upload_path . $file_name,
            'new_image' => $upload_path . $file_name,
            'maintain_ratio' => TRUE,
            'width' => 1200,
            'height' => 800,
            'quality' => '85%'
        );
        $this->image_lib->initialize($config_img);
        $this->image_lib->resize();
        $this->image_lib->clear();

        return array('status' => true, 'file_name' => $file_name);
    }

    public function akun()
    {
        $this->load->model('M_akun');
        $data['title'] = "Kelola Akun";
        $data['active_menu'] = "akun";
        $data['akun'] = $this->M_akun->get_data();

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/v_akun', $data);
        $this->load->view('admin/layout/footer');
    }

    public function tambah_akun()
    {
        $data['title'] = "Tambah Akun";
        $data['active_menu'] = "akun";

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/v_akun_tambah', $data);
        $this->load->view('admin/layout/footer');
    }

    public function tambah_akun_aksi()
    {
        $this->load->model('M_akun');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $role = $this->input->post('role');

        $data = array(
            'nama_lengkap' => $nama_lengkap,
            'username' => $username,
            'password' => md5($password),
            'role' => $role
        );

        $this->M_akun->insert_data($data);
        redirect('admin/akun');
    }

    public function edit_akun($id)
    {
        $this->load->model('M_akun');
        $data['title'] = "Edit Akun";
        $data['active_menu'] = "akun";
        $data['akun'] = $this->M_akun->get_data_by_id($id);

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/v_akun_edit', $data);
        $this->load->view('admin/layout/footer');
    }

    public function edit_akun_aksi()
    {
        $this->load->model('M_akun');
        $id = $this->input->post('id_admin');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $role = $this->input->post('role');

        $data = array(
            'nama_lengkap' => $nama_lengkap,
            'username' => $username,
            'role' => $role
        );

        // Jika password diisi, maka update password
        if (!empty($password)) {
            $data['password'] = md5($password);
        }

        $where = array('id_admin' => $id);
        $this->M_akun->update_data($data, $where);
        redirect('admin/akun');
    }

    public function hapus_akun($id)
    {
        $this->load->model('M_akun');
        $where = array('id_admin' => $id);
        $this->M_akun->delete_data($where);
        redirect('admin/akun');
    }

    public function admin()
    {
        // Dialihkan ke kelola akun karena sudah digabung
        redirect('admin/akun');
    }

    public function gambar()
    {
        $this->load->model('M_gambar');
        $data['title'] = "Kelola Gambar";
        $data['active_menu'] = "gambar";
        $data['gambar'] = $this->M_gambar->get_data();

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/v_gambar', $data);
        $this->load->view('admin/layout/footer');
    }

    public function tambah_gambar()
    {
        $data['title'] = "Tambah Gambar";
        $data['active_menu'] = "gambar";

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/v_gambar_tambah', $data);
        $this->load->view('admin/layout/footer');
    }

    public function tambah_gambar_aksi()
    {
        $this->load->model('M_gambar');
        $keterangan = $this->input->post('keterangan');

        // Create directory if not exists
        $upload_path = './assets/images/gallery/';
        if (!is_dir($upload_path)) {
            mkdir($upload_path, 0777, true);
        }

        $config['upload_path']          = $upload_path;
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 2048; // 2MB
        $config['encrypt_name']         = TRUE;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file_gambar')) {
            $uploadData = $this->upload->data();
            $file_name = $uploadData['file_name'];

            $data = array(
                'keterangan' => $keterangan,
                'file_gambar' => $file_name
            );
            $this->M_gambar->insert_data($data);
            redirect('admin/gambar');
        } else {
            redirect('admin/gambar');
        }
    }

    public function hapus_gambar($id)
    {
        $this->load->model('M_gambar');
        $gambar = $this->M_gambar->get_data_by_id($id);

        if ($gambar) {
            $path = './assets/images/gallery/' . $gambar->file_gambar;
            if (file_exists($path)) {
                unlink($path);
            }
            $where = array('id_gambar' => $id);
            $this->M_gambar->delete_data($where);
        }
        redirect('admin/gambar');
    }

    public function kontak()
    {
        $this->load->model('M_kontak');
        $data['title'] = "Kelola Kontak";
        $data['active_menu'] = "kontak";
        $data['kontak'] = $this->M_kontak->get_data();

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/v_kontak', $data);
        $this->load->view('admin/layout/footer');
    }

    public function tambah_kontak()
    {
        $data['title'] = "Tambah Kontak";
        $data['active_menu'] = "kontak";

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/v_kontak_tambah', $data);
        $this->load->view('admin/layout/footer');
    }

    public function tambah_kontak_aksi()
    {
        $this->load->model('M_kontak');
        $pengirim = $this->input->post('pengirim');
        $email = $this->input->post('email');
        $no_hp = $this->input->post('no_hp');
        $isi_pesan = $this->input->post('isi_pesan');
        $tanggal = $this->input->post('tanggal');
        $status = $this->input->post('status');

        $data = array(
            'pengirim' => $pengirim,
            'email' => $email,
            'no_hp' => $no_hp,
            'isi_pesan' => $isi_pesan,
            'tanggal' => $tanggal,
            'status' => $status
        );

        $this->M_kontak->insert_data($data);
        redirect('admin/kontak');
    }

    public function edit_kontak($id)
    {
        $this->load->model('M_kontak');
        $data['title'] = "Edit Kontak";
        $data['active_menu'] = "kontak";
        $data['kontak'] = $this->M_kontak->get_data_by_id($id);

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/v_kontak_edit', $data);
        $this->load->view('admin/layout/footer');
    }

    public function edit_kontak_aksi()
    {
        $this->load->model('M_kontak');
        $id = $this->input->post('id_kontak');
        $pengirim = $this->input->post('pengirim');
        $email = $this->input->post('email');
        $no_hp = $this->input->post('no_hp');
        $isi_pesan = $this->input->post('isi_pesan');
        $tanggal = $this->input->post('tanggal');
        $status = $this->input->post('status');

        $data = array(
            'pengirim' => $pengirim,
            'email' => $email,
            'no_hp' => $no_hp,
            'isi_pesan' => $isi_pesan,
            'tanggal' => $tanggal,
            'status' => $status
        );

        $where = array('id_kontak' => $id);
        $this->M_kontak->update_data($data, $where);
        redirect('admin/kontak');
    }

    public function hapus_kontak($id)
    {
        $this->load->model('M_kontak');
        $where = array('id_kontak' => $id);
        $this->M_kontak->delete_data($where);
        redirect('admin/kontak');
    }

    public function testimoni()
    {
        $this->load->model('M_testimoni');
        $data['title'] = "Kelola Testimoni";
        $data['active_menu'] = "testimoni";
        $data['testimoni'] = $this->M_testimoni->get_data();

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/v_testimoni', $data);
        $this->load->view('admin/layout/footer');
    }

    public function tambah_testimoni()
    {
        $data['title'] = "Tambah Testimoni";
        $data['active_menu'] = "testimoni";

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/v_testimoni_tambah', $data);
        $this->load->view('admin/layout/footer');
    }

    public function tambah_testimoni_aksi()
    {
        $this->load->model('M_testimoni');
        $nama = $this->input->post('nama');
        $isi = $this->input->post('isi');
        $rating = $this->input->post('rating');
        $status = $this->input->post('status');

        $foto_name = null;
        if (!empty($_FILES['foto']['name'])) {
            $upload_path = './assets/images/testimoni/';
            if (!is_dir($upload_path)) {
                mkdir($upload_path, 0777, true);
            }

            $config['upload_path'] = $upload_path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')) {
                $uploadData = $this->upload->data();
                $foto_name = $uploadData['file_name'];
            }
        }

        $data = array(
            'nama' => $nama,
            'isi' => $isi,
            'rating' => intval($rating),
            'status' => $status,
        );

        if ($foto_name) {
            $data['foto'] = $foto_name;
        }

        $this->M_testimoni->insert_data($data);
        redirect('admin/testimoni');
    }

    public function edit_testimoni($id)
    {
        $this->load->model('M_testimoni');
        $data['title'] = "Edit Testimoni";
        $data['active_menu'] = "testimoni";
        $data['testimoni'] = $this->M_testimoni->get_data_by_id($id);

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/v_testimoni_edit', $data);
        $this->load->view('admin/layout/footer');
    }

    public function edit_testimoni_aksi()
    {
        $this->load->model('M_testimoni');
        $id = $this->input->post('id_testimoni');
        $nama = $this->input->post('nama');
        $isi = $this->input->post('isi');
        $rating = $this->input->post('rating');
        $status = $this->input->post('status');

        $data = array(
            'nama' => $nama,
            'isi' => $isi,
            'rating' => intval($rating),
            'status' => $status,
        );

        if (!empty($_FILES['foto']['name'])) {
            $testimonial = $this->M_testimoni->get_data_by_id($id);
            if ($testimonial && !empty($testimonial->foto) && file_exists('./assets/images/testimoni/' . $testimonial->foto)) {
                unlink('./assets/images/testimoni/' . $testimonial->foto);
            }

            $upload_path = './assets/images/testimoni/';
            if (!is_dir($upload_path)) {
                mkdir($upload_path, 0777, true);
            }

            $config['upload_path'] = $upload_path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')) {
                $uploadData = $this->upload->data();
                $data['foto'] = $uploadData['file_name'];
            }
        }

        $where = array('id_testimoni' => $id);
        $this->M_testimoni->update_data($data, $where);
        redirect('admin/testimoni');
    }

    public function approve_testimoni($id)
    {
        $this->load->model('M_testimoni');
        $data = array('status' => 'Aktif');
        $where = array('id_testimoni' => $id);
        $this->M_testimoni->update_data($data, $where);
        redirect('admin/testimoni');
    }

    public function hapus_testimoni($id)
    {
        $this->load->model('M_testimoni');
        $testimonial = $this->M_testimoni->get_data_by_id($id);
        if ($testimonial && !empty($testimonial->foto) && file_exists('./assets/images/testimoni/' . $testimonial->foto)) {
            unlink('./assets/images/testimoni/' . $testimonial->foto);
        }
        $where = array('id_testimoni' => $id);
        $this->M_testimoni->delete_data($where);
        redirect('admin/testimoni');
    }

    public function logout()
    {
        $data['logout'] = "keluar";
        $this->load->view('admin/v_logout', $data);
    }
}
