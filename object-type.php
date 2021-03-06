<?php

//class is a BLUEPRINT
//class untuk simpan data.
class Buku {

    // this is a property
    public $tajuk ;
    public $harga ;
    public $penulis ;
   


    // this is constructor @ special method .
    //$this-> we are taking a variable in the property .

                                //local variable//
    public function __construct($tajuk , $harga , $penulis){

        $this->tajuk = $tajuk;
        $this->harga = $harga;
        $this->penulis = $penulis;
        
    }

// this is a method / function untuk kita buat apa , sini kita nak papar maklumat buku..
public function maklumatBuku() {

    return " $this->tajuk  $this->harga  $this->penulis " ;

    }

}

//kelas untuk cetak informasi produk. apa apa produk. //object type
class Cetak {

                            //receive input parameter for this method..
                            //guna tanda {} supaya tak perlu gabung gabung string..
                            //kita letak Produk sebab kita nak cetak Produk sahaja..
public function cetakInfoProduk(  Buku $produk ){

    $str = "{$produk->tajuk} {$produk->maklumatBuku()} ";
    return $str ;

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

echo "<br>";

$produk3 = new Cetak();

echo $produk3->cetakInfoProduk($produk1);

