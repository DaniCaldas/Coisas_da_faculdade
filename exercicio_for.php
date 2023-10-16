<?php
    function tri($tamanho){
       
        for ($i=1; $i <= $tamanho ; $i++) { 
            for ($e=0; $e <= $i-3 ; $e++) { 
                if($i>1){
                    echo"*";
                }
            }
            echo"\n";
            echo"*";
        }
        
        for ($r=0; $r <= $tamanho -2; $r++) { 
            echo"*";
        }
    }

    function tr($tamanho){
        for ($i=1; $i <= $tamanho; $i++){
            for ($e=0; $e <= $i - 2; $e++){
                echo"*";

            }
            echo "*";
            echo"<br>";
        }
    }

    function quadrado($r){
        for ($i=1; $i <= $r ; $i++) { 
            echo"*";
            for ($e=0; $e < $i; $e++) { 
                echo"*";
            }
        }
    }

    quadrado(4)
?>