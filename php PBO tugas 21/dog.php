<?php

class Dog extends Animal{

    public $perilaku;

    public function __construct($nama)
    {
        $this->nama = $nama;
        $this->jenis = "anjing";
        $this->perilaku = "setia, cerdas, dan penuh energi.";
    }

    public function getinfo()
    {
        echo "Hewan ini adalah $this->nama jenis $this->jenis. $this->jenis adalah hewan yang $this->perilaku.";   
    }
}

?>