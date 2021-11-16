<?php
	// buat class induk mobil
    class mobil {
    	public $kecepatan;
        public $waktu;
        
        public function __construct($kecepatan,$waktu){
        	$this->kecepatan = $kecepatan;
            $this->waktu = $waktu;
        }
    
  
    }
    
    	//buat inheritance
    //turunan class mobil (induk) ke class pemilik (anak)
    class jarakTempuhMobil extends mobil {
    	public function cek_jarak(){
    		$rumus = $this->kecepatan * $this->waktu;
            $hasil="Kecepatan mobil = $this->kecepatan km <br> Waktu = $this->waktu second <br> Maka Jaraknya = $rumus m";
            
            return $hasil;
         }
    }
    
    
     
     // instansiasi objek
     $mobil_budi = new jarakTempuhMobil(50, 100);
     
     // panggil method objek
     echo $mobil_budi->cek_jarak();

?>
            
        	
