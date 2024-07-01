<?php
class ActModel extends My_Model
{
    //untuk nampilkan data
    public function all_data()
    {
        $this->db->select('*');
        $this->db->from('pc_printer');
        return $this->db->get()->result();
    }

    //untuk edit data
    public function unique_nbarang()
    {
        $this->db->distinct();
        $this->db->select('nama_barang');
        $query = $this->db->get('pc_printer');
        return $query->result();
    }
    public function unique_merek()
    {
        $this->db->distinct();
        $this->db->select('merek');
        $query = $this->db->get('pc_printer');
        return $query->result();
    }
    public function get_by_id($id_pcp)
    {
        $this->db->where('id_pcp', $id_pcp);
        $query = $this->db->get('pc_printer');
        return $query->row();
    }
    public function update_data($id_pcp, $data)
    {
        $this->db->where('id_pcp', $id_pcp);
        return $this->db->update('pc_printer', $data);
    }

    //untuk hapus data
    public function hapus($id_pcp)
    {
        $this->db->where('id_pcp', $id_pcp);
        $this->db->delete('pc_printer');
    }
}
?>