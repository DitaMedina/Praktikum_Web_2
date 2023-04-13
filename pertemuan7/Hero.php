<?php
class Hero{
    /** 
     * access modifier oop ada 3:
     * 1. public
     * 2. private
     * 3. protected
     */ 


    // attribute / property
    public $nama;
    public $health;
    public $damage;
    public $level = 1;
    
    // constructor adalah method yang jalan otomatis saat object dibuat
    public function __construct($nama, $health, $damage){
        $this->nama = $nama;
        $this->health = $health;
        $this->damage = $damage;
    }

    // method
    public function getInfo()
    {
        echo "<hr>Nama: " . $this->nama;
        echo "<br>HP: " . $this->health;
        echo "<br>Damage: " . $this->damage;
        echo "<br>Level: " . $this->level;
    }
    

    // method untuk naik level
    public function levelUp()
    {
        $this->level = $this->level + 1;
    }

    // method untuk menyerang: kurangi hp target berdasarkan damage dari penyerang
    public function attack($target){
       $target->health = $target->health - $this->damage;
    }
}


// membuat onjek / instansiasi
$hero1 = new Hero("Alucard", 3200, 250);
$hero2 = new Hero("Franco", 5000, 50);

$hero1->levelUp();
$hero1->levelUp();

$hero1->attack($hero2);

$hero1->getInfo();
$hero2->getInfo();