<?php
/*
PENJUMLAHAN BILANGAN GANJIL

Deskripsi :
Diberikan sebuah bilangan bulat `N`, hitunglah jumlah dari `N` bilangan ganjil pertama.

Format Input :
- Sebuah bilangan bulat `N`

Format Output :
- Sebuah bilangan bulat yang mewakili hasil penjumlahan dari `N` bilangan ganjil pertama.

Batasan :
1 <= N <= 100

Contoh Input/Output :
#-- contoh 1 --#
input : 3
output : 9

#-- contoh 2 --#
input : 5
output : 25

#-- contoh 3 --#
input : 9
output : 81

#-- contoh 4 --#
input : 10
output : 100

Penjelasan:
- Pada Contoh 1, 3 bilangan ganjil pertama adalah 1, 3, dan 5. Hasil penjumlahnya adalah (1 + 3 + 5 = 9).

- Pada Contoh 2, 5 bilangan ganjil pertama adalah 1, 3, 5, 7, dan 9.  Hasil penjumlahnya (1 + 3 + 5 + 7 + 9 = 25).
*/

echo "Input Bilangan N : ";
$bilangan_n = (int)trim(fgets(STDIN));
$hasil_jumlah = 0;
$bil_ganjil = 1;

for($i = 1; $i <= $bilangan_n; $i++) {
  $hasil_jumlah += $bil_ganjil;
  $bil_ganjil += 2;
}

echo $hasil_jumlah."\n";

?>

<?php
// Cara ke 2

// echo "Input Bilangan N : ";
// $bilangan_n = (int)trim(fgets(STDIN));
// $hasil_jumlah = $bilangan_n * $bilangan_n;

// echo $hasil_jumlah."\n";

?>
