<?php
/*function Palindrome($number){   
       
} */
/*function palindrome_angka($angka) {
  // tulis kode di sini
	$temp = $angka;   
    $new = 0;   
    while (floor($temp)) {   
        $d = $temp % 10;   
        $new = $new * 10 + $d;   
        $temp = $temp/10;   
    }   
    if ($new == $angka){   
        echo "Palindrome<br>";   
        echo $temp=$angka+1 . "<br>";
    } 
    else{ 
        echo "Not a Palindrome<br>";
    } 
}  */ /*
 function palindrome($n){  
$number = $n;  
$sum = 0;  
while(floor($number)) {  
$rem = $number % 10;  
$sum = $sum * 10 + $rem;  
$number = $number/10;  
}  
return $sum;  
}  
$input = $n;  
$num = palindrome($input);  
if($input==$num){  
echo "$input is a Palindrome number";  
} else {  
echo "$input is not a Palindrome";  
}  */

function reverseString($string){
    $result = false;
    $panjang = strlen($string);
    
    if(strrev($string)==$string){
        $result = true;
    }
    return $result;
};

function palindrome_angka($angka) {
  // tulis kode di sini
    if($angka>= 1 && $angka<=8){
        return $angka+1;
    }
    if(reverseString($angka)){
        $angka++;
    }
    while (reverseString($angka) == false) {
        $angka++;
    }
    return $angka;
}

///TEST CASES

echo palindrome_angka(8); // 9
echo "<br>" .palindrome_angka(10); // 11
echo "<br>" .palindrome_angka(117); // 121
echo "<br>" .palindrome_angka(175); // 181
echo "<br>" .palindrome_angka(1000); // 1001

?>
