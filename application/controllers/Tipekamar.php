<?php

    class tipekamar extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('M_Tipekamar');
        }

        public function index() {
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
    
            $data['title'] = "tipekamar";
            $data['tipekamar'] = $this->M_Tipekamar->data_tipekamar();
            $this->template->load_admin('index','tipekamar',$data);
        }

        public function tambah(){
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
        
            $data['title'] = "tipekamar";
            $data['subtitle'] = "Tambah tipekamar";
            $this->template->load_admin('index','tipekamar_tambah',$data);		
        }

        public function simpan(){
            if($this->session->userrdata('login')!= TRUE){
                redirect('login');
            }
        
            $this->M_tipekamar->simpan();		
            redirect('tipekamar');
        }

        public function ubah(){
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
        
            $data['title'] = "tipekamar";
            $data['subtitle'] = "Edit tipekamar";
        
            $id = $this->uri->segment(3);
            $data['tipekamar'] = $this->M_Tipekamar->data_tipekamar_by_id($id);
            $this->template->load_admin('index','tipekamar_ubah',$data);
        }

        public function update(){
            if ($this->session->userdata('login') != true) {
                redirect('login');
            }
        
            $this->M_Tipekamar->update();
            redirect('tipekamar');
        }

        public function hapus(){
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
        
            $id = $this->uri->segment(3);
            $this->M_Tipekamar->hapus_data_tipekamar($id);
            redirect('tipekamar');
        }
    }