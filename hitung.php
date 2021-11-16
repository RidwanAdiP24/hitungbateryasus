<?php

class asus {
   public $fcs;
   protected $dc;
  
   public function __construct($fcs, $dc) {
     $this->fcs = $fcs;
     $this->dc = $dc;
   }
}

class hitung extends asus {
   public function hitung_asus() {
		 $x = round(($this->fcs/$this->dc) *100) ;
     return $x. "%";
   }

	 public function __destruct() {
	   echo "Keterangan:<br>
				>= 60% = Masih Baik <br>
                < 60% = Saatnya ganti <br>
                ";
	 }
}
  
$asus_batery = new hitung(41.340,47.997 );
  
echo "Batery Asus adalah = ".$asus_batery->hitung_asus()."<hr>";
?>