<?php

    class fasilitas extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('M_Fasilitas');
        }

        public function index() {
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
    
            $data['title'] = "fasilitas";
            $data['fasilitas'] = $this->M_Fasilitas->data_fasilitas();
            $this->template->load_admin('index','fasilitas',$data);
        }

        public function tambah(){
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
        
            $data['title'] = "fasilitas";
            $data['subtitle'] = "Tambah fasilitas";
            $this->template->load_admin('index','fasilitas_tambah',$data);		
        }

        public function simpan(){
            if($this->session->usersdata('login')!= TRUE){
                redirect('login');
            }
        
            $this->M_Fasilitas->simpan();		
            redirect('fasilitas');
        }

        public function ubah(){
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
        
            $data['title'] = "fasilitas";
            $data['subtitle'] = "Edit fasilitas";
        
            $id = $this->uri->segment(3);
            $data['fasilitas'] = $this->M_Fasilitas->data_fasilitas_by_id($id);
            $this->template->load_admin('index','fasilitas_ubah',$data);
        }

        public function update(){
            if ($this->session->userdata('login') != true) {
                redirect('login');
            }
        
            $this->M_Fasilitas->update();
            redirect('fasilitas');
        }

        public function hapus(){
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
        
            $id = $this->uri->segment(3);
            $this->M_Fasilitas->hapus_data_fasilitas($id);
            redirect('fasilitas');
        }
    }