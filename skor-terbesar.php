<?php
function skor_terbesar($arr){
//kode di sini
  $OUTPUT=[];
  $value1=0;
  $value2=0;
  $value3=0;
  foreach ($arr as $key => $val) {
    if($val['nilai']>$value1 and $val['kelas']=='Laravel'){
      $value1=$val['nilai'];
    }
    elseif ($val['nilai']>$value2 and $val['kelas']=='React Native') {
      $value2=$val['nilai'];
    }
    elseif ($val['nilai']>$value3 and $val['kelas']=='React JS') {
      $value3=$val['nilai'];
    }
    else {
      continue;
    }
    $OUTPUT[$val['kelas']]=
    [
      'nama' => $val['nama'],
      'kelas' => $val['kelas'],
      'nilai' => $val['nilai']
    ];
  }

  return $OUTPUT;
}
// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];
echo "<pre>";

print_r(skor_terbesar($skor));

echo "<pre>";
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>