<?php

//class is a BLUEPRINT
//class untuk simpan data.
class Produk {

    // this is a property

    public $tajuk , $harga , $penulis , $jmlhalaman , $tmphWktu;
   


    // this is constructor @ special method .
    //$this-> we are taking a variable in the property .

                                //local variable//
    public function __construct($tajuk , $harga , $penulis , $jmlhalaman = 0 , $tmphWktu = 0){

        $this->tajuk = $tajuk;
        $this->harga = $harga;
        $this->penulis = $penulis;
        $this->jmlhalaman = $jmlhalaman;
        $this->tmphWktu = $tmphWktu;
   
        
    }

// this is a method / function untuk kita buat apa , sini kita nak papar maklumat buku..
public function maklumatProduk() {

    return " $this->tajuk  $this->harga  $this->penulis " ;

    }

public function getfullInfo(){

            //("Harry Potter", 25, "jesse mclean" , 100 , 0 , "buku");

        $str = " {$this->maklumatProduk()}  " ;

        return $str ;

    }


}

// inheritance parts . kita ambik maklumat berbeza , untuk komik ada jumlah halaman , untuk game ada waktu main .
// dua produk berbeza dan maklumat berbeza .

class Komik extends Produk {

    public function getinfoKomik() {

        $str = " Komik : {$this->maklumatProduk()} {$this->jmlhalaman} " ;

        return $str ;
    }

}


class Game extends Produk {

    public function getinfoGame(){

        $str = " Game : {$this->maklumatProduk()} {$this->tmphWktu}" ;

        return $str ;
    }


}



//kelas untuk cetak informasi produk. apa apa produk. //object type
class Cetak {

                            //receive input parameter for this method..
                            //guna tanda {} supaya tak perlu gabung gabung string..
                            //kita letak Produk sebab kita nak cetak Produk sahaja..
public function cetakInfoProduk(  Produk $produk ){

    $str = "{$produk->tajuk} {$produk->maklumatProduk()} ";
    return $str ;

    }
}

// instance a object
$produk1 = new Komik("Harry Potter", 25, "jesse mclean" , 100 , 0 );

/*$produk1 -> tajuk = 'How I Met Your Mother';
$produk1 -> harga = 25;
$produk1 -> penulis = 'Jesse McLean';*/


$produk2 = new Game("Uncharted",9.99,"j.k rowling" , 0 , 50 );

/*$produk2 -> tajuk = 'Harry Potter';
$produk2 -> harga = 9.99;
$produk2 -> penulis = 'J.K Rowling';*/

//nak papar maklumat so kita panggil objek nya di depan , lain object lain maklumat.


echo $produk1->getinfoKomik();

echo "<br>";

echo $produk2->getinfoGame();


