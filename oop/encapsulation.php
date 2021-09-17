<?php

// // PUBLIC
// class manusia{
//     //prop
//     public $nama;
   

//     //method manusia
//     public function tampilkan_nama() {
//         echo "Nama saya dinda";
//     }
//     public function biodata() {
//         echo $this->tampilkan_nama();
//     }
// }
// $manusia = new manusia();

// echo $manusia->biodata();

// // PRIVATE
// class manusia {
//     private $nama = "dinda";

//     // method public
//     public function tampilkan_nama() {
//         return "Nama saya " .$this->nama;
//     }
// }

// $manusia = new manusia();

// echo $manusia->tampilkan_nama();
// echo $manusia->nama;

// PROTECTED
class manusia {
    // menentukan property dengan protected
    // protected $nama = "dinda";

    // method protected
    protected function nama(){
        return "Nama saya dinda";
    }
    public function keluarkan() {
        return $this->nama();
    }
    // public function tampilkan_nama() {
    //     return $this->nama;
    // }
}
$manusia = new manusia();

echo $manusia->keluarkan();
?>