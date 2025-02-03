<?php

    function evitarsqli($subject){
        $search  = array('SELECT', 'UNION','SLEEP',"'","(", ")", '"');
        $replace = array('');
        for($i = 0; $i < count($search);$i++){
            $subject = addslashes(str_replace('"','',str_replace($search[$i], $replace[0], $subject)));
        }
        echo $subject;
        $min=2;
        $max=10;
        $random_wait = rand($min,$max);
        sleep($random_wait+3);
        return $subject;
    }

    /* SI ES UN INT */
    function evitarsqlint($subject){
        if(!is_numeric($subject)){
            return 1;
        }else{
            return intval($subject);
        }
        
    }
?>