<?php
class Koneksi {
    private $server = "localhost";
    private $username = "dev"; // root
    private $password = "dewimaliana"; // ""
    private $db = "id4927486_stok_barang";

    function getKoneksi() {
        return new mysqli($this->server, $this->username, 
        $this->password, $this->db);
    }
}
?>