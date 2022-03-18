<?php

    class M_Tipekamar extends CI_Model {
        function data_tipekamar() {
            $query = $this->db->query("select * from kamar_tipe");
            return $query;
        }

        function simpan(){
            $data = array('id_tipekamar' => $this->input->post('id_tipekamar'),
                    'nama_kamar_tipe' => $this->input->post('nama_kamar_tipe'),
                    'fasilitas' => $this->input->post('fasilitas'),
                    'gambar' => $this->input->post('gambar'),
                    'harga' => $this->input->post('harga'));
            $insert = $this->db->insert('tipekamar',$data);

            if ($insert > 0) {
                $this->session->set_flashdata('suksessimpan','Data Kamar Berhasil Disimpan');
            }else{
                $this->session->set_flashdata('gagalsimpan','Data Kamar Gagal Disimpan');
            }		
        }

        function data_tipekamar_by_id($id){
            $query = $this->db->query("select * from kamar_tipe where id_tipekamar = '$id'");
            return $query;
        }

        function update(){
            $where = array('id_kamar_tipe'=> $this->input->post('id_kamar_tipe'));
            $data1 = array('nama_kamar_tipe' => $this->input->post('nama_kamar_tipe'),
                'fasilitas' => md5($this->input->post('fasilitas')),
                'gambar' => $this->input->post('gambar'),
                'harga' => $this->input->post('harga'));
            
           $data2 = array('id_kamar_tipe' => $this->input->post('id_kamar_tipe'),
                'nama_kamar_tipe' => $this->input->post('nama_kamar_tipe'),
                'fasilitas' => $this->input->post('fasilitas'),
                'gambar' => $this->input->post('gambar'),
                'harga' => $this->input->post('harga'));
        
            if (empty($this->input->post('nama'))) {
                 $this->db->where($where);
                $query = $this->db->update('tipekamar',$data2);
            }else{
                $this->db->where($where);
                $query = $this->db->update('tipekamar',$data1);
            }
        
            if ($query > 0) {
                $this->session->set_flashdata('suksessimpan','Data tipekamar Berhasil Diperbaharui');
            }
        }

        function hapus_data_tipekamar($id){
            $query = $this->db->query("delete from kamar_tipe where id_tipekamar = '$id'");
            if($query > 0){
                $this->session->set_flashdata('suksessimpan','Data tipekamar Berhasil Dihapus');
            } else {
                $this->sesssion->set_flashdata('gagalsimpan','Data tipekamar Gagal dihapus');    
            }
        }
    }