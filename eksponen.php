<?php
/*
EKSPONEN

Deskripsi :
Buatlah program yang akan menerima dua input, yaitu bilangan pokok (basis) dan bilangan pangkat (eksponen). Setelah itu, program akan menghitung hasil dari bilangan pokok yang dipangkatkan dengan bilangan pangkat tersebut dan menampilkan hasilnya.

Hasil = basis ^ eksponen

Format Input :
- baris pertama berisi bilangan pokok atau basis.
- baris kedua berisi bilangan pangkat atau eksponen

Format Output :
- Satu baris berisi hasil pangkat dari bilangan pokok dengan bilangan pangkat yang diberikan.

#-- Contoh 1 --#
Input :
Bilangan pokok/basis : 4
Bilangan pangkat/eksponen : 3

Output :
Hasil pangkat = 64

#-- Contoh 2 --#
Input :
Bilangan pokok/basis : 2
Bilangan pangkat/eksponen : 5

Output :
Hasil pangkat = 32

#-- Contoh 3 --#
Input :
Bilangan pokok/basis : 3
Bilangan pangkat/eksponen : 4

Output :
Hasil pangkat = 81

#-- Contoh 4 --#
Input :
Bilangan pokok/basis : 8
Bilangan pangkat/eksponen : 4

Output :
Hasil pangkat = 4096
*/

$bil_basis = (int)readline("Bilangan pokok/basis : ");
$bil_eksponen = (int)readline("Bilangan pangkat/eksponen : ");

// 1. Perulangan
$hasil = 1;

for($i = 0; $i < $bil_eksponen; $i++) {
  $hasil *= $bil_basis;
}

// 2. Pow ( power )
// $hasil = pow($bil_basis, $bil_eksponen);

// 3. Operator Eksponen ( ** )
// $hasil = $bil_basis ** $bil_eksponen;

echo "Hasil pangkat = ".$hasil."\n";
