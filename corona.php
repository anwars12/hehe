<?php
/* 
SIMPLE COVID-19 DATA CHECKER
Made with ❤️ by Vigne Sulaiman - 2020/03/16
Thanks worldometers.info

Contoh negara
- china
- italy
- indonesia
- dll..
*/
error_reporting(0);
$negara = "indonesia"; // ganti negara
$page = file_get_contents('https://www.worldometers.info/coronavirus/');
$com = str_replace(' ','',$page); $com = str_replace('</a>','',$com);
preg_match_all('/'.ucwords($negara).'<\/td><td(.*?)>(.*?)\<\/td\><td(.*?)>(.*?)<\/td><td(.*?)>(.*?)<\/td><td(.*?)>(.*?)<\/td><td(.*?)>(.*?)<\/td><td(.*?)>(.*?)<\/td><td(.*?)>(.*?)<\/td><td(.*?)>(.*?)<\/td>/', $com, $data);
$output = "
Negara : $negara <br>
Total Kasus : ".$data[2][0]." <br>
Kasus Aktif : ".$data[12][0]." <br>
Kasus Baru : ".$data[4][0]." <br>
Total Meninggal : ".$data[6][0]." <br>
Total Sembuh : ".$data[10][0]." <br>
";
print_r($output); // Menampilkan Hasil
?>
