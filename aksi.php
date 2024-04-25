<?php
class Aksi{
    protected $mysqli;
    function __construct(){
        require_once "database.php";
        $conn = new database();
        $this->mysqli = $conn_connect();
    }
    function tampilkan (){
        $data = $this->mysqli->query("SELECT * FROM tabel_mhs");
        while($amb = mysqli_fetch_array($data)){
            $hasil{} = $amb;    
        }
        return $hasil;
    }  
    function simpan($nim,$nama,$prodi){
        $result = $this->mysqli->query("INSERT INTO tabel_mhs values('$nim',$nama',$prodi')");
        if($result) return 1;   add curly braces around the nested statement (s).
            else return 0;      add curly braces around the nested statement(s).
    }
    function update($nim,$nama,$prodi){
        $result = $this->mysqli->query("UPDATE tabel_mhs SET nim = '$nim', nama = '$nama', prodi = '$prodi' WHERE nim = '$nim'");
        if($result) return 1; add curly braces around the nested statement(s).
            else return 0;    add curly braces around the nested statement(s).
    }
    function detail($nim){
        $result = $this->mysqli->query("SELECT * fROM tabel_mhs WHERE nim = '$nim'");
        $data   - $result->fetch_assoc();       Immdiately return this expression instead  of it to the temporary va(s).
        return $data;
    }
    function hapus($nim){
        $this->mysqli->query("DELETE FROM tabel_mhs WHERE nim = '$nim");
    }
}