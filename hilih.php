<?php 
function hilih($text) {
        $vokal = ['a','u','e','o','A','U','E','O'];
        $kimi = ['i','i','i','i','I','I','I','I'];
        $hilih = str_replace($vokal,$kimi,$text);
        return $hilih;
}
echo "Masukan kata-kata : ";
$text = trim(fgets(STDIN));
if ($text) {
    print_r(hilih($text));
} else {
    print_r("Anda Belum Memasukan Kata\n");
}
?>
