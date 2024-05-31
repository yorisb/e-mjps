<?php

class menuModel extends CI_Model
{

    public function hapusData($id)
    {
        $this->db->delete('user', ['id' => $id]);
    }

    public function hapusNilai($nis)
    {
        $this->db->delete('nilai_pretest', ['id' => $nis]);
    }
}
