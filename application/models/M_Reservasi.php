<?php

    class M_Reservasi extends CI_Model {
        function data_reservasi() {
            $query = $this->db->query("select * from Reservasi");
            return $query;
        }

        function simpan(){
            $data = array('id_reservasi' => $this->input->post('id_reservasi'),
                    'id_tamu' => $this->input->post('id_tamu'),
                    'check_in' => $this->input->post('check_in'),
                    'check_out' => $this->input->post('check_out'),
                    'biaya' => $this->input->post('biaya'),
                    'time_in' => $this->input->post('time_in'),
                    'time_out' => $this->input->post('time_out'));
            $insert = $this->db->insert('reservasi',$data);

            if ($insert > 0) {
                $this->session->set_flashdata('suksessimpan','Data Kamar Berhasil Disimpan');
            }else{
                $this->session->set_flashdata('gagalsimpan','Data Kamar Gagal Disimpan');
            }		
        }

        function data_reservasi_by_id($id){
            $query = $this->db->query("select * from Reservasi where id_reservasi = '$id'");
            return $query;
        }

        function update(){
            $where = array('id_reservasi'=> $this->input->post('id_reservasi'));
            $data1 = array('id_tamu' => $this->input->post('id_tamu'),
                'check_in' => md5($this->input->post('check_in')),
                'check_out' => $this->input->post('check_out'),
                'biaya' => $this->input->post('biaya'),
                'time_in' => $this->input->post('time_in'),
                'time_out' => $this->input->post('time_out'));
            
           $data2 = array('id_tamu' => $this->input->post('id_tamu'),
                'check_in' => $this->input->post('check_in'),
                'check_out' => $this->input->post('check_out'),
                'biaya' => $this->input->post('biaya'),
                'time_in' => $this->input->post('time_in'),
                'time_out' => $this->input->post('time_out'));
        
            if (empty($this->input->post('nama'))) {
                 $this->db->where($where);
                $query = $this->db->update('reservasi',$data2);
            }else{
                $this->db->where($where);
                $query = $this->db->update('reservasi',$data1);
            }
        
            if ($query > 0) {
                $this->session->set_flashdata('suksessimpan','Data reservasi Berhasil Diperbaharui');
            }
        }

        function hapus_data_reservasi($id){
            $query = $this->db->query("delete from Reservasi where id_reservasi = '$id'");
            if($query > 0){
                $this->session->set_flashdata('suksessimpan','Data reservasi Berhasil Dihapus');
            } else {
                $this->sesssion->set_flashdata('gagalsimpan','Data reservasi Gagal dihapus');    
            }
        }
    }