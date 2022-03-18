<?php

    class M_tamu extends CI_Model {
        function data_tamu() {
            $query = $this->db->query("select * from tamu");
            return $query;
        }

        function simpan(){
            $data = array('id_tamu' => $this->input->post('id_tamu'),
                    'nik' => $this->input->post('nik'),
                    'nama_lengkap' => $this->input->post('nama_lengkap'),
                    'tipe_identitas' => $this->input->post('tipe_identitas'),
                    'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                    'alamat' => $this->input->post('alamat'),
                    'provinsi' => $this->input->post('provinsi'),
                    'no_telp' => $this->input->post('no_telp'),
                    'email' => $this->input->post('email'));
            $insert = $this->db->insert('tamu',$data);

            if ($insert > 0) {
                $this->session->set_flashdata('suksessimpan','Data Kamar Berhasil Disimpan');
            }else{
                $this->session->set_flashdata('gagalsimpan','Data Kamar Gagal Disimpan');
            }		
        }

        function data_tamu_by_id($id){
            $query = $this->db->query("select * from tamu where id_tamu = '$id'");
            return $query;
        }

        function update(){
            $where = array('id_tamu'=> $this->input->post('id_tamu'));
            $data1 = array('nik' => $this->input->post('nik'),
                'nama_lengkap' => md5($this->input->post('nama_lengkap')),
                'tipe_identitas' => $this->input->post('tipe_identitas'),
                'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                'provinsi' => $this->input->post('provinsi'),
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'),
                'email' => $this->input->post('email'));
            
                $data2 = array('nik' => $this->input->post('nik'),
                'nama_lengkap' => md5($this->input->post('nama_lengkap')),
                'tipe_identitas' => $this->input->post('tipe_identitas'),
                'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                'provinsi' => $this->input->post('provinsi'),
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'),
                'email' => $this->input->post('email'));
        
            if (empty($this->input->post('nama'))) {
                 $this->db->where($where);
                $query = $this->db->update('tamu',$data2);
            }else{
                $this->db->where($where);
                $query = $this->db->update('tamu',$data1);
            }
        
            if ($query > 0) {
                $this->session->set_flashdata('suksessimpan','Data tamu Berhasil Diperbaharui');
            }
        }

        function hapus_data_tamu($id){
            $query = $this->db->query("delete from tamu where id_tamu = '$id'");
            if($query > 0){
                $this->session->set_flashdata('suksessimpan','Data tamu Berhasil Dihapus');
            } else {
                $this->sesssion->set_flashdata('gagalsimpan','Data tamu Gagal dihapus');    
            }
        }
    }