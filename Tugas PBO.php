<?php                                                               //Diawali dengan
    class motor                                                     //Buat class motor
    {                                                    
        private $jenis_kendaraan = "ENGINE DOHC Cooled system dengan kecepatan DUARIBURATUS";        //Property dengan hak akses private
        public function tampilkan_kendaraan()
        {                                                           //deklarasian fungsi dalam class
            return $this->jenis_kendaraan;                          //Eksekusi fungsi berhenti dan nilai dikembalikan ke pemanggil fungsi
        }
    }
    class mobil extends motor{                                      //Buat class mobil
        public function tampilkan_kendaraan()
        {                                                           //Pendeklarasian function dalam class
            return $this->jenis_kendaraan;                          //Eksekusi fungsi berhenti dan nilai dikembalikan ke pemanggil fungsi
        }
    }
    class jenis{                                                    //Buat class jenis
        protected $nama = "Honda CBR 150R ";                        //Menentukan property dengan protected    
        protected function nama()
        {                                                           //Method protected
            return "Saya memutuskan untuk membeli motor " .$this->nama;             //Eksekusi fungsi berhenti dan nilai dikembalikan ke pemanggil fungsi
        }
    
        public function tampilkan_nama(){                           //Pendeklarasian function dalam class
            return $this->nama();                                   //Eksekusi fungsi berhenti dan nilai dikembalikan ke pemanggil fungsi
        } 
    }
              $jenis_baru = new jenis();                             //Buat objek dari class jenis (instansiasi)
              $motor_baru = new motor();                             //Buat objek dari class motor (instansiasi)
              $mobil_baru = new mobil();                             //Buat objek dari class mobil (instansiasi)\
    
                echo $jenis_baru->tampilkan_nama();                  //Jalankan method dari class jenis
                echo $motor_baru->tampilkan_kendaraan();             //Jalankan method dari class motor
                echo $mobil_baru->tampilkan_kendaraan();             //Jalankan method dari class mobil    (error)
    
                                                                    
?>