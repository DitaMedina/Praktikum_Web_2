<?php
class Motor {
    public $merk;
    public $bensin;
    public $topSpeed;
    public $cc;


    public function __construct($merk, $bensin, $topSpeed, $cc) {
        $this->merk =$merk;
        $this->bensin =$bensin;
        $this->topSpeed =$topSpeed;
        $this->cc =$cc;
    }
    public function jalan($jarak)
    {
      $jalan = $jarak / 50;
      $waktu = $jarak / $this->topSpeed;
      $this->bensin -= $jalan;
    
    echo "Motor <p>$this->merk >$this->topSpeed km/h</b>, sampai ke tempat tujuan dengan waktu <b>$waktu jam</b>
     dan bensin yang tersisa yaitu <b>$this->bensin Liter</b> <hr><br>";

    }

}
$motor = new Motor('Nmax', 6, 125, 200);
$motor->Jalan(50);



?>