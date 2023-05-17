<?php

class Animal{
    public $nama;
    public $jenis;
    
    public function __construct($nama, $jenis)
    {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }
    
    public function getinfo()
    {
        echo "Hewan ini adalah $this->nama jenis $this->jenis";
    }
}

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

$animal = new Animal("Elang", "Karnivora");
$animal->getinfo(); 
echo "<br><br>";

$cat = new Cat("Neko");
echo $cat->getinfo();
echo "<br><br>";

$dog = new Dog("Inu");
echo $dog->getinfo(). "\n";
