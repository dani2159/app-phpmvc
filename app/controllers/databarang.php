<?php 

    Class databarang extends Controller  {
        public function index() {
            
            $data['title'] = 'Data Barang';
            $data['barang'] = $this->model('databarangModel')->getAllBarang();

            $this->view('layouts/header', $data);
            $this->view('databarang/index', $data);
            $this->view('layouts/footer');


        }

    }