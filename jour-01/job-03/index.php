<?php 

function my_is_multiple(int $divider, int $multiple): bool {
    if ($multiple % $divider == 0) {
        return true ; 
    } else {
        return false ; 
    }
    
}
if(my_is_multiple(3, 5)){
    echo "true";
} else {
    echo "false";
}




?>