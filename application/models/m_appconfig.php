
<?php

class M_appconfig extends CI_Model{

    // Mengakses tabel app_config pada database
    function get_all(){
        $this->db->from('app_config');
        $this->db->order_by("key","asc");
        return $this->db->get();
    }
}