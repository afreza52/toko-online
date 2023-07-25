<?php
class M_auth extends CI_Model
{
    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db->get_where('user', array('username' => $username, 'password' => $password), 1);

        return ($result->num_rows() > 0) ? $result->row() : array();
    }
}