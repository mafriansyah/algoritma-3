<?php
class makanan {
  public $nama;
  public $warna;

  public function __construct($nama, $warna){
    $this->nama = $nama;
    $this->warna = $warna;
  }
}

$nasgor = new makanan("nasgor", "kuning");
$seblak = new makanan("seblak", "warna");
print_r($apel);
print "<p>";
print_r($seblak);

print_r("<p><strong>by :M Afriansyah");