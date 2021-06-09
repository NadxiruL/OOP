<?php

//class is a BLUEPRINT
class Buku {

    // this is a property
    public $tajuk ;
    public $harga ;
    public $penulis ;
    public $english ;
    public $malay ;
    public $chinese ;


    // this is constructor @ special method .
    //$this-> we are taking a variable in the property .

                                //local variable//
    public function __construct($tajuk , $harga , $penulis){

        $this->tajuk = $tajuk;
        $this->harga = $harga;
        $this->penulis = $penulis;
        
    }

// this is a method .
public function maklumatBuku() {

    return " $this->tajuk  $this->harga  $this->penulis " ;

    }

}

//kelas untuk cetak informasi produk. apa apa produk.
class Cetak {

    
public function cetakInfoProduk(){



    }
}

// instance a object
$produk1 = new Buku("how i met your mother", 25, "jesse mclean");

/*$produk1 -> tajuk = 'How I Met Your Mother';
$produk1 -> harga = 25;
$produk1 -> penulis = 'Jesse McLean';*/


$produk2 = new Buku("harry potter",9.99,"j.k rowling");

/*$produk2 -> tajuk = 'Harry Potter';
$produk2 -> harga = 9.99;
$produk2 -> penulis = 'J.K Rowling';*/

//nak papar maklumat so kita panggil objek nya di depan , lain object lain maklumat.
echo "Buku 1 " .  $produk1->maklumatBuku();

echo "<br>";

echo "Buku 2 " . $produk2->maklumatBuku();



?>
