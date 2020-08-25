<?php

class manusia{

    var $nama;
    var $jeniskelamin;
    
    function tampilkan_nama(){
        return "Nama saya Hanif <br/>";
    }
    
    function jenis_kelamin(){
        return "Jenis kelamin saya laki <br/>";
    }
    
}
$manusia = new manusia();

echo $manusia->tampilkan_nama();

echo $manusia->jenis_kelamin();