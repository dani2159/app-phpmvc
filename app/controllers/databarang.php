<?php 

    Class databarang extends Controller  {
        public function index() {
            
            $data['title'] = 'Data Barang';
            $data['barang'] = $this->model('databarangModel')->getAllBarang();

            $this->view('layouts/header', $data);
            $this->view('databarang/index', $data);
            $this->view('layouts/footer');


        }

        public function tambah() {
            
            $data['title'] = 'Tambah Barang';

            $this->view('layouts/header', $data);
            $this->view('databarang/insert');
            $this->view('layouts/footer');
        }

        public function tambahStore() {
            if($this->model('databarangModel')->tambahDataBarang($_POST) > 0) {
                echo "<script>
                        alert('Data Berhasil Ditambahkan');
                    </script>";
                // header('Location: ' . BASEURL . '/databarang');
                // exit;
            } else {
                echo "<script>
                        alert('Data Gagal Ditambahkan');
                    </script>";
                // header('Location: ' . BASEURL . '/databarang');
                // exit;
            }

            // $this->model('databarangModel')->tambahDataBarang($_POST);
            // header('Location: ' . BASEURL . '/databarang');
            // exit;

        }

        public function detail($id) {
            
            $data['title'] = 'Detail Barang';
            $data['barang'] = $this->model('databarangModel')->getDetailBarang($id);

            $this->view('layouts/header', $data);
            $this->view('databarang/detail', $data);
            $this->view('layouts/footer');


        }

    }