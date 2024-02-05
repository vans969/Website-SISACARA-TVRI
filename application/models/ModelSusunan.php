<?php
class ModelSusunan extends CI_Model
{
    function gettahun()
    {
        $query = $this->db->query("SELECT YEAR(tanggal_siaran) AS tahun FROM data_siaran GROUP BY YEAR(tanggal_siaran) ORDER BY YEAR(tanggal_siaran) ASC";
        
        return $query->result();
    }

    function filterbytanggal($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM data_susunan WHERE tanggal_siaran BETWEEN '$tanggalawal' and '$tanggalakhi' ORDER BY tanggal_acara ASC";
        
        return $query->result();
    }
    function HapusPotongan($potongan)
    {
        $this->db->delete('potongan_gaji', array('potongan' => $potongan));
    }
}
