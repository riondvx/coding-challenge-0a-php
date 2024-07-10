<?php
/*
NILAI AKHIR

Deskripsi :
Diberikan tiga bilangan bulat `nilai_tugas`, `nilai_UTS`, dan `nilai_UAS`, hitunglah Nilai Akhir dengan persamaan :

Nilai_Akhir = (0.25 * nilai_tugas) + (0.25  * nilai_UTS) + (0.5 * nilai_UAS)

Format Input :
- Baris pertama berupa bilangan bulat untuk `nilai_tugas`.
- Baris kedua berupa bilangan bulat untuk `nilai_UTS`.
- Baris ketiga berupa bilangan bulat untuk `nilai_UAS`.

Format Output :
- Sebuah bilangan desimal yang mewakili Nilai Akhir.

Batasan :
0 ≤ nilai_tugas,nilai_UTS,nilai_UAS ≤ 100

Contoh Input/Output :
#-- contoh 1 --#
input :
80
75
90

output :
83.75

#-- contoh 2 --#
input :
60
70
80

output :
72.5

#-- contoh 3 --#
input :
100
90
95

output : 95.0

#-- contoh 4 --#
input :
50
50
50

output : 50.0


Penjelasan :
- Pada Contoh 1, Nilai Akhir dihitung sebagai  (0.25 * 80) + (0.25 * 75) + (0.5 * 90) = 83.75

- Pada Contoh 2, Nilai Akhir dihitung sebagai (0.25 * 60) + (0.25 * 70) + (0.5 * 80) = 72.50
*/
  $nilai_tugas = (int)readline("-> ");
  $nilai_uts = (int)readline("-> ");
  $nilai_uas = (int)readline("-> ");

  $nilai_akhir = (0.25 * $nilai_tugas) + (0.25  * $nilai_uts) + (0.5 * $nilai_uas);

  echo $nilai_akhir."\n";
