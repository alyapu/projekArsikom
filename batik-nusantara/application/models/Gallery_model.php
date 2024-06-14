<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_gallery($data) {
        return $this->db->insert('gallery', $data);
    }
    public function get_all_galleries() {
        $query = $this->db->get('gallery');
        return $query->result_array();
    }
    public function get_gallery_by_id($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('gallery');
        return $query->row_array(); // Mengembalikan satu baris hasil sebagai array
    }
    public function update_gallery($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('gallery', $data);
    }
    public function delete_gallery($id) {
        // Menghapus data galeri dari database berdasarkan ID
        $this->db->where('id', $id);
        $this->db->delete('gallery');
    }
    
}
?>
