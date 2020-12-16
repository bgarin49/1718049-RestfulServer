<?php
class Tulungagung_model extends CI_Model
{
    public function getTulungagung($wilayah = null)
    {
        if ($wilayah === null){
            return $this->db->get('tulungagung')->result_array();
        } else{
            return $this->db->get_where('tulungagung',['wilayah' => $wilayah])->result_array();
        }
        

    }

    // public function getTulungagung_($wilayah, $desa)
    // {
    //     if ($wilayah == null || $desa == null){
    //         return $this->db->get('tulungagung')->result_array();
    //     } elseif ($wilayah > null || $desa == null) {
    //         return $this->db->get_where('tulungagung',['wilayah' => $wilayah])->result_array();
    //     } elseif ($wilayah == null || $desa > null) {
    //         return $this->db->get_where('tulungagung',['desa' => $desa])->result_array();
    //     } elseif ($wilayah > null || $desa > null) {
    //         return $this->db->get_where('tulungagung',['desa' => $desa],['wilayah' => $wilayah])->result_array();
    //     }
        

    // }
    
    public function getTulungagung_desa($desa = null)
    {
        if ($desa === null){
            return $this->db->get('tulungagung')->result_array();
        } else{
            return $this->db->get_where('tulungagung',['desa' => $desa])->result_array();
        }
        

    }

    public function deleteTulungagung($id)
    {
        $this->db->delete('tulungagung', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function createTulungagung($data)
    {
        $this->db->insert('tulungagung', $data);
        return $this->db->affected_rows();
    }

    public function updateTulungagung($data, $id)
    {
        $this->db->update('tulungagung', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }
}