<?php

use LDAP\Result;

class Model_tiket extends CI_Model
{

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    // insert data ke database
    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    // mencari data dengan id yang tepat satu
    public function get_where($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    // update data ke database
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    // hapus data
    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
