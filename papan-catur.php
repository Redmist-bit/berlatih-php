<?php
	/*echo "Asterix: ";
        echo "<br>";        
        for ($j=1; $j<=5; $j++){
            for($k=$j; $k>=1; $k--){
                echo "*";
            }
            echo "<br>";
        }*/

    function papan_catur($angka){
    	
    	for ($i=0; $i < $angka; $i++) { 
    		
    		for ($a=0; $a < $angka*2-1; $a++) { 
                
    			if (($i % 2 == 0 && $a % 2 == 0) || ($i % 2 == 1 && $a % 2 == 1)) {
    				echo "#";
    			}else{
    				echo "&nbsp";
    			}
                
    		}
            echo "<br>";
    	}
    	echo "<br>";
    }

    // TEST CASES
    echo papan_catur(4);
    /*
    # # # #
     # # #
    # # # #
     # # #
     */

    echo papan_catur(8);
    /* 
    # # # # # # # #
     # # # # # # # 
    # # # # # # # #
     # # # # # # # 
    # # # # # # # #
     # # # # # # #
    # # # # # # # #
     # # # # # # #
    */
    echo papan_catur(5);
    /*
    # # # # #
     # # # #
    # # # # #
     # # # # 
    # # # # #
    */
?>