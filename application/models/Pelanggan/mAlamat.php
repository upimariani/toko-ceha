<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAlamat extends CI_Model
{
    public function kecamatan($id)
    {
        $this->db->select('*');
        $this->db->from('kecamatan');
        $this->db->where('kode', $id);
        return $this->db->get()->result();
    }
}

/* End of file mAlamat.php */
