<?php
class transaksi_model extends ci_model{
    


function data()
    {
        $this->db->order_by('id_transaksi','DESC');
        return $query = $this->db->get('transaksi');
    }

    public function detail_data($where, $table)
    {
       return $this->db->get_where($table,$where);
    }

    public function tambah_data($data, $table)
    {
       $this->db->insert($table, $data);
    }

    public function pengembalian($data, $table)
    {
       $this->db->insert($table, $data);
    }

    public function ubah_data($where, $data, $table)
    {
       $this->db->where($where);
       $this->db->update($table, $data);

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

    public function perpanjangpinjam($where, $data, $table)
    {
       $this->db->where($where);
       $this->db->update($table, $data);

    }


}