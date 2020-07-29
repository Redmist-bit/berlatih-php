<?php 

function tukar_besar_kecil($string){
	$test = $string;
	$letters = preg_split('/(?<!^)(?!$)/u', $test );
	foreach ($letters as &$le) {
	    $ucLe = mb_strtoupper($le, 'UTF8');
	    if ($ucLe === $le) {
	        $le = mb_strtolower($le, 'UTF8');
	    }
	    else {
	        $le = $ucLe;
	    }
	}
	unset($le); 
	$reversed_test = implode('', $letters);
	echo $reversed_test."<br>"; // sTaCk OvEяFlOw
}

tukar_besar_kecil('Hello World'); // "hELLO wORLD"
tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"



?>