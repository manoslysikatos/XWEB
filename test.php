<?php 
        Solution([3,8,9,7,6],3);

        function Solution($A, $B){
            $firstArray = $A;
            if(count($firstArray)>100){
                echo "Invalid Array";
                return;
            }
           
            $iterator = $B;
            for($x = 0; $x < $iterator; $x++){
                echo "Iteration number ".($x+1);
                echo "<br/>";
                print_r($firstArray);
                
                $lastNumber = array_pop($firstArray);
                array_unshift($firstArray, $lastNumber);
                print_r($firstArray);
                echo "<br/>";
                echo "<br/>";
            }
        }

?>