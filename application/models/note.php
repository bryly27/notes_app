<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    date_default_timezone_set('America/Los_Angeles');

class Note extends CI_Model {


    public function create($post)
    {
       return $this->db->query("INSERT INTO notes (title, created_at, updated_at) VALUES (?, NOW(), NOW())", array($post['title']));

       // $query = "INSERT INTO notes (title, created_at, updated_at) VALUES (?, NOW(), NOW())";
       // return $this->db->query($query, array($post['title']));
    }

    public function get_notes()
    {
        return $this->db->query("SELECT * FROM notes ORDER BY id DESC")->result_array();
    }

    public function update($post)
    {
        return $this->db->query("UPDATE notes SET description = ?, updated_at = NOW() WHERE id = ?", array($post['description'], $post['note_id']));
    }

    public function delete($id)
    {
        return $this->db->query("DELETE FROM notes WHERE id = ?", array($id));
    }

    // $data = $this->security->xss_clean($data);

  
}
