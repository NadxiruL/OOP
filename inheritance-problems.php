<?php

//class is a BLUEPRINT
//class untuk simpan data.
class Buku {

    // this is a property

    public $tajuk , $harga , $penulis , $jmlhalaman , $tmphWktu , $type ;
   


    // this is constructor @ special method .
    //$this-> we are taking a variable in the property .

                                //local variable//
    public function __construct($tajuk , $harga , $penulis , $jmlhalaman = 0 , $tmphWktu = 0 , $type){

        $this->tajuk = $tajuk;
        $this->harga = $harga;
        $this->penulis = $penulis;
        $this->jmlhalaman = $jmlhalaman;
        $this->tmphWktu = $tmphWktu;
        $this->type = $type;
        
    }

// this is a method / function untuk kita buat apa , sini kita nak papar maklumat buku..
public function maklumatBuku() {

    return " $this->tajuk  $this->harga  $this->penulis " ;

    }

public function getfullInfo(){

            //("Harry Potter", 25, "jesse mclean" , 100 , 0 , "buku");

        $str = " {$this->maklumatBuku()} {$this->type} " ;

        if ($this->type == "buku") {

            $str .= " {$this->jmlhalaman} Halaman. ";
     
        } else if  ($this->type == "game") {

           $str .= " {$this->tmphWktu} Jam .";     

        }

        return $str ;

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
$produk1 = new Buku("Harry Potter", 25, "jesse mclean" , 100 , 0 , "buku");

/*$produk1 -> tajuk = 'How I Met Your Mother';
$produk1 -> harga = 25;
$produk1 -> penulis = 'Jesse McLean';*/


$produk2 = new Buku("Uncharted",9.99,"j.k rowling" , 0 , 50 , "game");

/*$produk2 -> tajuk = 'Harry Potter';
$produk2 -> harga = 9.99;
$produk2 -> penulis = 'J.K Rowling';*/

//nak papar maklumat so kita panggil objek nya di depan , lain object lain maklumat.


echo $produk1->getfullInfo();

echo "<br>";

echo $produk2->getfullInfo();


