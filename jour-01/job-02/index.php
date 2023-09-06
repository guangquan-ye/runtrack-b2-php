<?php

function my_str_reverse(string $str): string {
    $result = "";

    if (isset($str)) {
        $strLength = 0;
        while (isset($str[$strLength])) {
            $strLength++;
        }

        for ($i = $strLength - 1; $i >= 0; $i--) {
            $result .= $str[$i];
        }
    }

    return $result;
}

$reversedStr = my_str_reverse("Hello");
echo $reversedStr; 

?>