<?php

class Cat extends Animal {

    public $perilaku;

    public function __construct($nama)
    {
        $this->nama = $nama;
        $this->jenis = "kucing";
        $this->perilaku = "lincah, mandiri dan pemalu";
    }

    public function getinfo()
    {
        echo "Hewan ini adalah $this->nama jenis $this->jenis. $this->jenis adalah hewan yang $this->perilaku. ";
    }
}

?>