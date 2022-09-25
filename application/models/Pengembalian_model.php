<?php
class pengembalian_model extends ci_model{

	function data()
    {
        $this->db->order_by('id_kembali','DESC');
        return $query = $this->db->get('pengembalian');
    }
    
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
         if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return false;

    }

    


}