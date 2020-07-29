<?php
function ubah_huruf($string){
//kode di sini
	$a = str_split($string);
	for ($i=0; $i < count($a) ; $i++) { 
		$b[]= ++$a[$i];
	}
	echo implode("", $b)."<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>