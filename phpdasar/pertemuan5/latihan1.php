<?php 

// Array
// array adalah kumpulan nilai dalam satu variabel yang bisa diisi dengan tipe data yang berbeda
// dengan array nilai yang harusnya dipakai dalam banyak variabel bisa kita buat hanya dengan 1 variabel 
// example

$nama_klub = ["Barcelona", "Real Madrid", "Atletico Madrid"];
$nama = ["Messi", "Ronaldo", "Neymar"];

// mengecek array bisa dilakuakn hanya dengan var_dump() dan print_r()

var_dump($nama_klub);
echo "<br>";

print_r($nama_klub);

// untuk mencetak array kita bisa gunakan echo tetapi hanya mencetak element salah satu atau beberapa di array
echo "<br>";
echo $nama[2];
echo "<br>";


$nama[] = "Yamal";
// menambhakan element array
echo $nama[3];


?>