<?php 
        Solution([3,8,9,7,6],3);

        function Solution($A, $B){
            $firstArray = $A;
            if(count($firstArray)>100){
                echo "Invalid Array";
                return;
            }
            for($i=0; $i<count($firstArray); $i++){
                if($firstArray[$i]<-1000){
                    echo "All integers must be greater than -1000";
                    return;
                }
                if($firstArray[$i]>1000){
                    echo "All integers must be less than 1000";
                    return;
                }
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