<?php

error_reporting(0);

//Prima

function test1($n){
      for($a=1;$a<=$n;$a++){  
              $initPrima = 0; 
              for($j=1;$j<=$a;$j++){
                    if($a % $j==0){ 
                          $initPrima++;
                    }
              }
            if($initPrima==2){
                   echo $a." adalah bilangan PRIMA <br/>";
            }
     }
} 

test1(7);

//Fibbonaci

function test2($fib){
	$prev=0;
	$now=1;

	echo "$prev $now";

	for ($i=0; $i<$fib-2; $i++){
		$output = $now + $prev;
			echo " $output";

			$prev = $now;
			$now = $output;
	}
}

test2(5);
echo "<br>";

// Segitiga

function test3($bil){
	For ($i=0; $i<= strlen($bil);$i++){       
	echo $bil[$i];
	For($j=$i; $j<= strlen($bil)-2;$j++){       
		echo "0";
	}
      echo '<br/>';
  }
}

test3('1345679');

?>