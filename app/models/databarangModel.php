<?php 

Class databarangModel {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    
    public function getAllBarang() {

        // $this->stmt = $this->dbh->prepare('SELECT * FROM tb_barang');
        // $this->stmt->execute();
        // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

        $query = "SELECT * FROM tb_barang";
        $this->db->query($query );
        return $this->db->resultSet();

    }
}