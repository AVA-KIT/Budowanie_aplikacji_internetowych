<?php

$i = 0;

while(isset($argv[++$i])) {
    $email = $argv[$i];
    $atPosition = strpos($argv[$i],'@');    
    if (!$atPosition) {echo "{email} -> BŁĄd1";
    }
    elseif (0 === strpos($email,'.',$atPosition)- $atPosition - 1) {echo "{$email} -> BŁĄd2"; 
    }
    elseif (false !== strpos($email,'@',$atPosition + 1)) {echo "{$email} -> BŁĄd3";
    }
    else {
        echo "{$email} -> OK";
    }
}



