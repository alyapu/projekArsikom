<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Blog_model', 'model');
    }

    public function index()
    {
        // Load the pagination library
        $this->load->library('pagination');

        // Set pagination configuration
        $config['base_url'] = base_url('blog/index');
        $config['total_rows'] = $this->db->count_all('blog');
        $config['per_page'] = 6; // Jumlah post per halaman
        $config['uri_segment'] = 3; // Segment di URL yang berisi nomor halaman

        // Initialize pagination
        $this->pagination->initialize($config);

        // Fetch data from database
        $data['blog'] = $this->db->order_by('date_post', 'DESC')->get('blog', $config['per_page'], $this->uri->segment(3))->result_array();

        // Create pagination links
        $pagination_links = $this->pagination->create_links();


        // Tambahkan div pada setiap tautan paginasi
        $pagination_links = preg_replace('/<a(.*?)>/', '<div class="pagination-link"><a$1>', $pagination_links);
        $pagination_links = preg_replace('/<\/a>/', '</a></div>', $pagination_links);

        // Tambahkan kelas 'active' pada tautan halaman aktif
        $pagination_links = str_replace('<div class="pagination-link"><a', '<div class="pagination-link active"><a', $pagination_links);



        // Tambahkan pagination ke dalam data
        $data['pagination'] = $pagination_links;

        // Load the views
        $this->load->view('templates/blog/header');
        $this->load->view('blog/index', $data);
        $this->load->view('templates/blog/footer');
    }


    public function content($slug)
    {
        $data['blog'] = $this->db->get_where('blog', ['slug' => $slug])->row_array();

        // Mengambil komentar yang terkait dengan blog
        $this->db->select('comment.*');
        $this->db->from('comment');
        $this->db->join('blog', 'comment.comment_id = blog.id');
        $this->db->where('blog.id', $data['blog']['id']); // Menggunakan id blog yang sesuai
        $query = $this->db->get();
        $data['comments'] = $query->result_array(); // Simpan hasil query ke dalam array untuk ditampilkan

        $this->form_validation->set_rules('comment', 'Comment', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('blog/content', $data);
            $this->load->view('templates/blog/footer');
        } else {
            $commentData = [
                'comment_id' => $data['blog']['id'],
                'comment' => htmlspecialchars($this->input->post('comment'), true),
                'date_created' => time()
            ];

            $this->model->insertComment($commentData);

            redirect('blog/content/' . $slug);
        }
    }
    public function gallery()
    {
        $this->load->model('Gallery_model');
        $data['gallery'] = $this->Gallery_model->get_all_galleries();
        
        $this->load->view('blog/blog_gallery', $data);
        $this->load->view('templates/blog/header2');
        
    }
        
    
}
