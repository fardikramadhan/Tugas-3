<?php
$mobil1 = array('Toyota', 'Mitsubishi', 'Tesla', 'Honda');
$mobil2 = array('satu'=>'Toyota', 'dua'=>'Mitsubishi', 'tiga'=>'Tesla','empat'=>'Honda');
//menampilkan numberik array ($mobil1) menggunakan for - loop dan while - loop
//for - loop
for($i = 0; $i <= 3; $i++){
    echo $mobil1[$i] . ", ";
}
//while - loop
$i=0;
while($i<=3){
    echo "Mobil $mobil1[$i]<br>";
    $i++;
}
//menampilkan assosiatif array ($mobil2) menggunakan foreach - loop
foreach($mobil2 as $key=>$value){
    echo "$key $value". ', ';
}
?>