<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_model extends CI_Model
{

    public function insertBlog($data)
    {
        $this->db->insert('blog', $data);
    }
    public function insertComment($data)
    {
        $this->db->insert('comment', $data);
    }
}
