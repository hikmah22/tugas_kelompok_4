<?php

echo "<h3> Anggota Kelompok 4 : </h3>" ;

$seseorang="<b> Ilkom Kelas B </b>".'<br>' ;


echo $seseorang. '<br>' ;
echo "Khadijah Bin Yusran".'<br>';
echo "Vicri Haikal".'<br>';
echo "Anas Rudin".'<br>';
echo "MirnaWati".'<br>';
echo "Hikmah".'<br>';
echo "Hatija".'<br>';
echo "Lufia".'<br>';
echo "Nuris".'<br>';

echo "<h1>Aplikasi Kalkulator Manual</h1>";
$n1=20;
$n2=5;
$operasi="/";
if($operasi=="+"){
    $hasil=$n1+$n2;
}elseif($operasi=="-"){
    $hasil=$n1-$n2;
}elseif($operasi=="*"){
    $hasil=$n1*$n2;
}elseif($operasi=="/"){
    $hasil=$n1/$n2;
}else{
    $hasil="kabohe" ;
}
echo "Nilai 1=".$n1.'<br>';
echo "Nilai 2=".$n2.'<br>';
echo "Operasi".$operasi.'<br>';

echo "Hasilnya=".$hasil;

?>