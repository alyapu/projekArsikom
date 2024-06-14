<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Blog_model', 'model');
        $this->load->model('Gallery_model');
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topnav');
        $this->load->view('templates/sidenav');
        $this->load->view('admin/index');
        $this->load->view('templates/footer');
    }

    public function managePosts()
    {
        $data['title'] = 'Admin - Manage Posts';
        $data['blog'] = $this->db->get('blog')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topnav');
        $this->load->view('templates/sidenav');
        $this->load->view('admin/manage_posts', $data);
        $this->load->view('templates/footer');
    }

    public function addNewPost()
    {
        $this->form_validation->set_rules('blog_title', 'Blog Title', 'required|trim');
        $this->form_validation->set_rules('preview', 'Preview', 'required|trim');
        $this->form_validation->set_rules('content', 'Content', 'required|trim');

        // Tambahkan aturan validasi khusus untuk file upload
        $this->form_validation->set_rules('image', 'Image', 'callback_image_upload');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Admin - Add New Post';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topnav');
            $this->load->view('templates/sidenav');
            $this->load->view('admin/add_new_post');
            $this->load->view('templates/footer');
        } else {
            // Load the slug helper
            $this->load->helper('slug');

            $blog_title = $this->input->post('blog_title', true);
            $slug = generate_slug($blog_title);

            $data = [
                'blog_title' => htmlspecialchars($blog_title),
                'slug' => $slug,
                'preview' => htmlspecialchars($this->input->post('preview', true)),
                'content' => htmlspecialchars($this->input->post('content', true)),
                'writter' => 'admin',
                'date_post' => time(),
                'date_edit' => time()
            ];

            // File upload sudah diverifikasi, lakukan proses upload
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']     = '10000';
            $config['upload_path'] = './assets/images/post';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $new_image = $this->upload->data('file_name');
                $data['image'] = $new_image;
            } else {
                // Jika upload gagal, tampilkan pesan kesalahan
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('admin/addNewPost'); // Redirect kembali ke halaman tambah posting
            }

            // Panggil model untuk menyimpan data blog
            $this->model->insertBlog($data);

            // Set flashdata untuk pesan sukses
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>');
            redirect('admin/manageposts');
        }
    }

    // Fungsi callback untuk memeriksa upload file
    public function image_upload()
    {
        if (empty($_FILES['image']['name'])) {
            $this->form_validation->set_message('image_upload', 'The {field} field is required.');
            return false;
        } else {
            return true;
        }
    }



    public function edit($id)
    {
        $data['blog'] = $this->db->get_where('blog', ['id' => $id])->row_array();

        $data['title'] = 'Admin - Edit Post';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topnav');
        $this->load->view('templates/sidenav');
        $this->load->view('admin/edit_post', $data);
        $this->load->view('templates/footer');
    }

    public function editpost()
    {
        $id = $this->input->post('id');
        $data['blog'] = $this->db->get_where('blog', ['id' => $id])->row_array();

        $this->form_validation->set_rules('blog_title', 'Blog Title', 'required|trim');
        $this->form_validation->set_rules('preview', 'Preview', 'required|trim');
        $this->form_validation->set_rules('content', 'Content', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->edit($id);
        } else {
            $blog_title = htmlspecialchars($this->input->post('blog_title', true));
            $preview = htmlspecialchars($this->input->post('preview', true));
            $content = htmlspecialchars($this->input->post('content', true));
            $date_edit = time();

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/images/post';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['blog']['image'];
                    if ($old_image) {
                        unlink(FCPATH . 'assets/images/post/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('blog_title', $blog_title);
            $this->db->set('preview', $preview);
            $this->db->set('content', $content);
            $this->db->set('date_edit', $date_edit);
            $this->db->where('id', $id);
            $this->db->update('blog');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate!</div>');
            redirect('admin/edit/' . $id);
        }
    }

    public function delete($id)
    {
        // Hapus entri dari tabel 'blog'
        $this->db->delete('blog', ['id' => $id]);

        // Hapus entri terkait dari tabel 'comment'
        $this->db->delete('comment', ['comment_id' => $id]);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
        redirect('admin/manageposts');
    }

    public function gallery(){
        $data['title'] = 'Admin - Gallery';
        $data['galeri'] = $this->db->get('gallery')->result_array();
        $data['gallery'] = $this->Gallery_model->get_all_galleries();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topnav');
        $this->load->view('templates/sidenav');
        $this->load->view('admin/gallery', $data);
        $this->load->view('templates/footer');
    }

    public function addnewgallery() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a new gallery item';

        $this->form_validation->set_rules('gname', 'Name', 'required');
        $this->form_validation->set_rules('gdesc', 'Description', 'required');

        if ($this->form_validation->run() === FALSE) {
            // $this->load->view('templates/header', $data);
            $this->load->view('admin/addnewgallery');
            // $this->load->view('templates/footer');
        } else {
            $config['upload_path'] = 'assets/assets/img/gallery';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gpict')) {
                $data['error'] = $this->upload->display_errors();
                // $this->load->view('templates/header', $data);
                $this->load->view('admin/addnewgallery', $data);
                // $this->load->view('templates/footer');
            } else {
                $file_data = $this->upload->data();
                $data = array(
                    'gname' => $this->input->post('gname'),
                    'gdesc' => $this->input->post('gdesc'),
                    'gpict' => $file_data['file_name']
                );
                $this->Gallery_model->insert_gallery($data);
                redirect('admin/gallery');
            }
        }
    }

    public function editgallery($id) {
        // Validasi form
        $this->form_validation->set_rules('gname', 'Name', 'trim|required');
        $this->form_validation->set_rules('gdesc', 'Description', 'trim|required');
    
        if ($this->form_validation->run() === FALSE) {
            // Jika validasi gagal, kembali ke halaman edit dengan pesan kesalahan
            $data['gallery'] = $this->Gallery_model->get_gallery_by_id($id); // Mengambil data galeri berdasarkan ID
            $this->load->view('admin/editgallery', $data);
        } else {
            // Jika validasi berhasil, proses penyimpanan perubahan
            $config['upload_path'] = 'assets/assets/img/gallery/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048; // 2MB max
    
            $this->load->library('upload', $config);
    
            if (!$this->upload->do_upload('gpict')) {
                // Jika pengunggahan gambar gagal, tampilkan pesan error
                $error = $this->upload->display_errors();
                $data['gallery'] = $this->Gallery_model->get_gallery_by_id($id); // Mengambil data galeri berdasarkan ID
                $data['error'] = $error; // Menyimpan pesan error dalam data
                $this->load->view('admin/editgallery', $data);
            } else {
                // Jika pengunggahan gambar berhasil, proses penyimpanan perubahan
                $upload_data = $this->upload->data();
                $data = array(
                    'gname' => $this->input->post('gname'),
                    'gdesc' => $this->input->post('gdesc'),
                    'gpict' => $upload_data['file_name'] // Nama file gambar yang diunggah
                );
                // Memperbarui data galeri di database
                $this->Gallery_model->update_gallery($id, $data);
                redirect('admin/gallery');
            }
        }
    }
    public function deletegallery($id) {
        // Menghapus galeri dari database berdasarkan ID
        $this->Gallery_model->delete_gallery($id);
        // Redirect kembali ke halaman daftar galeri
        redirect('admin/gallery');
    }
    
    
}
